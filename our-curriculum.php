<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $logo_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $logo_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $logo_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px] sm:mb-[120px] ">
            <div class="bg-center flex items-center text-center h-[300px] brud-image">
                <div>
                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                        <?= strip_tags($logo_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h2
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                        <?= strip_tags($logo_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h2>
                </div>


            </div>

            <div class="flex m-5" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="index"
                            class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4"></path>
                            </svg>
                            <p class="ms-1 text-sm font-medium text-blue-main">Academics
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-curriculum" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"><?= strip_tags($logo_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                <div class="mt-10 relative">

                    <?= $logo_data['data']['sections'][1]['content'] ?? "" ?>

                    <!-- <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Delhi Public School, Eldeco is a well-established school affiliated to CBSE and follows the
                        curriculum of the Central Board of Secondary Education, which aims to ensure holistic
                        development of every child.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        We celebrate the uniqueness of every child by exposing them to activities that are a perfect
                        blend of pedagogical and technological elements. Our curriculum enhances the innate abilities of
                        every child by providing them a congenial learning environment.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        The school curriculum exposes students to a joyful learning environment that is a perfect blend
                        of various co-curricular activities. Experiential learning approach is adopted at all
                        developmental stages and various levels, such that conceptual learning is coupled with
                        inquisitive and analytical mindset.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        The school develops scientific temper in all learners through exploration, observation and
                        discovery. Art is integrated at all levels of teaching and learning to hone the creative skills
                        of the students.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        Our school offers all major streams at the senior secondary level such as Science, Commerce and
                        Humanities. The outstanding performance of students in board exams and various competitive exams
                        is testimony to the fact that our school adopts a strategic and result-oriented approach to
                        academics.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        A safe, secure, and healthy environment is provided for students with the help of well-trained
                        and adept staff. The school also provides personalized counselling, acceleration classes,
                        individual attention, and believes in maintaining a strong parent connection.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        The curriculum incorporates a sense of belongingness in students and inspires them to become
                        torch bearers and change makers who lead to a brighter future.
                    </p>
                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">
                        We focus on nurturing global citizens who are abreast of the latest technological advancements
                        but are also rooted in sound value systems.
                    </p> -->


                </div>
            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>