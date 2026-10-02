<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $otherinformation_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $otherinformation_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $otherinformation_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
         <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($otherinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($otherinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">General Information
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="other-information" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($otherinformation_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <div>

                    <div class="md:w-[100%]">
                       

                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                             <?= $otherinformation_data['data']['sections'][1]['content'] ?? "" ?>

                            <!-- <table class="table-auto w-full border-collapse border border-gray-300">
                                <tbody>
                                    <tr>
                                        <td class="border border-gray-300 p-2">School Establishment Year</td>
                                        <td class="border border-gray-300 p-2">1999</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">State / UT or recommendation of Embassy
                                            of India NOC No.</td>
                                        <td class="border border-gray-300 p-2">2223</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">NOC Issuing Date</td>
                                        <td class="border border-gray-300 p-2">13/07/2004</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">School Recognized Authority</td>
                                        <td class="border border-gray-300 p-2">CBSE</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">Status of Affiliation</td>
                                        <td class="border border-gray-300 p-2">Provisional</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">Affiliation No.</td>
                                        <td class="border border-gray-300 p-2">2130642</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">Affiliation with the Board since</td>
                                        <td class="border border-gray-300 p-2">01-04-2005</td>
                                    </tr>
                                    <tr>
                                        <td class="border border-gray-300 p-2">Extension of Affiliation upto</td>
                                        <td class="border border-gray-300 p-2">31.03.2024</td>
                                    </tr>
                                </tbody>
                            </table> -->
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