<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $sports_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $sports_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $sports_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative  mb:[40px] sm:mb-[120px] ">

        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($sports_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($sports_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Academics
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Facilities
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
                        <a href="sports" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($sports_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <!-- Sports Overview -->
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $sports_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($sports_data['data']['sections'][1]['columns'][0] ?? [], 'Sports at DPS Eldeco') ?>" class="w-full">
                </div>
                
              <div class="md:w-[60%]">
                <?= $sports_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                     <!--  <span class="text-[18px] font-[700]">Sports at DPS Eldeco</span>
                    <br><br>
                    <p class="text-gray-700">
                        At DPS, we nurture both the mind and the body. Our sports program is carefully crafted to
                        instill principles such as teamwork, discipline, and resilience in each student. They are
                        motivated to find out what their passion is. Consistent practice sessions, inter-house contests,
                        and yearly sports events maintain the enthusiasm for healthy competition vibrant and
                        flourishing.
                    </p>

                    <div class="mt-3">
                        <span class="font-semibold">Karate</span>
                        <p>
                            With the growing emphasis on self-defence, especially among young girls, our school has
                            taken the initiative to provide structured training in karate. Students learn techniques of
                            defence and develop confidence and discipline.
                        </p>
                    </div>

                    <div class="mt-3">
                        <span class="font-semibold">Volleyball & Skating</span>
                        <p>
                            Volleyball and skating are loved by numerous students for their energetic and competitive
                            nature. With skilled mentors guiding them, students train with great enthusiasm. They
                            actively participate in competitions at various levels and bring pride to the school.
                        </p>
                    </div>-->
                </div> 
            </div>

            <!-- Individual Sports Sections -->
            <div class="space-y-6 text-gray-700">

                <?= $sports_data['data']['sections'][2]['content'] ?? "" ?>
                <!-- <div>
                    <span class="font-semibold">Basketball</span>
                    <p>
                        Our campus boasts a full-fledged, international-standard basketball court. Under the guidance of
                        experienced coaches, they learn team spirit, strategic thinking, and leadership qualities. Many
                        of our students have gone on to win laurels in inter-school tournaments.
                    </p>
                </div> -->

                <!-- <div>
                    <span class="font-semibold">Lawn Tennis</span>
                    <p>
                        Students practice with enthusiasm and discipline. It is perfect for agility and rejuvenation.
                        Our coaches constantly strive to refine their game.
                    </p>
                </div>

                <div>
                    <span class="font-semibold">Badminton and Table Tennis</span>
                    <p>
                        These fast-paced games demand stamina, precision timing, and keen interest. At our school,
                        students hone their skills on state-of-the-art courts. Guided by experienced coaches, the swift
                        rallies, skilful spins, and masterful control make both games a joy to watch.
                    </p>
                </div>

                <div>
                    <span class="font-semibold">Chess</span>
                    <p>
                        Chess promotes healthy competition. It allows children, irrespective of their physical
                        abilities, to participate and excel. Students learn critical thinking, strategic planning, and
                        decision-making skills. It sharpens concentration and nurtures patience and resilience. We
                        proudly state that DPS Eldeco has 11 FIDE-rated players in the school.
                    </p>
                </div>

                <div>
                    <span class="font-semibold">Football</span>
                    <p>
                        Football encourages inclusivity by bringing together students from diverse backgrounds. It
                        fosters social skills. Also, participation in football helps reduce stress and supports mental
                        well-being.
                    </p>
                </div>

                <div>
                    <span class="font-semibold">Cricket</span>
                    <p>
                        Being a favourite of many students, we support their interest in this game by offering
                        structured guidance and vast areas. Engaging in cricket improves physical fitness, coordination
                        between hands and eyes, and stamina. It provides students with essential life skills like
                        patience, concentration, collaboration, leadership, and self-discipline. We believe that initial
                        engagement with the sport can pave the way for professional opportunities and scholarships in
                        the future.
                    </p>
                </div>

                <div>
                    <span class="font-semibold">Swimming</span>
                    <p>
                        Swimming is an essential life skill and an outstanding physical activity, so we promote this
                        sport for every student. It improves coordination, motor abilities, and fosters a sense of
                        discipline and accountability. It offers a space for leisure enjoyment and competitive growth,
                        assisting students in thriving both academically and socially.
                    </p>
                </div> -->
            </div>
        </div>





    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>



</body>

</html>