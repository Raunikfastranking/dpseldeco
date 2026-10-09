<?php
// Cache warmer: force-refreshes all shared API endpoints so visitors always
// get fast cached pages. Run from CLI (php warm-cache.php) or schedule via
// cron/scheduled task hitting /warm-cache?key=<DPS_CACHE_REFRESH_KEY>
require_once __DIR__ . '/proxy/config.php';

if (PHP_SAPI !== 'cli') {
    $key = (string)($_GET['key'] ?? '');
    if ($key === '' || !hash_equals(DPS_CACHE_REFRESH_KEY, $key)) {
        http_response_code(403);
        exit('Forbidden');
    }
    header('Content-Type: text/plain; charset=utf-8');
}

@set_time_limit(120);
$__start = microtime(true);
define('DPS_API_FORCE_REFRESH', true);
include __DIR__ . '/includes/apis.php';
echo 'API cache refreshed in ' . round(microtime(true) - $__start, 2) . "s\n";
