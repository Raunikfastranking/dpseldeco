<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $housesystem_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $housesystem_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $housesystem_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($housesystem_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($housesystem_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="house-system" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($housesystem_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">

            <div class="md:flex gap-9">
                <div class="md:w-[40%]">
                    <img src="<?= $housesystem_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="<?= ms_image_alt($housesystem_data['data']['sections'][1]['columns'][0] ?? [], 'House system') ?>" class="w-[100%]">
                </div>
                <div class="md:w-[60%]">
                     <?= $housesystem_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <p>
                        At DPS Eldeco, the House System is an integral part of our school culture, fostering a sense of
                        community, teamwork, and healthy competition among students. Our students are grouped into four
                        houses—Bluebell, Daffodil, Shamrock and Tulip—each represented by a vibrant color and guided by
                        dedicated senior teachers who serve as House Wardens.
                        <br> <br> This system not only encourages students to take pride in their house identity but
                        also offers them numerous opportunities to develop leadership skills, build friendships across
                        grades, and showcase their talents. Throughout the academic year, we organize a range of
                        inter-house events and competitions—spanning sports, cultural activities, debates, quizzes, and
                        more—allowing students to participate, collaborate, and excel beyond the classroom.
                        <br> <br> The house system plays a vital role in promoting the core values of teamwork,
                        discipline, and sportsmanship at DPS Eldeco. It adds an extra spark to school life and helps
                        shape confident, well-rounded individuals ready to take on the world.

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