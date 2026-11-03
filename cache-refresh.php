<?php
// Instant cache refresh: clears all cached API responses and re-fetches them.
// Open this URL once after updating the CMS and changes reflect immediately:
//   /cache-refresh?key=<DPS_CACHE_REFRESH_KEY>
require_once __DIR__ . '/proxy/config.php';
require_once __DIR__ . '/includes/api-cache.php';

$key = (string)($_GET['key'] ?? '');
if ($key === '' || !hash_equals(DPS_CACHE_REFRESH_KEY, $key)) {
    http_response_code(403);
    exit('Forbidden');
}

header('Content-Type: text/plain; charset=utf-8');
@set_time_limit(120);

dps_cache_clear();

$__start = microtime(true);
define('DPS_API_FORCE_REFRESH', true);
include __DIR__ . '/includes/apis.php';
echo 'Cache cleared & refreshed in ' . round(microtime(true) - $__start, 2) . "s\n";
