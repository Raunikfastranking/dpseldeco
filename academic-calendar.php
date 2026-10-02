<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $academiccalendar_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $academiccalendar_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $academiccalendar_data['data']['meta_keywords'] ?? "" ?>">
</head>


<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($academiccalendar_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($academiccalendar_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>


        </div>

        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
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
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="academic-calendar"
                            class="ms-1 sm:text-sm text-xs font-medium text-blue-main"> <?= strip_tags($academiccalendar_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>









        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">


                <div>

                    <div class="md:w-[100%]">




                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">



                            <?= $academiccalendar_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="min-w-full table-auto border-collapse border border-gray-300">

                                <tbody>
                                    
                                    <tr class="bg-white">
                                        <td class="px-4 py-2 font-medium border-2 border-gray-300">
                                            Academic Session</td>
                                        <td class="px-4 py-2 border-2 border-gray-300"> 1st April to 31st March</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-2 font-medium border-2 border-gray-300">Vacation Period</td>
                                        <td class="px-4 py-2 border-2 border-gray-300">15th May to 30th June</td>
                                    </tr>
                                    <tr class="bg-gray-50">
                                        <td class="px-4 py-2 font-medium border-2 border-gray-300">Admission Period</td>
                                        <td class="px-4 py-2 border-2 border-gray-300"> January to March</td>
                                    </tr>

                                </tbody>
                            </table> -->
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>