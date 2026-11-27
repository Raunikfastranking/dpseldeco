<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once dirname(__DIR__) . '/includes/api-cache.php';

header('Content-Type: application/json; charset=utf-8');

$branchId = isset($_GET['branch']) ? (int) $_GET['branch'] : (int) DPS_ELDECO_BRANCH_ID;

if ($branchId !== (int) DPS_ELDECO_BRANCH_ID) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Invalid branch']);
    exit;
}

$cacheKey = 'tc_details_' . $branchId;
$payload = dps_swr($cacheKey, function () use ($branchId, $cacheKey) {
    $url = 'https://dps.allenhouseschools.com/api/tc-details/' . $branchId;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, api_auth_headers());

    $response = curl_exec($ch);
    $status = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($response !== false && $status === 200) {
        dps_cache_set($cacheKey, $response);
        return $response;
    }

    $stale = dps_cache_get_stale($cacheKey);
    if ($stale !== null) {
        return $stale;
    }

    http_response_code($status > 0 ? $status : 502);
    return $response !== false ? $response : json_encode(['success' => false, 'message' => 'API request failed']);
});

echo is_string($payload) ? $payload : json_encode($payload);
