<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "includes/head.php" ?>
  <title><?= $committeeprevention_data['data']['title'] ?? "" ?></title>
  <meta name="description" content="<?= $committeeprevention_data['data']['meta_description'] ?? "" ?>">
  <meta name="keywords" content="<?= $committeeprevention_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                 <?= strip_tags($committeeprevention_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                  <?= strip_tags($committeeprevention_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index.php" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Mandatory Public Disclosure
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"> Committees
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
                        <a href="committie-for-prevention-of-bullying-and-ragging.php"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($committeeprevention_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <?= $committeeprevention_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">

                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2">1</td>
                                        <td class="px-6 py-2">Chairperson</td> 
                                        <td class="px-6 py-2">Ms Manisha Anthwal</td>
                                        <td class="px-6 py-2">Principal</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                         <td class="px-6 py-2">2</td>
                                        <td class="px-6 py-2">Secretary </td>
                                        <td class="px-6 py-2">Ms. Vandana Khare</td>
                                        <td class="px-6 py-2">Headmistress </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                         <td class="px-6 py-2">3</td>
                                         <td class="px-6 py-2">Members </td>
                                        <td class="px-6 py-2">Ms. Neha Rastogi</td>
                                        <td class="px-6 py-2">Academic Coordinator</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2">4</td>
                                        <td class="px-6 py-2"></td>
                                        <td class="px-6 py-2">Ms Gunjan Srivastava</td>
                                        <td class="px-6 py-2">Wing Coordinator</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                          <td class="px-6 py-2">5</td>
                                           <td class="px-6 py-2"></td>
                                        <td class="px-6 py-2">Ms Avneet Kaur</td>
                                        <td class="px-6 py-2">PGT (Psychology)</td>
                                    </tr>
                                     <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2">6</td>
                                        <td class="px-6 py-2"></td>
                                        <td class="px-6 py-2">Mr  Pradeep Chand</td>
                                        <td class="px-6 py-2">TGT ( Physical education)</td>
                                    </tr>
                                     <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <td class="px-6 py-2">7</td>
                                        
                                        <td class="px-6 py-2">Counsellor</td>    
                                           
                                        <td class="px-6 py-2">Ms Sunanda</td>
                                        
                                    </tr>
                                    

                                </tbody>
                            </table> -->
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