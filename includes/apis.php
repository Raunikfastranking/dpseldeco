<?php
require_once dirname(__DIR__) . '/proxy/config.php';

$api_url = "https://dps.allenhouseschools.com";

/** Branch id for gallery year API (matches photo_gallery_data / achievement_data). */
if (!defined('DPS_ELDECO_GALLERY_BRANCH_ID')) {
    define('DPS_ELDECO_GALLERY_BRANCH_ID', DPS_ELDECO_BRANCH_ID);
}
function fetchMultipleApiData($endpoints)
{
    $baseUrl = "https://dps.allenhouseschools.com/api";
    $mh = curl_multi_init();
    $curlHandles = [];
    $responses = [];
    // Create all curl handles
    foreach ($endpoints as $key => $endpoint) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $baseUrl . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
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

    // Collect responses
    foreach ($curlHandles as $key => $ch) {
        $content = curl_multi_getcontent($ch);
        $responses[$key] = json_decode($content, true);
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $responses;
}
$endpoints = [
    'home_data' => '/pages/home-page-eldeco',
    'menu_data'   => '/menus/7',
    'flyer_data'   => '/flyers/branch/2',
    'header_footer_data' => '/public/branches/2/layout-parts/',
    'scroll_text_data' => '/scrolling-texts/branch/2',
    'statistic_data' => '/statistics/branch/2',
    'excellence_data' => '/pages/excellence-in-action-page-eldeco',
    'celebrating_data' => '/pages/celebrating-excellence-page-eldeco',
    'spotlight_data' => '/pages/-excellence-in-the-spotlight-page-eldeco',
    'embark_data' => '/pages/embark-on-a-journey-of-excellence-page-eldeco',
    'missionvision_data' => '/pages/-mission-vision-core-values-eldeco',
    'ourmotto_data' => '/pages/our-motto-aspiration-span-eldeco',
    'dpss_data' => '/pages/dps-eldeco-eldeco',
    'society_data' => '/pages/dps-society-eldeco',
    'provicechairmans_data' => '/pages/pro-vice-chairmans-message-page-eldeco',
    'principals_data' => '/pages/principals-message-page-eldeco',
    'managementcommittee_data' => '/pages/management-committee-page-eldeco',
    'preprimarywing_data' => '/pages/pre-primary-wing-page-eldeco',
    'primarywing_data' => '/pages/primary-wing-page-eldeco',
    'middlewing_data' => '/pages/middle-wing-page-eldeco',
    'secondarywing_data' => '/pages/secondary-wing-page-eldeco',
    'seniorsecondarywing_data' => '/pages/senior-secondary-wing-page-eldeco',
    'schoolguidelines_data' => '/pages/school-guidelines-page-eldeco',
    'preprimarystage_data' => '/pages/pre-primary-stage-page-eldeco',
    'primary_data' => '/pages/primary-stage-page-eldeco',
    'middle_data' => '/pages/middle-stage-page-eldeco',
    'secondary_data' => '/pages/secondary-stage-page-eldeco',
    'srsecondary_data' => '/pages/sr-secondary-stage-page-eldeco',
    'facilities_data' => '/pages/facilities-page-eldeco',
    'smartclassrooms_data' => '/pages/smart-classrooms-page-eldeco',
    'juniorlabs_data' => '/pages/junior-labs-page-eldeco',
    'seniorlabs_data' => '/pages/senior-labs-page-eldeco',
    'schoolfacilities_data' => '/pages/school-facilities-page-eldeco',
    'sports_data' => '/pages/sports-page-eldeco',
    'cocurricular_data' => '/pages/co-curricular-activities-page-eldeco',
    'languageskill_data' => '/pages/language-skill-development-page-eldeco',
    'assessment_data' => '/pages/assessment-system-and-schedule-page-eldeco',
    'logo_data' => '/pages/logo-contact-page-eldeco',
    'academiccalendar_data' => '/pages/academic-calendar-page-eldeco',
    'schoolcirculars_data' => '/pages/school-circulars-page-eldeco',
    'aboutthe_data' => '/pages/about-the-clan-page-eldeco',
    'health_data' => '/pages/health-and-physical-fitness-page-eldeco',
    'national_data' => '/pages/national-cadet-corps-ncc-page-eldeco',
    'outbounds_data' => '/pages/outbounds-page-eldeco',
    'animation_data' => '/pages/animation-page-eldeco',
    'coding_data' => '/pages/coding-page-eldeco',
    'robotics_data' => '/pages/robotics-page-eldeco',
    'oluxismart_data' => '/pages/oluxi-smart-skills-page-eldeco',
    'financialliteracy_data' => '/pages/financial-literacy-page-eldeco',
    'northwest_data' => '/pages/north-west-sports-academy-page-eldeco',
    'housesystem_data' => '/pages/house-system-page-eldeco',
    'leadershipprogramme_data' => '/pages/leadership-programme-page-eldeco',
    'healthwell_data' => '/pages/health-and-well-being-page-eldeco',
    'studentled_data' => '/pages/student-led-programme-page-eldeco',
    'alumniconnect_data' => '/pages/alumni-connect-page-eldeco',
    'communityservice_data' => '/pages/community-service-programme-page-eldeco',
    'peereducator_data' => '/pages/peer-educator-programme-page-eldeco',
    'shikshakendra_data' => '/pages/shiksha-kendra-page-eldeco',
    'sewa_data' => '/pages/sewa-page-eldeco',
    'career_data' => '/pages/career-guidance-and-counselling-program-page-eldeco',
    'senior_data' => '/pages/senior-wing-library-page-eldeco',
    'middles_data' => '/pages/middle-wing-library-page-eldeco',
    'primarys_data' => '/pages/primary-wing-library-page-eldeco',
    'preprimaryss_data' => '/pages/pre-primary-wing-library-page-eldeco',
    'collezione_data' => '/pages/collezione-page-eldeco',
    'socialinitiatives_data' => '/pages/social-initiatives-page-eldeco',
    'admission_data' => '/pages/admission-overview-page-eldeco',
    'withdrawalpolicy_data' => '/pages/withdrawal-policy-page-eldeco',
    'schoolrules_data' => '/pages/school-rules-page-eldeco',
    'transfer_data' => '/pages/transfer-certificate-guidelines-page-eldeco',
    'group_data' => '/pages/group-transfer-policy-page-eldeco',
    'busroutes_data' => '/pages/bus-routes-page-eldeco',
    'academic_data' => '/pages/academic-achievements-page-eldeco',
    'extracurricular_data' => '/pages/extra-curricular-achievements-page-eldeco',
    'sportsacademy_data' => '/pages/sports-academy-achievements-page-eldeco',
    'alumniplacements_data' => '/pages/alumni-placements-achievements-page-eldeco',
    'schoolawards_data' => '/pages/school-awards-page-eldeco',
    'principalawards_data' => '/pages/principal-awards-page-eldeco',
    'schoolfaculty_data' => '/pages/school-faculty-awards-page-eldeco',
    'photogallery_data' => '/pages/photo-gallery-page-eldeco',
    'videogallery_data' => '/pages/video-gallery-page-eldeco',
    'mediagallery_data' => '/pages/media-gallery-page-eldeco',
    'ourstory_data' => '/pages/our-story',
    'otherinformation_data' => '/pages/other-information-page-eldeco',
    'parentteacher_data' => '/pages/parent-teacher-association-page-eldeco',
    'sexualharassment_data' => '/pages/sexual-harassment-committee-page-eldeco',
    'teacherdetails_data' => '/pages/teacher-details-page-eldeco',
    'generalinformation_data' => '/pages/general-information-page-eldeco',
    'documentsinformation_data' => '/pages/documents-and-information-page-eldeco',
    'resultsacademics_data' => '/pages/results-and-academics-page-eldeco',
    'staffteaching_data' => '/pages/staff-teaching-page-eldeco',
    'schoolinfrastructure_data' => '/pages/school-infrastructure-page-eldeco',
    'dpsshuman_data' => '/pages/dpss-human-resource-development-council-page-eldeco',
    'cbse_data' => '/pages/cbse-page-eldeco',
    'superhouse_data' => '/pages/superhouse-education-foundation-page-eldeco',
    'debriefing_data' => '/pages/debriefing-sessions-page-eldeco',
    'academiccommittee_data' => '/pages/academic-committee-page-eldeco',
    'committeeprevention_data' => '/pages/committee-for-prevention-of-bullying-ragging-page-eldeco',
    'disaster_data' => '/pages/disaster-management-committee-page-eldeco',
    'posh_data' => '/pages/posh-page-eldeco',
    'pocso_data' => '/pages/pocso-page-eldeco',
    'cbseinformation_data' => '/pages/cbse-information-page-eldeco',
    'faqs_data' => '/pages/faqs-page-eldeco',
    'feestructure_data' => '/pages/fee-structure-page-eldeco',
    'photo_gallery_data' => '/galleries/type/gallery/branch/2',
    'achievement_data' => '/galleries/type/achievements/branch/2',
    'process_____data' => '/accordions/branch/2/filter/id?id=14',
    'fee_____data' => '/accordions/branch/2/filter/id?id=15',
    'footer_link_data' => '/public/link-groups/position/footer/hierarchical?branch_id=2',
    'jobs_data' => '/jobs/branch/2',
    'contact_data' => "/pages/contact-us",
    'process_data' => "/pages/process-page-eldeco",
    'bus_routes_data' => '/pages/bus-routes-page-eldeco',
    'route_data' => '/get-bus-routes/2',
    'blogData' => '/blogs/branch/2',
    'testimonial_data' => '/pages/testimonials-page-eldeco',
        'terms_and_conditions' => '/pages/terms-and-conditions-page-eldeco'
];

$data = fetchMultipleApiData($endpoints);
$home_data = $data['home_data'];
$menu_data = $data['menu_data'];
$flyer_data = $data['flyer_data'];
$header_footer_data = $data['header_footer_data'];
$scroll_text_data = $data['scroll_text_data'];
$excellence_data   = $data['excellence_data'];
$celebrating_data   = $data['celebrating_data'];
$spotlight_data   = $data['spotlight_data'];
$embark_data   = $data['embark_data'];
$statistic_data = $data['statistic_data'];
$missionvision_data = $data['missionvision_data'];
$ourmotto_data = $data['ourmotto_data'];
$dpss_data = $data['dpss_data'];
$society_data = $data['society_data'];
$provicechairmans_data = $data['provicechairmans_data'];
$principals_data = $data['principals_data'];
$managementcommittee_data = $data['managementcommittee_data'];
$preprimarywing_data = $data['preprimarywing_data'];
$primarywing_data = $data['primarywing_data'];
$middlewing_data = $data['middlewing_data'];
$secondarywing_data = $data['secondarywing_data'];
$seniorsecondarywing_data = $data['seniorsecondarywing_data'];
$schoolguidelines_data = $data['schoolguidelines_data'];
$preprimarystage_data = $data['preprimarystage_data'];
$primary_data = $data['primary_data'];
$middle_data = $data['middle_data'];
$secondary_data = $data['secondary_data'];
$srsecondary_data = $data['srsecondary_data'];
$facilities_data = $data['facilities_data'];
$smartclassrooms_data = $data['smartclassrooms_data'];
$juniorlabs_data = $data['juniorlabs_data'];
$seniorlabs_data = $data['seniorlabs_data'];
$schoolfacilities_data = $data['schoolfacilities_data'];
$sports_data = $data['sports_data'];
$cocurricular_data = $data['cocurricular_data'];
$languageskill_data = $data['languageskill_data'];
$assessment_data = $data['assessment_data'];
$logo_data = $data['logo_data'];
$academiccalendar_data = $data['academiccalendar_data'];
$schoolcirculars_data = $data['schoolcirculars_data'];
$aboutthe_data = $data['aboutthe_data'];
$health_data = $data['health_data'];
$national_data = $data['national_data'];
$outbounds_data = $data['outbounds_data'];
$animation_data = $data['animation_data'];
$coding_data = $data['coding_data'];
$robotics_data = $data['robotics_data'];
$oluxismart_data = $data['oluxismart_data'];
$financialliteracy_data = $data['financialliteracy_data'];
$northwest_data = $data['northwest_data'];
$housesystem_data = $data['housesystem_data'];
$leadershipprogramme_data = $data['leadershipprogramme_data'];
$healthwell_data = $data['healthwell_data'];
$studentled_data = $data['studentled_data'];
$alumniconnect_data = $data['alumniconnect_data'];
$communityservice_data = $data['communityservice_data'];
$peereducator_data = $data['peereducator_data'];
$shikshakendra_data = $data['shikshakendra_data'];
$sewa_data = $data['sewa_data'];
$career_data = $data['career_data'];
$senior_data = $data['senior_data'];
$middles_data = $data['middles_data'];
$primarys_data = $data['primarys_data'];
$preprimaryss_data = $data['preprimaryss_data'];
$collezione_data = $data['collezione_data'];
$socialinitiatives_data = $data['socialinitiatives_data'];
$admission_data = $data['admission_data'];
$withdrawalpolicy_data = $data['withdrawalpolicy_data'];
$schoolrules_data = $data['schoolrules_data'];
$transfer_data = $data['transfer_data'];
$group_data = $data['group_data'];
$busroutes_data = $data['busroutes_data'];
$academic_data = $data['academic_data'];
$extracurricular_data = $data['extracurricular_data'];
$sportsacademy_data = $data['sportsacademy_data'];
$alumniplacements_data = $data['alumniplacements_data'];
$schoolawards_data = $data['schoolawards_data'];
$principalawards_data = $data['principalawards_data'];
$schoolfaculty_data = $data['schoolfaculty_data'];
$photogallery_data = $data['photogallery_data'];
$videogallery_data = $data['videogallery_data'];
$mediagallery_data = $data['mediagallery_data'];
$ourstory_data = $data['ourstory_data'];
$otherinformation_data = $data['otherinformation_data'];
$parentteacher_data = $data['parentteacher_data'];
$sexualharassment_data = $data['sexualharassment_data'];
$teacherdetails_data = $data['teacherdetails_data'];
$generalinformation_data = $data['generalinformation_data'];
$documentsinformation_data = $data['documentsinformation_data'];
$resultsacademics_data = $data['resultsacademics_data'];
$staffteaching_data = $data['staffteaching_data'];
$schoolinfrastructure_data = $data['schoolinfrastructure_data'];
$dpsshuman_data = $data['dpsshuman_data'];
$cbse_data = $data['cbse_data'];
$superhouse_data = $data['superhouse_data'];
$debriefing_data = $data['debriefing_data'];
$academiccommittee_data = $data['academiccommittee_data'];
$committeeprevention_data = $data['committeeprevention_data'];
$disaster_data = $data['disaster_data'];
$posh_data = $data['posh_data'];
$pocso_data = $data['pocso_data'];
$cbseinformation_data = $data['cbseinformation_data'];
$faqs_data = $data['faqs_data'];
$feestructure_data = $data['feestructure_data'];
$photo_gallery_data = $data['photo_gallery_data'];
$achievement_data = $data['achievement_data'];
$process_____data = $data['process_____data'];
$fee_____data = $data['fee_____data'];
$footer_link_data = $data['footer_link_data'];
$jobs_data = $data['jobs_data'];
$contact_data = $data['contact_data'];
$process_data = $data['process_data'];
$bus_routes_data = $data['bus_routes_data'];
$route_data = $data['route_data'];
$blogData = $data['blogData'];
$testimonial_data = $data['testimonial_data'];
$terms_and_conditions = $data['terms_and_conditions'];

require_once __DIR__ . '/ms_image_alt.php';