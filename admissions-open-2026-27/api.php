<?php
require_once __DIR__ . '/config.php';
require_once dirname(__DIR__) . '/includes/api-cache.php';

$api_url = "https://dps.allenhouseschools.com";

function fetchMultipleApiData($endpoints, $forceRefresh = false)
{
    return dps_fetch_multiple($endpoints, $forceRefresh);
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
