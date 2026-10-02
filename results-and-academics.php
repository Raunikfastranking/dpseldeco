<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $resultsacademics_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $resultsacademics_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $resultsacademics_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[40px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($resultsacademics_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($resultsacademics_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosures
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
                        <a href="results-and-academics" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($resultsacademics_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                             <?= $resultsacademics_data['data']['sections'][1]['content'] ?? "" ?>
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">S.No.</th>
                                        <th scope="col" class="px-6 py-4">Documents/Information</th>
                                        <th scope="col" class="px-6 py-4">Upload Document Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1</th>
                                        <td class="px-6 py-2 capitalize">List of school management committee (smc)</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/d9792024710122423261.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2</th>
                                        <td class="px-6 py-2 capitalize">Fee structure of the school</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/2fed202395145848944.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3</th>
                                        <td class="px-6 py-2 capitalize">List of parents teachers association (pta)
                                            members</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/d809202391313523276.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4</th>
                                        <td class="px-6 py-2 capitalize">Last three-year result of the board examination
                                            as per applicability</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/4d7c2023530145929979.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5</th>
                                        <td class="px-6 py-2 capitalize">Annual academic calendar</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/102b2023926162626207.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- <h2 class="text-blue-main font-[700] text-[36px] text-center">Board Examination Results</h2> -->
        <!-- Result – Class X -->
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <!-- <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <h3 class="text-blue-main font-[700] text-[24px] mb-3">Result – Class X</h3>
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Sr No</th>
                                        <th scope="col" class="px-6 py-4">BOARD RESULT ANALYSIS FOR THE YEAR 2024</th>
                                        <th scope="col" class="px-6 py-4"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">1.</td>
                                        <td class="px-6 py-2">Total number of students</td>
                                        <td class="px-6 py-2">248</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">2.</td>
                                        <td class="px-6 py-2">On Roll</td>
                                        <td class="px-6 py-2">248</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">3.</td>
                                        <td class="px-6 py-2">Appeared</td>
                                        <td class="px-6 py-2">248</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">4.</td>
                                        <td class="px-6 py-2">Number of students passed</td>
                                        <td class="px-6 py-2">248</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">5.</td>
                                        <td class="px-6 py-2">Compartment</td>
                                        <td class="px-6 py-2">0</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">6.</td>
                                        <td class="px-6 py-2">Failures</td>
                                        <td class="px-6 py-2">0</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">7.</td>
                                        <td class="px-6 py-2">Absent</td>
                                        <td class="px-6 py-2">0</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">8.</td>
                                        <td class="px-6 py-2">Average aggregate percentage of marks</td>
                                        <td class="px-6 py-2">81.64</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">9.</td>
                                        <td class="px-6 py-2">Highest Percentage</td>
                                        <td class="px-6 py-2">98.01</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">10.</td>
                                        <td class="px-6 py-2">Lowest Percentage</td>
                                        <td class="px-6 py-2">61.00</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">11.</td>
                                        <td class="px-6 py-2">Number of students securing 90% and above</td>
                                        <td class="px-6 py-2">63</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">12.</td>
                                        <td class="px-6 py-2">Number of students securing 89.9 to 85%</td>
                                        <td class="px-6 py-2">47</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">13.</td>
                                        <td class="px-6 py-2">Number of students securing 84.99 to 80%</td>
                                        <td class="px-6 py-2">48</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">14.</td>
                                        <td class="px-6 py-2">Number of students securing 79.99 to 75%</td>
                                        <td class="px-6 py-2">34</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">15</td>
                                        <td class="px-6 py-2">Number of students securing 74.99 to 70%</td>
                                        <td class="px-6 py-2">15</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">16</td>
                                        <td class="px-6 py-2">Number of students securing 69.99 to 60%</td>
                                        <td class="px-6 py-2">33</td>
                                    </tr>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">17</td>
                                        <td class="px-6 py-2">Number of students securing below 60%</td>
                                        <td class="px-6 py-2">8</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>

        <!-- Result – Class XII -->
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <!-- <h3 class="text-blue-main font-[700] text-[24px] mb-3">Result – Class XII</h3> -->
                            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                <thead class="text-xs text-white uppercase bg-[#005224]">
                                    <tr>
                                        <th scope="col" class="px-6 py-4">Sr No</th>
                                        <th scope="col" class="px-6 py-4">BOARD RESULT ANALYSIS FOR THE YEAR 2024</th>
                                        <th scope="col" class="px-6 py-4"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">1.</td>
                                        <td class="px-6 py-2">Total number of students</td>
                                        <td class="px-6 py-2">181</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">2.</td>
                                        <td class="px-6 py-2">On Roll</td>
                                        <td class="px-6 py-2">181</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">3.</td>
                                        <td class="px-6 py-2">Appeared</td>
                                        <td class="px-6 py-2">180</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">4.</td>
                                        <td class="px-6 py-2">Number of students passed</td>
                                        <td class="px-6 py-2">176</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">5.</td>
                                        <td class="px-6 py-2">Compartment</td>
                                        <td class="px-6 py-2">4.</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">6.</td>
                                        <td class="px-6 py-2">Failures</td>
                                        <td class="px-6 py-2">0</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">7.</td>
                                        <td class="px-6 py-2">Absent</td>
                                        <td class="px-6 py-2">1</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">8.</td>
                                        <td class="px-6 py-2">Average aggregate percentage of marks</td>
                                        <td class="px-6 py-2">81.23</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">9.</td>
                                        <td class="px-6 py-2">Highest Percentage</td>
                                        <td class="px-6 py-2">96.00</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">10.</td>
                                        <td class="px-6 py-2">Lowest Percentage</td>
                                        <td class="px-6 py-2">53.00</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">11.</td>
                                        <td class="px-6 py-2">securing </td>
                                        <td class="px-6 py-2">36</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">12.</td>
                                        <td class="px-6 py-2">Number of students securing 89.9 to 85%</td>
                                        <td class="px-6 py-2">38</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">13.</td>
                                        <td class="px-6 py-2">Number of students securing 84.99 to 80%</td>
                                        <td class="px-6 py-2">36</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">14.</td>
                                        <td class="px-6 py-2">Number of students securing 79.99 to 75%</td>
                                        <td class="px-6 py-2">23</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">15.</td>
                                        <td class="px-6 py-2">Number of students securing 74.99 to 70%</td>
                                        <td class="px-6 py-2">21</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">16.</td>
                                        <td class="px-6 py-2">Number of students securing 69.99 to 60%</td>
                                        <td class="px-6 py-2">22</td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">

                                        <td class="px-6 py-2">17.</td>
                                        <td class="px-6 py-2">Number of students securing below 60%</td>
                                        <td class="px-6 py-2">04</td>
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