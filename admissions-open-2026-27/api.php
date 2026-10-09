<?php
require_once __DIR__ . '/config.php';
require_once dirname(__DIR__) . '/includes/api-cache.php';

$api_url = "https://dps.allenhouseschools.com";

function fetchMultipleApiData($endpoints, $forceRefresh = false)
{
    $baseUrl = "https://dps.allenhouseschools.com/api";
    $responses = [];
    $toFetch = [];

    // Serve fresh cache first; only call the API for expired/missing endpoints.
    foreach ($endpoints as $key => $endpoint) {
        $cacheKey = 'api_' . md5($endpoint);
        $cached = $forceRefresh ? null : dps_cache_get($cacheKey);
        if ($cached !== null) {
            $responses[$key] = $cached;
        } else {
            $toFetch[$key] = $endpoint;
        }
    }

    if (!empty($toFetch)) {
        $mh = curl_multi_init();
        $curlHandles = [];
        // Create all curl handles
        foreach ($toFetch as $key => $endpoint) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // disable SSL check if needed
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

        // Collect responses, cache them, and fall back to stale data on failure
        foreach ($curlHandles as $key => $ch) {
            $cacheKey = 'api_' . md5($toFetch[$key]);
            $content = curl_multi_getcontent($ch);
            $decoded = json_decode($content, true);
            if ($decoded !== null) {
                dps_cache_set($cacheKey, $decoded);
                $responses[$key] = $decoded;
            } else {
                $responses[$key] = dps_cache_get_stale($cacheKey);
            }
            curl_multi_remove_handle($mh, $ch);
            curl_close($ch);
        }
        curl_multi_close($mh);
    }
    return $responses;
}
$endpoints = [
    'landing_data'   => '/pages/landing-page-eldeco',
    'header_footer_data' => '/public/branches/2/layout-parts/',
    'thankyou_data' => '/pdf/branch/2',
  ];

$data = fetchMultipleApiData($endpoints);
$landing_data   = $data['landing_data'];
$header_footer_data = $data['header_footer_data'];
$thankyou_data = $data['thankyou_data'];

require_once dirname(__DIR__) . '/includes/ms_image_alt.php';
?>
