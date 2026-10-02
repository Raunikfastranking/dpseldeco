<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $studentled_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $studentled_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $studentled_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($studentled_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($studentled_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="student-led-programme" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($studentled_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <!-- Image Section -->
                <div class="md:w-[40%]">
                    <img src="<?= $studentled_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($studentled_data['data']['sections'][1]['columns'][0] ?? [], 'DPSE-MUN at DPS Eldeco') ?>" class="w-full">
                </div>

                <!-- Text Section -->
                <div class="md:w-[60%]">
                    <?= $studentled_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <span class="text-[18px]  font-[700]">DPSE-MUN: Where Young Voices Shape Global
                            Conversations</span>

                        <p class="text-gray-700 mt-3">
                            At DPS Eldeco, we don’t just teach our students about the world—we encourage them to step
                            into it, to question it, and to imagine how they can make it better. The DPSE-MUN (Model
                            United Nations), held annually in the month of August, is a shining example of that vision.
                            Entirely student-led, this flagship event brings together young minds to take on the roles
                            of global leaders, diplomats, and change makers.
                        </p>

                        <p class="text-gray-700 mt-2">
                            What makes DPSE-MUN special is the preparation and passion behind it. It’s not just a
                            two-day conference—it’s a journey. The first step begins in May, with the Mock MUN, designed
                            to welcome newcomers and build confidence. Students learn the ropes, understand the format,
                            and step into debate with growing courage.
                        </p> -->


                </div>
            </div>
             <?= $studentled_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <div class="mt-5">
                <p class="text-gray-700 mt-2">
                    By the time August arrives, they are ready to take the floor—not just with facts, but with
                    conviction, empathy, and diplomacy. It reflects the power of student initiative and reminds us
                    that age is no barrier when it comes to making a difference.
                </p>

                <p class="text-gray-700 mt-2">
                    At DPS Eldeco, we are proud to see our students not just preparing for the future but actively
                    shaping it.
                </p>
                <h3 class="text-gray-600 mt-3 font-[700]">ASSEMBLIES.</h3>
                <p class="text-gray-700 mt-2">Assemblies form a vibrant part of our daily school life, serving as
                    platforms for learning, expression and community building.</p>
                <h3 class="text-gray-600 mt-3 font-[700]">Daily Assemblies.</h3>
                <P class="text-gray-700 mt-2">Our regular morning assemblies follow a structured format:</P>

                <ul class="text-gray-600 mt-2">
                    <li>● Begin with the national anthem and school prayer.</li>
                    <li>● Include a thought for the day and news updates.</li>
                    <li>● Feature student-led segments like quizzes or presentations.</li>
                    <li>● Conclude with important announcements.</li>
                </ul>
                <h3 class="text-gray-600 mt-3 font-[700]">Special Events</h3>
                <p class="text-gray-700 mt-2">We celebrate various occasions through special assemblies:</p>
                <ul class="text-gray-600 mt-2">
                    <li>●National festivals (Independence Day, Republic Day)</li>
                    <li>● Cultural festivals (Diwali, Christmas, Eid)</li>
                    <li>● Annual school events.</li>
                    <li>● Theme-based learning days.</li>
                </ul>
                <h3 class="text-gray-600 mt-3 font-[700]">Student Development</h3>
                <p class="text-gray-700 mt-2">Through assembly participation, students gain:</p>
                <ul class="text-gray-600 mt-2">
                    <li>● Public speaking confidence.</li>
                    <li>● Leadership opportunities.</li>
                    <li>● Teamwork experience.</li>
                    <li>● Cultural awareness.</li>
                    <li>● Time management skills.</li>
                </ul>

                <h3 class="text-gray-600 mt-3 font-[700]">Community Involvement</h3>
                <p class="text-gray-700 mt-2">We encourage parent participation by:</p>
                <ul class="text-gray-600 mt-2">
                    <li>● Inviting them to special assemblies</li>
                    <li>● Featuring them as guest speakers</li>
                    <li>● Celebrating parent-oriented events</li>
                </ul>
                <p class="text-gray-700 mt-1">These gatherings reflect our commitment to holistic education beyond
                    classroom walls, nurturing well-rounded individuals through shared experiences.</p>
            </div> -->
        </div>


    </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>