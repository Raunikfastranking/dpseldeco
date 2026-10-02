<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolguidelines_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $schoolguidelines_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $schoolguidelines_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($schoolguidelines_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($schoolguidelines_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <a href="school-guidelines" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($schoolguidelines_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0 text-gray-600">
            <div class=" gap-9 mt-6 mb-10">

                <div>
                    <?= $schoolguidelines_data['data']['sections'][1]['content'] ?? "" ?>
                    <!-- <div>
                        <p class="text-[25px] text-gray-700 text-center font-[700]">RESPECT, RESPONSIBILITY AND EXCELLENCE</p>
                        <p class="text-[25px] text-gray-500 "> 1. SAFETY AND SECURITY </p>
                        <ul>
                            <li>❖ It is mandatory for students to carry their Identity cards.</li>
                            <li> ❖ Parents/ Guardians should update the class teacher on any changes in address, contact
                                information or guardianship to ensure accurate records.</li>
                            <li>❖ Students escorted to and from school must wait for the escort to arrive and report
                                delays to the school office.</li>
                            <li>❖ Students are not allowed to visit relatives or friend’s houses from school without
                                written permission from parents/ guardians.</li>
                            <li>❖ Students are expected to be environmentally friendly and contribute to protecting the
                                environment.</li>
                            <li>❖For safety, students should not buy or accept articles, gifts or food from anyone en
                                route. </li>
                        </ul><br>
                        <p class="text-[25px] text-gray-500 "> 2.ATTENDANCE AND PUNCTUALITY </p>
                        <ul>
                            <li>❖Organizers must be brought to school everyday.</li>
                            <li>❖ School is functional from Monday to Saturday for classes VI-XII and Monday to Friday
                                for PG-V. The school gates will close 5 minutes after the bell rings.</li>
                        </ul><br>
                        <p class="text-[25px] text-gray-500 "> 3.DISCIPLINARY ÉTIQUETTES </p>
                        <ul>
                            <li>❖ No loitering after bell rings; movement must be quiet and orderly, keeping to the left
                                in corridors and staircases.</li>
                            <li>❖ Students should follow staff instructions and wait for their transportation in
                                designated areas.</li>
                            <li>❖ Respect and care for school property. Damages caused intentionally will result in fine
                                and appropriate disciplinary actions.</li>
                            <li>❖ Students are responsible for their belongings. Name tags are recommended for all
                                personal items, especially jackets and sweaters.</li>
                            <li>❖ Expensive gifts, eatables and cake cutting for birthdays are strictly prohibited.</li>
                            <li>❖ Jewellery, mobile phones, cameras and other electronics are not allowed. Confiscated
                                items may be held until parents retrieve them with a signed undertaking.</li>
                            <li>❖ Use dustbins for waste disposal and contribute to keeping the premises clean and
                                litter free. </li>
                        </ul><br>
                        <p class="text-[25px] text-gray-500 ">4. BEHAVIOURAL EXPECTATIONS</p>
                        <ul>
                            <li>❖ Respect and Responsibility: Students should treat teachers, staff and peers with
                                respect and uphold a positive school image</li>
                            <li>❖ Anti-Bullying Policy: The school maintains a zero tolerance stance on bullying in any
                                form. Violations will result in serious disciplinary measures, including possible
                                suspension or expulsion.</li>
                            <li>❖ Orderly Movement: Observe silence and exhibit appropriate behavior in hallways, during
                                assembly and at dispersal.</li>
                        </ul><br>
                        <p class="text-[25px] text-gray-500 ">5. LEAVE RULES</p>
                        <ul>
                            <li>❖ 75% of the attendance in the academic session is compulsory for students to be
                                eligible for the final assessment.</li>
                            <li>❖ Attendance on the reopening day after the vacations is mandatory.</li>
                            <li>❖ Emergency Leave: In case of emergency leave application should be duly signed and
                                mailed to the school positively.</li>
                            <li>❖ Planned Leave: Submit requests for planned absences at least one week in advance.</li>
                            <li>❖ No student will be permitted to leave the school premises during PAs unless under the
                                above conditions.</li>
                        </ul><br>
                        <p class="text-[25px] text-gray-500 ">6. HEALTH GUIDELINES AND SICK LEAVE</p>
                        <ul>
                            <li>❖ Reporting Illness: Inform the school in case of illness within 24 hours. A medical
                                certificate is required for absences longer than three days along with the duly signed
                                application. </li>
                            <li>❖ Infectious Diseases: If your child catches infectious disease, inform the school
                                immediately. The child must observe the recommended quarantine period and can return
                                only after full recovery with a medical certificate. </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>

        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>