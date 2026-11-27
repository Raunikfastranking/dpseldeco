<?php
// Shared file-based cache for remote API responses.
// Data is stored under /cache/*.json so pages do not hit the remote API on every request.

if (!defined('DPS_API_CACHE_DIR')) {
    define('DPS_API_CACHE_DIR', dirname(__DIR__) . '/cache');
}
if (!defined('DPS_API_CACHE_TTL')) {
    define('DPS_API_CACHE_TTL', 60); // seconds a cached response stays fresh
}

if (!function_exists('dps_cache_file')) {
    function dps_cache_file($key)
    {
        return DPS_API_CACHE_DIR . '/' . preg_replace('/[^A-Za-z0-9_-]/', '_', (string) $key) . '.json';
    }
}

if (!function_exists('dps_cache_get')) {
    // Returns fresh cached data, or null when missing/expired.
    function dps_cache_get($key, $ttl = DPS_API_CACHE_TTL)
    {
        $file = dps_cache_file($key);
        if (!is_file($file) || (time() - filemtime($file)) > $ttl) {
            return null;
        }
        $raw = @file_get_contents($file);
        if ($raw === false || $raw === '') {
            return null;
        }
        return json_decode($raw, true);
    }
}

if (!function_exists('dps_cache_get_stale')) {
    // Returns cached data regardless of age (used as fallback when the API fails).
    function dps_cache_get_stale($key)
    {
        $file = dps_cache_file($key);
        if (!is_file($file)) {
            return null;
        }
        $raw = @file_get_contents($file);
        if ($raw === false || $raw === '') {
            return null;
        }
        return json_decode($raw, true);
    }
}

if (!function_exists('dps_cache_sweep_tmp')) {
    // Removes abandoned *.tmp files left behind by interrupted cache writes.
    function dps_cache_sweep_tmp()
    {
        foreach (glob(DPS_API_CACHE_DIR . '/*.tmp') ?: [] as $file) {
            if (time() - @filemtime($file) > 300) {
                @unlink($file);
            }
        }
    }
}

if (!function_exists('dps_cache_set')) {
    function dps_cache_set($key, $data)
    {
        if (!is_dir(DPS_API_CACHE_DIR)) {
            @mkdir(DPS_API_CACHE_DIR, 0755, true);
        }
        $file = dps_cache_file($key);
        $tmp  = $file . '.' . getmypid() . '.tmp';
        if (@file_put_contents($tmp, json_encode($data), LOCK_EX) !== false) {
            @rename($tmp, $file);
        }
        if (mt_rand(1, 50) === 1) {
            dps_cache_sweep_tmp();
        }
    }
}

if (!function_exists('dps_cache_clear')) {
    function dps_cache_clear()
    {
        foreach (glob(DPS_API_CACHE_DIR . '/*.json') ?: [] as $file) {
            @unlink($file);
        }
    }
}

if (!function_exists('dps_cache_clear_all')) {
    // Clears every cache location: /cache JSON files, leftover .tmp writes,
    // the refresh lock, and the private caches under includes/cache/.
    function dps_cache_clear_all()
    {
        foreach (glob(DPS_API_CACHE_DIR . '/*.json') ?: [] as $file) {
            @unlink($file);
        }
        foreach (glob(DPS_API_CACHE_DIR . '/*.tmp') ?: [] as $file) {
            @unlink($file);
        }
        @unlink(DPS_API_CACHE_DIR . '/.refresh.lock');

        $extra = __DIR__ . '/cache';
        foreach (glob($extra . '/*.json') ?: [] as $file) {
            @unlink($file);
        }
        $extraApi = $extra . '/api';
        foreach (glob($extraApi . '/*.json') ?: [] as $file) {
            @unlink($file);
        }
    }
}

if (!function_exists('dps_cache_get_state')) {
    // Returns [decoded_data|null, is_fresh] — unlike dps_cache_get this also
    // returns expired (stale) data so callers can serve it while refreshing.
    function dps_cache_get_state($key, $ttl = DPS_API_CACHE_TTL)
    {
        $file = dps_cache_file($key);
        if (!is_file($file)) {
            return [null, false];
        }
        $data = json_decode((string) @file_get_contents($file), true);
        if ($data === null) {
            return [null, false];
        }
        return [$data, (time() - filemtime($file)) <= $ttl];
    }
}

if (!function_exists('dps_fetch_multi')) {
    // Fetches multiple API endpoints in parallel and caches each response.
    // Returns [key => decoded_json|null].
    function dps_fetch_multi(array $toFetch, $baseUrl = 'https://dps.allenhouseschools.com/api')
    {
        if (!function_exists('api_auth_headers')) {
            require_once dirname(__DIR__) . '/proxy/config.php';
        }
        $results = array_fill_keys(array_keys($toFetch), null);
        if (empty($toFetch)) {
            return $results;
        }
        $mh = curl_multi_init();
        $curlHandles = [];
        foreach ($toFetch as $key => $endpoint) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());
            curl_multi_add_handle($mh, $ch);
            $curlHandles[$key] = $ch;
        }
        $running = null;
        do {
            $status = curl_multi_exec($mh, $running);
            if ($status > CURLM_OK) {
                break;
            }
            curl_multi_select($mh);
            usleep(10000);
        } while ($running > 0);

        foreach ($curlHandles as $key => $ch) {
            $decoded = json_decode(curl_multi_getcontent($ch), true);
            if ($decoded !== null) {
                dps_cache_set('api_' . md5($toFetch[$key]), $decoded);
                $results[$key] = $decoded;
            }
            curl_multi_remove_handle($mh, $ch);
            curl_close($ch);
        }
        curl_multi_close($mh);
        return $results;
    }
}

if (!function_exists('dps_refresh_lock_acquire')) {
    // Simple lock file so only one request refreshes the cache at a time.
    function dps_refresh_lock_acquire($ttl = 45)
    {
        $file = DPS_API_CACHE_DIR . '/.refresh.lock';
        if (is_file($file) && (time() - filemtime($file)) < $ttl) {
            return false;
        }
        return @touch($file);
    }
}

if (!function_exists('dps_refresh_lock_release')) {
    function dps_refresh_lock_release()
    {
        @unlink(DPS_API_CACHE_DIR . '/.refresh.lock');
    }
}

if (!function_exists('dps_run_scheduled_refreshes')) {
    // Runs queued refresh jobs after the response has been sent to the visitor.
    function dps_run_scheduled_refreshes()
    {
        $jobs = $GLOBALS['dps_refresh_jobs'] ?? [];
        if (empty($jobs)) {
            return;
        }
        if (function_exists('fastcgi_finish_request')) {
            @fastcgi_finish_request();
        }
        ignore_user_abort(true);
        @set_time_limit(120);
        if (!dps_refresh_lock_acquire()) {
            return;
        }
        try {
            foreach ($jobs as $job) {
                try {
                    $job();
                } catch (Throwable $e) {
                }
            }
        } finally {
            dps_refresh_lock_release();
        }
    }
}

if (!function_exists('dps_schedule_refresh')) {
    // Queues a cache-refresh job to run after the current response is sent.
    function dps_schedule_refresh(callable $job)
    {
        static $registered = false;
        $GLOBALS['dps_refresh_jobs'][] = $job;
        if (!$registered) {
            $registered = true;
            register_shutdown_function('dps_run_scheduled_refreshes');
        }
    }
}

if (!function_exists('dps_swr')) {
    // Stale-while-revalidate: fresh data is returned immediately, stale data is
    // served instantly and refreshed in the background, and only a completely
    // missing cache forces a synchronous fetch.
    function dps_swr($key, callable $fetcher)
    {
        list($data, $fresh) = dps_cache_get_state($key);
        if ($fresh) {
            return $data;
        }
        if ($data !== null) {
            dps_schedule_refresh($fetcher);
            return $data;
        }
        return $fetcher();
    }
}

if (!function_exists('dps_fetch_multiple')) {
    // Batch version of the SWR flow used for the site-wide endpoint map.
    function dps_fetch_multiple(array $endpoints, $forceRefresh = false, $baseUrl = 'https://dps.allenhouseschools.com/api')
    {
        $responses = [];
        $toFetch = [];
        $needsSync = $forceRefresh;

        foreach ($endpoints as $key => $endpoint) {
            $cacheKey = 'api_' . md5($endpoint);
            if ($forceRefresh) {
                $toFetch[$key] = $endpoint;
                continue;
            }
            list($data, $fresh) = dps_cache_get_state($cacheKey);
            if ($fresh) {
                $responses[$key] = $data;
            } else {
                $toFetch[$key] = $endpoint;
                if ($data === null) {
                    $needsSync = true;
                } else {
                    $responses[$key] = $data;
                }
            }
        }

        if (empty($toFetch)) {
            return $responses;
        }

        if ($needsSync) {
            foreach (dps_fetch_multi($toFetch, $baseUrl) as $key => $decoded) {
                if ($decoded !== null) {
                    $responses[$key] = $decoded;
                } elseif (!isset($responses[$key])) {
                    $responses[$key] = dps_cache_get_stale('api_' . md5($toFetch[$key]));
                }
            }
        } else {
            // Everything needed for the page is already available (stale);
            // refresh it in the background after the response is sent.
            dps_schedule_refresh(function () use ($toFetch, $baseUrl) {
                dps_fetch_multi($toFetch, $baseUrl);
            });
        }
        return $responses;
    }
}
