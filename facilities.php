<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $facilities_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $facilities_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $facilities_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($facilities_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($facilities_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="facilities" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($facilities_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class=" 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3 sm:mt-3 bg-center  mb-0 sm:px-20 p-0 relative">
            
            <?= $facilities_data['data']['sections'][1]['content'] ?? "" ?>

            <!-- <div class="mt-5">
                <h2 class="block text-[20px] font-[700] text-blue-main my-3">School Facilities</h2>
            <div class="mb-10">
                <h3 class="block text-[18px] font-[600] text-gray-600 ">ACTIVITY ROOM :</h3>
                <p class="text-[16px] text-gray-600 ">
                    A well-equipped activity room is a safe haven for toddlers where we shape and nurture their
                    uniqueness and creativity. This is one of the many places where kids love to explore their
                    interests, and their cognitive and psychomotor skills are developed.
                </p><br>
              
                <h3 class="block text-[18px] font-[600] text-gray-600 ">CAFETERIA</h3>
                <p class="text-[16px] text-gray-600 ">Our school cafeteria is a favourite spot among students. They get
                    access to delicious and nutritious meals. Additionally, it offers a tidy and sanitary setting. It’s
                    an excellent spot to unwind and rejuvenate throughout the school day.</p><br>
                <h3 class="block text-[18px] font-[600] text-gray-600 ">LIBRARY</h3>
                <p class="text-[16px] text-gray-600 ">Our library provides access to a wide range of informational
                    resources. We have books, reference materials, journals, and digital media to help students learn
                    how to find, evaluate, and use information effectively. With access to e-books, educational
                    software, and online resources, the library helps students develop digital literacy and responsible
                    use of technology.</p><br>
                <h3 class="block text-[18px] font-[600] text-gray-600 ">INFIRMARY</h3>
                <p class="text-[16px] text-gray-600 ">Our school has a well-maintained infirmary. We have a qualified
                    staff. In the event of an emergency, students receive immediate medical attention on campus. Thus,
                    we ensure their safety and well-being at all times.</p><br>
                <h3 class="block text-[18px] font-[600] text-gray-600 ">SMART CLASSES</h3>
                <p class="text-[16px] text-gray-600 ">Teaching has to evolve with the times. So, at DPS, we make use of
                    videos, animations, and presentations. Our Smart Classes make complex topics easier to understand.
                    They accommodate visual, auditory, and kinesthetic learners by combining text, sound, and visuals.
                </p>
            </div>
        </div> -->
        </div>



    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>