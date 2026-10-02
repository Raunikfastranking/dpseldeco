<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $shikshakendra_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $shikshakendra_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $shikshakendra_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($shikshakendra_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($shikshakendra_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Future Ready Skills
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Community Service
                            Programme
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
                        <a href="shiksha-kendra"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($shikshakendra_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class="md:flex gap-9 mt-6 mb-10">
                <div class="md:w-[40%]">
                    <img src="<?= $shikshakendra_data['data']['sections'][1]['columns'][0]['image_url'] ?? "" ?>" alt="<?= ms_image_alt($shikshakendra_data['data']['sections'][1]['columns'][0] ?? [], 'Shiksha Kendra') ?>"
                        class="w-[100%]">
                </div>
               
                <div class="md:w-[60%]">
                     <?= $shikshakendra_data['data']['sections'][1]['columns'][1]['content'] ?? "" ?>
                   <!-- <span class="text-[18px] font-[700]">“Education is the most powerful tool you can use to change the
                        world.” – Nelson Mandela</span>
                    <br><br>
                    Delhi Public School, Kalyanpur initiated the Shiksha Kendra on its campus in the year 2005 with the
                    vision of uplifting underprivileged families through education. The primary aim was to provide
                    access to quality learning for children from marginalized communities, empowering them to improve
                    their socio-economic well-being.
                    <br><br>
                    Shiksha Kendra offers more than just academic instruction—it ensures that children gain access to
                    their basic rights such as education, nutritious food, and weather-appropriate shelter and services.
                    What began as a modest initiative has now grown into a meaningful movement that touches the lives of
                    many.
                    <br><br>
                    The centre caters to students from Grade I to V, accommodating a range of age groups. Well-trained
                    educators teach core subjects including English, Hindi, Mathematics, Social Studies, Science,
                    Computer Science, and Art. The academic curriculum is carefully designed to lay a strong foundation
                    for lifelong learning.
                    <br><br>
                    In addition to classroom education, students are actively encouraged to take part in a wide variety
                    of co-curricular activities and sports, fostering all-round development. These engagements help
                    students build confidence, express creativity, and develop essential life skills.
                    <br><br>
                    Shiksha Kendra reflects DPS Eldeco’s commitment to inclusive education. By bridging gaps and
                    offering equal opportunities, the school is shaping young minds to become compassionate, capable,
                    and responsible citizens of tomorrow.
                </div> -->
            </div>
        </div>
        </div>


        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>