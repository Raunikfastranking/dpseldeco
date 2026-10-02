<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $ourstory_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $ourstory_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $ourstory_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>


    <?php include "includes/header.php" ?>

    <div class="main relative ">
        <div class="main relative  mb-[40px]  ">
            <div class="bg-center flex items-center text-center h-[300px] brud-image">
                <div>

                    <h1
                        class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                       <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>
                </div>

                <div class="md:w-[100%]">
                    <h1
                        class="sm:text-[32px] sm:block hidden font-[700] text-white text-left ml-[7rem] sm:mb-1 hr-line relative leading-9">
                       <?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?>
                    </h1>


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
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="our-story" class="ms-1 sm:text-sm text-xs font-medium text-blue-main"><?= strip_tags($ourstory_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
                 <?= $ourstory_data['data']['sections'][1]['content'] ?? "" ?>
                <!-- <div class="mt-10 relative">

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">DPS Eldeco is a recognized institution
                        established and administered by 'The Superhouse Education Foundation' under the aegis of Delhi
                        Public School Society.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school began its journey in the year
                        2000, imparting education till standard V.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">The school is affiliated to the Central
                        Board of Secondary Education and is known for it's imitable achievements in academics, sports
                        and co-curricular activities. It is constantly striving to broaden the mental horizons of its
                        students. To keep pace with the changing fabric of modern education, the school undertakes many
                        activities, which put it, in the category of one of the best schools. With the passage of time
                        DPS Eldeco has shown its glory and has now reached the position of educating children till
                        standard XII with streams like Science PCB, PCM, Commerce and Humanities.</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5">We, at DPS Eldeco, believe in holistic
                        education of the children, encompassing academics, character building, co-curricular activities,
                        sports education and life skills learning. Our endeavour is to strike a balance between state of
                        the art infrastructure and an internationally acceptable education. Our School's Motto is
                        "Service Before Self", which is a constant reminder that the well being and safety of others,
                        always comes prior to our own welfare, comfort and security. We believe in the saying</p>

                    <p class="text-[16px] sm:text-left  text-gray-600 mt-5 font-[700]"> “The best way to find yourself
                        is to lose yourself in the service of others."</p>

                </div> -->
            </div>
        </div>

        <?php include "includes/footer.php" ?>
        <?php include "includes/foot.php" ?>

</body>

</html>