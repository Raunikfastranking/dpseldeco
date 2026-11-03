<?php
require_once dirname(__DIR__) . '/proxy/config.php';
require_once __DIR__ . '/api-cache.php';

// Fetches active school sessions (no branch_id needed)
$cached = dps_cache_get('school_sessions');
if (is_array($cached)) {
    return $cached;
}

$apiUrl = "https://dps.allenhouseschools.com/api/school-sessions";

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 10,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => false, // Keep as in your original code; consider removing in production
    CURLOPT_HTTPHEADER     => api_auth_headers(),
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    return dps_cache_get_stale('school_sessions') ?? [];
}

$json = json_decode($response, true);

if (!is_array($json) || !isset($json['status']) || $json['status'] !== 'success') {
    return dps_cache_get_stale('school_sessions') ?? [];
}

// Extract the actual sessions list (paginated under data.data)
$sessions = $json['data']['data'] ?? [];
if (is_array($sessions) && $sessions !== []) {
    dps_cache_set('school_sessions', $sessions);
}
return $sessions;
?>
