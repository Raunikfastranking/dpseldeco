<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $principals_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $principals_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $principals_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($principals_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($principals_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">About Us
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Our School
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
                        <a href="principal-message" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($principals_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div class="mt-8 mb-16 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto px-3 ">
            <!-- <div class="flex justify-center">
                <img src="https://res.cloudinary.com/dvzfuapyy/image/upload/v1730305735/Layer_1_fjuspj.png" alt="">
            </div> -->
            <div class="mt-10 relative">
                <!-- <div class="absolute top-[-100px] -z-50">
                    <img src="https://res.cloudinary.com/dvzfuapyy/image/upload/v1730307222/Group_53_s3txur.png"
                        class="w-[100%] object-top" alt="">
                </div> -->
                <div class="sm:flex-row flex-col-reverse flex gap-10">
                    <div class="sm:w-[50%]">
                         <?= $principals_data['data']['sections'][1]['columns'][0]['content'] ?? "" ?>
                        <!-- <p class="text-[16px] text-gray-600 mt-2">
                            <strong class="text-gray-600">"School is a building which has four walls with tomorrow
                                inside." – Lon Watters </strong>
                        </p>
                        <p class="text-[16px] text-gray-600 mt-2">
                            Welcome to Delhi Public School, Eldeco. We believe that education helps the
                            individual to grow intellectually, emotionally, morally and socially. This growth is
                            achieved through knowledge, skills, values, beliefs and habits. In order to make this
                            journey exciting we at DPS, Eldeco strive to impart a rainbow of experiences to our
                            students. Right from pre-primary to senior secondary classes we go to great lengths to
                            provide not only scholastic but co-scholastic exposure to our pupils. A kaleidoscope of
                            activities for students is organized to help them discover their interests.
                        </p>
                          <p class="text-[16px] text-gray-600 mt-2">We aspire to metamorphose these children into responsible citizens of the nation who
                        contribute positively to the society. The morally upright and socially well adjusted
                        individuals tend to become critical thinkers, problem solvers and responsible citizens.</p> -->
                    </div>
                    <div class="sm:w-[50%]">
                        <img src="<?= $principals_data['data']['sections'][1]['columns'][1]['image_url'] ?? "" ?>" class="border-[1px] border-gray-100" alt="<?= ms_image_alt($principals_data['data']['sections'][1]['columns'][1] ?? [], 'Principal message') ?>"
                            class=" w-[100%]">
                        
                            <?= $principals_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                            <!-- <h2 class="font-[600]">Ms. Manisha Anthwal</h2>
                            <span class="text-[14px] text-gray-600">Principal</span> -->
                      
                    </div>

                </div>
                <div>
                    <?= $principals_data['data']['sections'][2]['content'] ?? "" ?>
                  <!-- <p class="text-[16px] text-gray-600 mt-2"> We
                        wish to make our students understand that education is the most powerful tool which they can
                        use to change the world.</p>
                    <p class="text-[16px] text-gray-600 mt-2"> The four pillars of education namely learning to know, learning to do, learning to
                        be and learning to live together develop the children holistically for balanced and
                        meaningful life. We, as educators, envision inspiring lifelong learning in our students. We
                        aim to provide equal opportunities to all the children irrespective of their background and
                        create a safe and nurturing space for them.</p><br>
                    <p> Ultimately the whole purpose of education is to turn mirrors into windows.</p> -->
                </div>

            </div>
        </div>
    </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>