<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolrules_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $schoolrules_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $schoolrules_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                   <?= strip_tags($schoolrules_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                   <?= strip_tags($schoolrules_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-blue-main">Admission
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="school-rules" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($schoolrules_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <?= $schoolrules_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <div class=" bg-white">
                
                <ol class="list-decimal pl-6 space-y-3 text-gray-700 text-[16px] leading-relaxed">
                    <li>Students accompanied by escorts must remain within school premises until their escort arrives. In case of any delay, they should immediately report to the school office for further instructions.</li>
                    <li>Those who commute independently must ensure they arrive at least five minutes prior to the ringing of the first bell.</li>
                    <li>Movement between classrooms during period transitions must be carried out in a calm, silent, and disciplined manner.</li>
                    <li>Respect and care must be shown towards school property. Students must refrain from defacing furniture or walls in any way. Any damage must be reported to the class teacher immediately. Offenders will be fined accordingly.</li>
                    <li>The school retains the right to suspend, after due warning, any student whose academic performance is unsatisfactory or whose behavior negatively impacts others.</li>
                    <li>Only academic books (textbooks or library books) are permitted. Other reading materials such as magazines or unrelated books are not allowed.</li>
                    <li>The exchange of money or personal belongings among students is strictly prohibited.</li>
                    <li>The school bears no responsibility for any items lost within its premises.</li>
                    <li>Parents and guardians are encouraged to meet teachers on PTM (Parent-Teacher Meeting) days to stay informed about their child's academic and behavioral progress.</li>
                    <li>Parents or guardians must seek prior permission from the Principal before meeting the teachers.</li>
                    <li>On birthdays, students are allowed to distribute only toffees and chocolates. Other eatables or gifts are not permitted for distribution.</li>
                    <li>Carrying the school identity card throughout the academic year is mandatory for all students.</li>
                    <li>Participation in co-curricular activities is only allowed during zero periods and recess.</li>
                    <li>Every personal belonging, including water bottles, blazers, and jerseys, must clearly display the student’s name, class, and section.</li>
                    <li>Any form of academic dishonesty during assessments will result in a zero and a written warning. Repetition of the offense will lead to dismissal.</li>
                    <li>Students may not use the school telephone without explicit permission from the receptionist. Personal calls during class hours are not entertained.</li>
                    <li>Students availing school transport must maintain decorum onboard. Repeated misconduct may lead to suspension of bus facility.</li>
                    <li>Leave applications must be submitted in advance, using the designated form provided at the end of the school almanac.</li>
                    <li>Students are not allowed to go to a relative’s or friend’s house from school without prior permission of parents.</li>
                </ol>
            </div> -->

        </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>