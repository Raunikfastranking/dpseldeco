<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/api-cache.php';

// includes/grade-api.php
// Shared cache (same TTL as the rest of the site) + stale-while-revalidate:
// expired data is served instantly and refreshed in the background.

$branchId = DPS_ELDECO_BRANCH_ID;

return dps_swr('grades_' . $branchId, function () use ($branchId) {
    $apiUrl = "https://dps.allenhouseschools.com/api/grades/{$branchId}";

    $ch = curl_init($apiUrl);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true, // Follow redirects if any
        CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; YourSite/1.0)', // Be a good citizen
        CURLOPT_HTTPHEADER => api_auth_headers(),
    ]);

    $response = curl_exec($ch);
    $curlError = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Handle errors gracefully
    if ($response === false) {
        error_log("Grade API cURL error for branch {$branchId}: " . $curlError);
        return dps_cache_get_stale('grades_' . $branchId) ?? [];
    }

    if ($httpCode !== 200) {
        error_log("Grade API HTTP error for branch {$branchId}: " . $httpCode . " - Response: " . substr($response, 0, 200));
        return dps_cache_get_stale('grades_' . $branchId) ?? [];
    }

    $json = json_decode($response, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        error_log("Grade API JSON error for branch {$branchId}: " . json_last_error_msg());
        return dps_cache_get_stale('grades_' . $branchId) ?? [];
    }

    if (isset($json['status']) && $json['status'] === 'success' && isset($json['data'])) {
        $gradeData = $json['data'];
        dps_cache_set('grades_' . $branchId, $gradeData);
        return $gradeData;
    }

    error_log("Grade API unexpected response structure for branch {$branchId}: " . substr($response, 0, 200));
    return dps_cache_get_stale('grades_' . $branchId) ?? [];
});
