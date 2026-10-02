<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $seniorsecondarywing_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $seniorsecondarywing_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $seniorsecondarywing_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($seniorsecondarywing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($seniorsecondarywing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">About Us
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Faculty List
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="senior-secondary-wing-faculty" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"> <?= strip_tags($seniorsecondarywing_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="flex justify-center w-full">
                <div class="overflow-x-auto w-full max-w-6xl bg-white rounded-md shadow-lg">

                 <?= $seniorsecondarywing_data['data']['sections'][1]['content'] ?? "" ?>
                    
                    <!-- <table class="w-full table-auto text-[10px] sm:text-[16px] md:text-base text-left border border-gray-300">
                        <thead class="bg-gray-100 text-gray-700 font-semibold">
                            <tr>
                                <th class="px-4 py-3 border border-gray-300">S.No.</th>
                                <th class="px-4 py-3 border border-gray-300">Name</th>
                                <th class="px-4 py-3 border border-gray-300">Designation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">Savita Srivastava</td>
                                <td class="px-4 py-2 border">Wing Coordinator (XI & XII)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">2</td>
                                <td class="px-4 py-2 border">Suchit Phul</td>
                                <td class="px-4 py-2 border">Class rep grade XI</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">3</td>
                                <td class="px-4 py-2 border">Aakansha Shukla</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">4</td>
                                <td class="px-4 py-2 border">Neeru Nigam</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">5</td>
                                <td class="px-4 py-2 border">Prakriti Basu</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">6</td>
                                <td class="px-4 py-2 border">Purnima Verma</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">7</td>
                                <td class="px-4 py-2 border">Arvind Singh</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">8</td>
                                <td class="px-4 py-2 border">Manjeet Kashyap</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">9</td>
                                <td class="px-4 py-2 border">Mohan Kr Singh</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">10</td>
                                <td class="px-4 py-2 border">Vandana Rastogi</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">11</td>
                                <td class="px-4 py-2 border">Dinesh Singh</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">12</td>
                                <td class="px-4 py-2 border">Suman Lata Shukla</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">13</td>
                                <td class="px-4 py-2 border">Asutosh Verma</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">14</td>
                                <td class="px-4 py-2 border">Mamta Chandel</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">15</td>
                                <td class="px-4 py-2 border">Anuj Chaturvedi</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">16</td>
                                <td class="px-4 py-2 border">R B Shukla</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">17</td>
                                <td class="px-4 py-2 border">Aparajita Shukla</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">18</td>
                                <td class="px-4 py-2 border">Avneet Kaur (2)</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">19</td>
                                <td class="px-4 py-2 border">Preeti Singh</td>
                                <td class="px-4 py-2 border">PGT</td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
   
</body>

</html>