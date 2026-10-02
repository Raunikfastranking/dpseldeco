<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $managementcommittee_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $managementcommittee_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $managementcommittee_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($managementcommittee_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($managementcommittee_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="management-committee" class="ms-1 text-sm font-medium text-blue-main">Leadership
                            Team</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="management-committee" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($managementcommittee_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
                

            <div class="overflow-x-auto w-full max-w-7xl bg-white rounded-md shadow-sm">
                <?= $managementcommittee_data['data']['sections'][1]['content'] ?? "" ?>

                <!-- <h2
                    class="text-xl font-bold text-white text-center py-4 border-b border-gray-300 bg-blue-main rounded-t-md">
                    MANAGEMENT COMMITTEE</h2>
                <table class="w-full table-auto text-sm md:text-base text-left border border-gray-300">
                    <thead class="bg-gray-100 text-gray-700 font-semibold">
                        <tr>
                            <th class="px-4 py-3 border border-gray-300">S.No</th>
                            <th class="px-4 py-3 border border-gray-300">Member Name</th>
                            <th class="px-4 py-3 border border-gray-300">Designation in SMC</th>
                            <th class="px-4 py-3 border border-gray-300">Address</th>
                            <th class="px-4 py-3 border border-gray-300">Phone</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="border-t border-gray-300">
                            <td class="px-4 py-2 border border-gray-300">1</td>
                            <td class="px-4 py-2 border border-gray-300">Shri Mukhtarul Amin</td>
                            <td class="px-4 py-2 border border-gray-300">President</td>
                            <td class="px-4 py-2 border border-gray-300">15/288, Civil Lines, Kanpur</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">2</td>
                            <td class="px-4 py-2 border border-gray-300">Shri Syed Ali Javed Hashmi</td>
                            <td class="px-4 py-2 border border-gray-300">Member</td>
                            <td class="px-4 py-2 border border-gray-300">Flat No: 101, 89/218-C Tukanya Purwa, Kanpur
                            </td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">3</td>
                            <td class="px-4 py-2 border border-gray-300">Mr. Sanjay Kapoor</td>
                            <td class="px-4 py-2 border border-gray-300">Member</td>
                            <td class="px-4 py-2 border border-gray-300">Flat No: 1004, D1, Eldeco Garden Estate 86/245
                                Raipurwa Kanpur-208003</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">4</td>
                            <td class="px-4 py-2 border border-gray-300">DIOS</td>
                            <td class="px-4 py-2 border border-gray-300">Member (Government Body)</td>
                            <td class="px-4 py-2 border border-gray-300">Shiksha Bhawan Jagat Narain Road Qaiserbagh
                                Lucknow</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">5</td>
                            <td class="px-4 py-2 border border-gray-300">Mrs. Reema Joshi</td>
                            <td class="px-4 py-2 border border-gray-300">Teacher Representative</td>
                            <td class="px-4 py-2 border border-gray-300">JB Crystal Rowhouse H.No.-17, Aurangabad Jagir,
                                Bijnor Road, Lucknow.</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">6</td>
                            <td class="px-4 py-2 border border-gray-300">Mrs. Savita Srivastava</td>
                            <td class="px-4 py-2 border border-gray-300">Teacher Representative</td>
                            <td class="px-4 py-2 border border-gray-300">590-P/999, Yamunapuram Colony, Pancham Khera,
                                Charan Batta, Near SGPGI, Raibareilly Road, Lucknow.</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">7</td>
                            <td class="px-4 py-2 border border-gray-300">Mr. Gautam Ahuja</td>
                            <td class="px-4 py-2 border border-gray-300">Parent Representative</td>
                            <td class="px-4 py-2 border border-gray-300">K-639, Ashiyana Colony, Kanpur Road, Lucknow
                            </td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">8</td>
                            <td class="px-4 py-2 border border-gray-300">Shri Abhishek Khanna</td>
                            <td class="px-4 py-2 border border-gray-300">Parent Representative</td>
                            <td class="px-4 py-2 border border-gray-300">Chartered Accountant FLAT-8 Ekta Complex,
                                Lalbagh, Lucknow.</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">9</td>
                            <td class="px-4 py-2 border border-gray-300">Ms. Rupam Saluja</td>
                            <td class="px-4 py-2 border border-gray-300">Principal (Other School)</td>
                            <td class="px-4 py-2 border border-gray-300">K-430, Ashiyana Colony, Kanpur Road, Lucknow.
                            </td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr class="bg-gray-50">
                            <td class="px-4 py-2 border border-gray-300">10</td>
                            <td class="px-4 py-2 border border-gray-300">Mr. Vijyesh Pandey</td>
                            <td class="px-4 py-2 border border-gray-300">Principal (Other School)</td>
                            <td class="px-4 py-2 border border-gray-300">Kendriya Vidyalaya, AMC, Lucknow.</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2 border border-gray-300">11</td>
                            <td class="px-4 py-2 border border-gray-300">Mrs. Manisha Anthwal</td>
                            <td class="px-4 py-2 border border-gray-300 font-semibold">Principal/Secretary</td>
                            <td class="px-4 py-2 border border-gray-300">C-2096 Indira Nagar Lucknow</td>
                            <td class="px-4 py-2 border border-gray-300">-</td>
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