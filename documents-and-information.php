<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $documentsinformation_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $documentsinformation_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $documentsinformation_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative mb-[40px]">
        <div class="bg-center flex items-center text-center h-[300px] brud-image"
           >
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($documentsinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($documentsinformation_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
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
                        <a href="documents-and-information"
                            class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($documentsinformation_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>


        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">
                <div>
                    <div class="md:w-[100%]">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
                            <?= $documentsinformation_data['data']['sections'][1]['content'] ?? "" ?>
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
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">1.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copies of affiliation/upgradation letter and
                                            recent extension of affiliation, if any</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/d977202210713545978.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">2.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copies of societies/trust/company
                                            registration/renewal certificate as applicable</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/7f65202210713565145.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">3.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copy of no objection certificate (noc) issued
                                            if applicable by the state govt/ut</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/5f592022107135659220.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">4.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copy of valid building safety certificate as
                                            per the national building code</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/9e56202441712589261.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">5.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copy of valid fire safety certificate issued by
                                            the competent authority</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/b0d62024417125659359.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">6.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copy of the deo certificate submitted by the
                                            school for affiliation/upgradation/extension of affiliation or
                                            self-certification by school</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/cc592024423162520928.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">7.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copy of recognition certificate under rte act
                                            2009 and its renewal if applicable</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/88fe202441716854175.pdf"
                                                target="_blank"
                                                class="font-medium text-[#005224] hover:underline">View</a>
                                        </td>
                                    </tr>
                                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap">8.
                                        </th>
                                        <td class="px-6 py-2 capitalize">Copies of valid water, health and sanitation
                                            certificates</td>
                                        <td class="px-6 py-2">
                                            <a href="https://dpseld.superhouseerp.com/Uploads/Site/DPSELD/DocsAndInfo/Pdf/8fb3202442316212389.pdf"
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

    </div>

    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>

</body>

</html>