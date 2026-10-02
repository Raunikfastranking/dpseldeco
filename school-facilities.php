<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $schoolfacilities_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $schoolfacilities_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $schoolfacilities_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($schoolfacilities_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($schoolfacilities_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Facilities
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
                        <a href="school-facilities" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($schoolfacilities_data['data']['sections'][0]['content_heading']) ?? "" ?>
                        </a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
             <?= $schoolfacilities_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <div>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">ACTIVITY ROOM :</h3>
                <p class="text-[16px] text-gray-600 ">
                    A well-equipped activity room is a safe haven for toddlers where we shape and nurture their
                    uniqueness and creativity. This is one of the many places where kids love to explore their
                    interests, and their cognitive and psychomotor skills are developed.
                </p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">ROBOTICS LAB</h3>
                <p class="text-[16px] text-gray-600 ">
                    A fully furnished robotics lab is an initiative to promote STEM learning in an engaging way. It
                    helps in building conceptual and critical thinking in our students and prepares the foundation for
                    future careers in technology. The real-world application of knowledge makes our students confident
                    and makes them understand the value of teamwork and collaboration.
                </p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">MUSIC ROOM</h3>
                <p class="text-[16px] text-gray-600 ">The school recognises the significance of performing arts. We
                    cater for all the requirements of vocal and instrumental music. Different rooms have been provided
                    for Indian and Western music and for the vocals. The corridors of the music rooms are filled with
                    the symphony, melody and beats.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">DANCE ROOM</h3>
                <p class="text-[16px] text-gray-600 ">Students are offered the choice of Western and Indian dance forms
                    in the school. The combined efforts of the expert faculty and talented students have brought laurels
                    to the school. DPS Eldeco offers spacious and beautifully designed dance rooms where students can
                    express themselves. It’s a lively space that encourages creativity and movement.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">COUNSELLING ROOM</h3>
                <p class="text-[16px] text-gray-600 ">The counselling area provides a secure environment where students
                    can share their feelings and fears. It helps them in coping with stress, mental health problems, and
                    personal difficulties. They also get guidance in making informed choices regarding future
                    professions.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">MATHEMATICS LAB</h3>
                <p class="text-[16px] text-gray-600 ">Maths Lab caters to various learning styles by offering visual,
                    auditory, and tactile experiences to students. The lab environment provides a playful approach to
                    learning, making math enjoyable through games, puzzles, and interactive activities. By using models,
                    charts, and interactive tools, students can approach problems creatively and explore various ways to
                    solve them.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">PHYSICS LAB</h3>
                <p class="text-[16px] text-gray-600 ">It allows students to observe and experiment. It helps them
                    connect theoretical concepts to real-world applications. They observe physical phenomena and develop
                    essential skills in measurement, observation, and analysis</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">CHEMISTRY LAB</h3>
                <p class="text-[16px] text-gray-600 ">It is where students find an opportunity to work with various
                    chemicals. It helps them develop essential laboratory skills such as measuring, mixing, and
                    observing chemical reactions. They get the liberty within a safe space to explore what they read in
                    books.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">BIOLOGY LAB </h3>
                <p class="text-[16px] text-gray-600 ">The Biology Lab enables students to directly view living
                    organisms, cells, and biological processes. They witness and study biological events directly and
                    carry out experiments. This hands-on method enhances their comprehension.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">PSYCHOLOGY LAB</h3>
                <p class="text-[16px] text-gray-600 ">The laboratory provides students with the chance to interact with
                    psychological evaluations and assessments. They get familiar with intelligence tests, personality
                    inventories, and clinical instruments. These are important to learn for psychological studies and
                    applications. </p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">CAFETERIA</h3>
                <p class="text-[16px] text-gray-600 ">Our school cafeteria is a favourite spot among students. They get
                    access to delicious and nutritious meals. Additionally, it offers a tidy and sanitary setting. It’s
                    an excellent spot to unwind and rejuvenate throughout the school day.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">LIBRARY</h3>
                <p class="text-[16px] text-gray-600 ">Our library provides access to a wide range of informational
                    resources. We have books, reference materials, journals, and digital media to help students learn
                    how to find, evaluate, and use information effectively. With access to e-books, educational
                    software, and online resources, the library helps students develop digital literacy and responsible
                    use of technology.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">INFIRMARY</h3>
                <p class="text-[16px] text-gray-600 ">Our school has a well-maintained infirmary. We have a qualified
                    staff. In the event of an emergency, students receive immediate medical attention on campus. Thus,
                    we ensure their safety and well-being at all times.</p><br>
                <h3 class="block text-[20px] font-[600] text-gray-600 ">SMART CLASSES</h3>
                <p class="text-[16px] text-gray-600 ">Teaching has to evolve with the times. So, at DPS, we make use of
                    videos, animations, and presentations. Our Smart Classes make complex topics easier to understand.
                    They accommodate visual, auditory, and kinesthetic learners by combining text, sound, and visuals.
                </p>
            </div> -->
        </div>


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
</body>

</html>