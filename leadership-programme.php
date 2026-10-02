<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $leadershipprogramme_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $leadershipprogramme_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $leadershipprogramme_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($leadershipprogramme_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($leadershipprogramme_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="leadership-programme" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($leadershipprogramme_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <!-- Image Section -->
                <div class="md:w-[40%]">
                    <img src="<?= $leadershipprogramme_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($leadershipprogramme_data['data']['sections'][1]['columns'][0] ?? [], 'Clubs and Committees at DPS Eldeco') ?>" class="w-full">
                </div>

                <!-- Text Section -->
                 <div class="md:w-[60%]">
                     <?= $leadershipprogramme_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <span class="text-[18px] font-[700]">Clubs and Committees</span>
                    <br>
                    <p class="">
                        We foster overall development through a variety of clubs and committees. The goal is to inspire
                        students to explore their passions and develop essential life skills.
                    </p> -->
<!-- 
                    <ul class="list-disc list-inside  space-y-1">
                        <li><strong>STEM and STEAM Clubs:</strong> Encourage innovation through hands-on projects,
                            creative problem-solving, and critical thinking.</li>
                        <li><strong>Entrepreneurship Club:</strong> Nurtures future leaders by introducing them to
                            business concepts, idea generation, and real-world challenges.</li>
                        <li><strong>Literary Clubs:</strong> Promote a love for reading, writing, and public speaking,
                            enhancing communication and expression skills.</li>
                        <li><strong>Cultural and Artistic Clubs:</strong> Provide platforms for creativity and artistic
                            expression.</li>
                        <li><strong>Eco Club, Discipline Committee, School Health and Wellness Club, Transport
                                Committee, and Event Management Committee:</strong> Enable students to contribute to a
                            positive, well-organized, and sustainable school environment.</li>
                    </ul> -->
                </div> 
            </div>
            <div class="mt-5">
                <?= $leadershipprogramme_data['data']['sections'][2]['content'] ?? "" ?>
                <!-- <span class="text-[16px] font-[700]">Social Service Initiatives Club</span>
                <p class=" mt-2">
                    This club plays an important role in shaping students into socially responsible and empathetic
                    individuals. Participation in social service initiatives nurtures compassion, fosters awareness of
                    community issues, and inspires students to take initiative in creating meaningful change.
                </p> -->
            </div>
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>