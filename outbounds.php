<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $outbounds_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $outbounds_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $outbounds_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($outbounds_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($outbounds_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="outbounds" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($outbounds_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <!-- Image Section -->
                <div class="md:w-[40%]">
                    <img src="<?= $outbounds_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="<?= ms_image_alt($outbounds_data['data']['sections'][1]['columns'][0] ?? [], 'Outbound activities at DPS Eldeco') ?>" class="w-full">
                </div>

                <!-- Text Section -->
                <div class="md:w-[60%]">
                     <?= $outbounds_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                    <!-- <span class="text-[18px]  font-[700]">Outbound Reflection: A Crucial Part of Our
                        Experiential Learning Approach</span>
                    <br>
                    <p class="text-gray-600">
                        At DPS Eldeco, we believe that learning should not be limited to the classroom. That is why an
                        important part of our experiential learning approach is outbound activities and the reflection
                        process that follows them.
                    </p>
                    <br>
                    <span class="text-[16px]  font-[700]">Importance of Outbound Activities</span>
                    <p class="text-gray-600 mt-2">
                        Outbound activities organized for each grade give students the opportunity to make real-world
                        connections. Whether it is nature trails, visits to historical monuments, or adventure camps –
                        these experiences link classroom concepts to practical understanding.
                    </p>
                    <br>
                    <span class="text-[16px]  font-[700]">Impact of the Reflection Process</span>
                    <p class="text-gray-600 mt-2">
                        Learning from experiences is more meaningful when it is followed by reflection. In our
                        structured reflection sessions:
                    </p>
                    <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1">
                        <li>Students think about their experiences and identify learnings from them.</li>
                        <li>They share their observations with peers, exchanging diverse perspectives.</li>
                        <li>Teachers guide them to deeper insights through structured interactions.</li>
                    </ul>
                    <br>
                    <span class="text-[16px]  font-[700]">Real-Life Skills Development</span>
                    <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1">
                        <li><strong>Critical thinking:</strong> Students analyze challenges and develop solutions.</li>
                        <li><strong>Communication:</strong> They articulate their experiences and insights clearly.</li>
                    </ul> -->
                </div>
            </div>
             <?= $outbounds_data['data']['sections'][2]['content'] ?? "" ?>
            <!-- <ul class="list-disc list-inside text-gray-600 mt-2 space-y-1">
                <li><strong>Team-building:</strong> Collaborative activities enhance group synergy.</li>
                <li><strong>Self-awareness:</strong> Reflection helps them recognize strengths and areas of growth.</li>
            </ul>
            <br>
            <span class="text-[16px]  font-[700]">Learning Cycle</span>
            <p class="text-gray-600 mt-2">
                Our experiential learning cycle progresses as follows:
                <br>
                <strong>Experience → Reflection → Conceptualization → Application</strong>
                <br>
                The reflection process after outbound activities ensures students internalize what they’ve learned and
                find ways to apply those lessons in daily life.
            </p> -->
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>