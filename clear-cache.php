<?php
// Clears all CMS API response caches (/cache/*.json + includes/cache/*.json + tmp files).
// Usage:
//   /clear-cache.php?key=KEY          -> clear only
//   /clear-cache.php?key=KEY&warm=1   -> clear + immediately refetch so no visitor hits a cold cache
require_once __DIR__ . '/proxy/config.php';
require_once __DIR__ . '/includes/api-cache.php';

$key = $_GET['key'] ?? '';
if (!hash_equals(DPS_CACHE_REFRESH_KEY, (string) $key)) {
    http_response_code(403);
    exit('Forbidden');
}

dps_cache_clear_all();

header('Content-Type: text/plain; charset=utf-8');
echo "All caches cleared.\n";

if (!empty($_GET['warm'])) {
    @set_time_limit(120);
    include __DIR__ . '/includes/apis.php';
    include __DIR__ . '/includes/session-api.php';
    include __DIR__ . '/includes/get-city.php';
    include __DIR__ . '/includes/grade-api.php';
    echo "Cache warmed.\n";
}
