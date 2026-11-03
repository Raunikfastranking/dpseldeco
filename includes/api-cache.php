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
