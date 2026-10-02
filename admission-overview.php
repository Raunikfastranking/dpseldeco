<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $admission_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $admission_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $admission_data['data']['meta_keywords'] ?? "" ?>">
    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home Page",
    "item": "https://dpseldeco.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Admission",
    "item": "https://dpseldeco.com/admission-overview"
  }]
}
</script>

</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($admission_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($admission_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
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
                        <a class="ms-1 text-sm font-medium text-blue-main">Admission</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="admission-overview" class="ms-1 text-sm font-medium text-blue-main"><?= strip_tags($admission_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="custom-container-1280 mx-3 sm:py-10 py-0 sm:p-20 p-0">
             <?= $admission_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <div class=" gap-9 mt-6 mb-10">

                <div>
                    <div>
                        <p class="text-[17px] text-gray-500 ">
                            DPS, Eldeco is affiliated to Central Board of Secondary Education (CBSE), and provides
                            education from Playgroup to grade XII. We believe that learning should happen by doing. To
                            provide the hands-on learning experience various activities are a part of the playgroup
                            curriculum. It helps in cognitive and motor development simultaneously. As the students
                            progress to senior classes the activities transform into experiments, projects, discussions
                            and real-world experiences.
                        </p>
                        <p class="text-[17px] text-gray-500 mt-4">
                            School welcomes applications for all the grades, subject to the availability of seats.
                            Admission is based on age-appropriate assessment and interaction with the child along with a
                            meeting with the parents. The process includes submission of a duly filled registration
                            form, followed by document verification and payment of fees upon selection.
                        </p>
                    </div>
                </div>
            </div> -->
            <div class="mt-5 text-gray-600">
                <!-- <h3 class="text-2xl font-[700] text-blue-main">Admission Criteria</h3> -->
                
                <div>
                    <!-- <h2 class="text-[20px] font-bold text-blue-main my-3">CLASSES PG, NURSERY AND PREP</h2> -->
                    <!-- <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 1 – Registration</h3>
                            <p>Prospectus and syllabus is given at the time of Registration. Parents are requested to
                                submit the duly filled registration form along with the documents within 3 days.</p>
                            <p class="font-semibold mt-2">Documents to be attached at the time of registration:</p>
                            <ul class="list-disc list-inside ml-4">
                                <li>Copy of Nagar Nigam Birth Certificate</li>
                                <li>Aadhar copy of parents</li>
                            </ul>
                            <p class="mt-2 font-semibold">Eligible Age (as on March 2021):</p>
                            <ul class="list-disc list-inside ml-4">
                                <li>3+ for Play Group</li>
                                <li>4+ for Nursery</li>
                                <li>5+ for Prep</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 2 – Entrance Test</h3>
                            <p>Admission in Pre-Primary will be based on written test & interaction.</p>
                            <p>Students have to report half an hour before the given time. </p>
                            <p>Attendance of both the parents is compulsory.</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 3 – Result</h3>
                            <p>Result will be declared after 3 days of the Entrance Test and will be informed by the
                                admission counselor.</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 4 – Admission Fee</h3>
                            <p>On confirmation of admission, parents will be required to deposit the admission fee
                                within 5 days, failing which the admission shall stand cancelled.</p>
                        </div>
                    </div> -->
                </div>

                <!-- Classes I-VIII -->
                <div>
                    <!-- <h2 class="text-[20px] font-bold text-blue-main my-3">CLASSES I – VIII</h2> -->
                    <div class="space-y-4">
                        <!-- <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 1 – Registration</h3>
                            <p>Prospectus and syllabus is given at the time of registration. Submit the filled form and
                                documents within 3 days.</p>
                            <p class="font-semibold mt-2">Documents to be attached at the time of registration:</p>
                            <ul class="list-disc list-inside ml-4">
                                <li>Copy of Nagar Nigam Birth Certificate</li>
                                <li>Aadhar copy of parents and students</li>
                                <li>Copy of Last Class Report Card</li>
                            </ul>
                        </div> -->

                        <!-- <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 2 – Entrance Test</h3>
                            <p>Admission is based on a written test.</p>
                            <p> Students must report 30 minutes before the scheduled time.</p>
                            <p> Attendance of both parents is compulsory.</p>
                        </div> -->

                        <!-- <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 3 – Result</h3>
                            <p>Students should score a minimum of 60% to clear the Entrance Test.
                                <br>
                                Result will be declared after 3 days of the Entrance Test. It will be informed to the
                                parents by the admission counselor.
                            </p>
                        </div> -->

                        <div>
                            <!-- <h3 class="text-lg font-semibold text-gray-600">STEP 4 – Admission Fee & Documentation</h3>
                            <p>Admission fee must be deposited within 5 days of confirmation, failing which the
                                admission shall be cancelled.</p>
                            <p class="font-semibold mt-2">Documents required at the time of admission:</p>
                            <ul class="list-disc list-inside ml-4">
                                <li>Transfer Certificate / Undertaking</li>
                                <li>Bonafide Certificate from the previous school</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <!-- Classes IX & XI -->
                <!-- <div>
                    <h2 class="text-[20px] font-bold text-blue-main my-3">CLASSES IX & XI</h2>
                    <div class="space-y-4">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 1 – Registration</h3>
                            <p>Prospectus and syllabus is given at the time of registration. Submit the filled form and
                                documents within 3 days.</p>
                            <p class="font-semibold mt-2">Documents to be attached at the time of registration:</p>
                            <ul class="list-disc list-inside ml-4">
                                <li>Copy of Nagar Nigam Birth Certificate</li>
                                <li>Aadhar copy of parents and students</li>
                                <li>Statement of marks for previous two years</li>
                                <li>Bonafide Certificate from the previous school</li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 2 – Entrance Test</h3>
                            <p>Admission is based on a written test. Students must report 30 minutes before the
                                scheduled time. Attendance of both parents is compulsory.</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 3 – Result</h3>
                            <p>Students must score at least 70% to qualify. Admission is subject to seat availability.
                                Result will be declared after 3 days by the admission counselor.</p>
                        </div>

                        <div>
                            <h3 class="text-lg font-semibold text-gray-600">STEP 4 – Admission Fee & Documentation</h3>
                            <p>Admission fee must be deposited within 5 days of confirmation, failing which the
                                admission shall be cancelled.</p>
                            <p class="font-semibold mt-2">Documents required at the time of admission:</p>
                            <ul class="list-disc list-inside ml-4">
                                <li>Transfer Certificate</li>
                                <li>Bonafide Certificate from the previous school</li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>



        <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>