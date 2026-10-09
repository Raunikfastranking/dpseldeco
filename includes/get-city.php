<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/api-cache.php';

// Fetches cities associated with branch (213 items, not paginated)
$cached = dps_cache_get('cities_' . DPS_ELDECO_BRANCH_ID);
if (is_array($cached)) {
    return $cached;
}

$branchId = DPS_ELDECO_BRANCH_ID;
$apiUrl = "https://dps.allenhouseschools.com/api/cities/{$branchId}";

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 15,          // Slightly longer – large list
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_HTTPHEADER     => api_auth_headers(),
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    return dps_cache_get_stale('cities_' . DPS_ELDECO_BRANCH_ID) ?? [];
}

$json = json_decode($response, true);

// Handle both possible structures: wrapped {status, count, data: [...]} or direct array
if (is_array($json) && isset($json['status']) && $json['status'] === 'success') {
    $cities = $json['data'] ?? [];           // wrapped version
    if (is_array($cities) && $cities !== []) {
        dps_cache_set('cities_' . $branchId, $cities);
    }
    return $cities;
}

if (is_array($json)) {
    if ($json !== []) {
        dps_cache_set('cities_' . $branchId, $json);
    }
    return $json;                            // direct array version
}

return dps_cache_get_stale('cities_' . $branchId) ?? [];
?>
