<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $aboutthe_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $aboutthe_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $aboutthe_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($aboutthe_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($aboutthe_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="about-clan" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($aboutthe_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class=" gap-10 ">

                <div class="mx-3 my-5 ">
                    <?= $aboutthe_data['data']['sections'][1]['content'] ?? "" ?>
                    <!-- <div className="text-gray-600 space-y-4">
                        <p>
                            “Alone we can do so little, together we can do so much.” — <strong>Helen Keller</strong>
                        </p>

                        <p>
                            The well-trained teaching staff of <strong>DPS Eldeco</strong> has been earnestly serving
                            the students academically,
                            keeping the motto – <em>Service Before Self</em> alive. We believe that qualified teachers
                            are an asset to the organization.
                            With extensive teaching experience, each faculty member is both a teacher and an expert in
                            their own field.
                        </p>

                        <p class="mb-2">
                            Teachers here plan their lessons in great detail and well in advance. They are not only
                            well-equipped with subject knowledge,
                            but also act as prominent co-workers, making the functioning of the system smooth and
                            positive under the following hierarchy:
                        </p>

                        <ul className="list-disc pl-5">
                            <li>Principal</li>
                            <li>Head Mistress</li>
                            <li>Academic Co-ordinator</li>
                            <li>Co-ordinators</li>
                            <li>Class Representatives</li>
                            <li>Class Teachers</li>
                            <li>Subject Teachers</li>
                        </ul>
                    </div> -->

                </div>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>