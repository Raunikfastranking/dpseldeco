<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $languageskill_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $languageskill_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $languageskill_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($languageskill_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($languageskill_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index"
                        class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Academics
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Curriculum And Assessment
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Syllabus
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
                        <a href="language-skill-development"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($languageskill_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <?= $languageskill_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <p class="text-[16px] text-gray-600 mt-2"> At DPS Eldeco, language education is at the heart of holistic
                development. We offer a rich and structured
                curriculum in English, Hindi, Sanskrit and French. It is designed to build strong communication skills,
                cultural awareness and linguistic confidence.</P>
            <p class="text-[16px] text-gray-600 mt-2"> English is taught as the primary language, with a focus on
                reading, writing, speaking and critical
                appreciation, ensuring fluency and expression across academic and real-world contexts.</P>
            <p class="text-[16px] text-gray-600 mt-2"> Hindi, our national language, is nurtured through grammar,
                literature and spoken proficiency to build a
                strong connection with cultural roots and identity.</P>
            <p class="text-[16px] text-gray-600 mt-2"> Sanskrit is introduced to foster linguistic discipline and
                appreciation for India’s classical heritage,
                enhancing vocabulary and language structure understanding</P>
            <p class="text-[16px] text-gray-600 mt-2"> French, as a foreign language, broadens global perspectives and
                introduces students to international
                cultures and communication.</P>
            <p class="text-[16px] text-gray-600 mt-2"> Language learning at DPS Eldeco goes beyond textbooks,
                incorporating theatre, storytelling, debates,
                recitations and language labs — helping students become articulate, thoughtful and globally aware
                individuals.</P> -->


        </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>