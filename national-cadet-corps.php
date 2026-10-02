<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $national_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $national_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $national_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($national_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($national_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index" class="inline-flex items-center text-sm font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Future Ready Skills
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="national-cadet-corps" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($national_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $national_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="<?= ms_image_alt($national_data['data']['sections'][1]['columns'][0] ?? [], 'NCC at DPS Eldeco') ?>" class="w-full">
                </div>
                <div class="md:w-[60%]">
                     <?= $national_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <span class="text-[18px]  font-[700]">NCC – National Cadet Corps</span>
                    <br>
                    <p class="">
                        It is a vital wing of the Indian Armed Forces. It operates under the Ministry of Defence. NCC
                        aims to build character, discipline, and a sense of patriotic duty among the youth.
                    </p>
                    <br>
                    <span class="text-[16px]  font-[700]">NCC at DPS Eldeco</span>
                    <p class=" mt-2">
                        The NCC program at DPS Eldeco is dedicated to shaping students into disciplined, patriotic, and
                        responsible citizens. The school offers a two-year NCC Junior Wing course, with JD and JW cadets
                        in the Naval Unit and JW cadets in the Army Wing.
                        <br>
                        Throughout the program, students engage in a range of physical activities, sports, and outdoor
                        camps. We also have a mandatory ten-day camp. These experiences prepare students for future
                        challenges.

                    </p>
                    <p class=" mt-2">
                        Structured training sessions are conducted every Friday and Saturday by school staff and PI
                        personnel. We focus on drills, yoga, public speaking, and more. Cultural events and performances
                        are also encouraged to nurture creativity and confidence.
                        High-performing cadets are honoured with medals for their achievements.
                    </p>
                    <p class=" mt-2">
                        The NCC program at DPS Eldeco ultimately aims to instill values of character, courage, and
                        national service. We prepare students to become confident and conscientious citizens.
                    </p> -->
                </div>
            </div>



        </div>



        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>