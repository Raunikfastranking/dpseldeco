<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $healthwell_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $healthwell_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $healthwell_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($healthwell_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($healthwell_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-blue-main">
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
                        <a href="health-and-wellbeing" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($healthwell_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9">
                <div class="md:w-[40%]">
                    <img src="<?= $healthwell_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($healthwell_data['data']['sections'][1]['columns'][0] ?? [], 'Health and wellbeing') ?>" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                    <?= $healthwell_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>

                    <!-- <p>
                        At DPS Eldeco, we believe that education is also about growing emotionally, mentally, and
                        socially. Our Counselling Cell is a safe and welcoming space where students are encouraged to be
                        themselves. They get to speak freely and to seek support without judgment.
                        </p><br>
                        <p>
                        They are motivated to talk about anything and everything that might trouble them. It can be
                        academic pressure, difficulties in friendships, or simply feeling overloaded. Our trained
                        counselors provide a listening ear and gentle advice. We also collaborate with parents and
                        educators to create a nurturing atmosphere for all children through workshops, individual
                        meetings, and wellness programs.

                    </p> -->
                </div>
            </div>

        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>