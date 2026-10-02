<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $seniorlabs_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $seniorlabs_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $seniorlabs_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($seniorlabs_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($seniorlabs_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
                        <p class="ms-1 text-sm font-medium text-blue-main">Laboratories
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
                        <a href="senior-lab" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($seniorlabs_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="gap-10 ">

             <?= $seniorlabs_data['data']['sections'][1]['content'] ?? "" ?>
             
                <!-- <div class="mx-3 pb-0 sm:pt-0 pt-[100px] ">
                   <h3 class="block text-[18px] font-[600] text-gray-600 mt-3 "> MATHEMATICS LAB</h3>
                   <p class="text-[16px] text-gray-600 mt-2"> Maths Lab caters to various learning styles by offering visual, auditory, and tactile experiences to
                    students. The lab environment provides a playful approach to learning, making math enjoyable through
                    games, puzzles, and interactive activities. By using models, charts, and interactive tools, students
                    can approach problems creatively and explore various ways to solve them.</p>
                   <h3 class="block text-[18px] font-[600] text-gray-600 mt-3 "> PHYSICS LAB</h3>
                   <p class="text-[16px] text-gray-600 mt-2"> Physics Lab allows students to observe and experiment with physical equipments, helping them connect
                    theoretical concepts to real-world applications. The lab offers a platform for students to conduct
                    experiments and observe physical phenomena, helping them develop essential skills in measurement,
                    observation, and analysis.</p>
                   <h3 class="block text-[18px] font-[600] text-gray-600 mt-3 "> CHEMISTRY LAB</h3>
                   <p class="text-[16px] text-gray-600 mt-2"> Chemistry lab provides students with the opportunity to work with various chemicals, equipment, and
                    instruments, helping them develop essential laboratory skills such as measuring, mixing, and
                    observing chemical reactions. The Chemistry Lab emphasizes the importance of safety and proper
                    laboratory procedures, helping students become familiar with safety protocols and correct handling
                    of chemicals and equipment.</p>
                   <h3 class="block text-[18px] font-[600] text-gray-600 mt-3 "> BIOLOGY LAB</h3>
                  <p class="text-[16px] text-gray-600 mt-2">  Biology Lab allows students to observe living organisms, cells, and biological processes directly,
                    helping them better understand concepts such as cell structure, genetics, and ecology. he Biology
                    Lab provides an opportunity for students to observe biological phenomena firsthand and conduct
                    experiments, deepening their understanding through practical application.</p>
                   <h3 class="block text-[18px] font-[600] text-gray-600 mt-3 "> PSYCHOLOGY LAB</h3>
                  <p class="text-[16px] text-gray-600 mt-2">  The lab offers students the opportunity to engage with psychological tests and assessments, such as
                    intelligence tests, personality inventories, and clinical tools, which are essential in
                    psychological research and practice. Students learn the importance of ethics in psychology,
                    including obtaining informed consent, ensuring confidentiality, and conducting experiments in a
                    responsible and respectful manner.</p>

                </div> -->
            </div>
        </div>


        <!-- <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div>
                <p class="text-[17px] text-gray-600 mt-1">
                    <span class="text-blue-main text-[20px] font-[600]">Laboratories :</span><br>
                <div>
                    <span class="text-black font-[600]">Junior Labs Play Lab: </span>
                    The activity lab is designed for all activities for the preprimary and primary students where they actively participate in all activities to enhance their learning and sharpen their motor skills.
                    <br>● The Junior Maths Lab
                    <br>● The Curiosity Lab
                </div>
                <div class="mt-4">
                    <span class="text-black font-[600]">Senior Labs: </span>
                    Science Lab <br>

                    <br> ● Physics
                    The lab is as per the specification of C.B.S.E. norms with spacious and proper counters for experiments; with the other required provisions.

                    <br> ● Chemistry
                    As per proper and latest specifications the requirements are prevalent in the labs to meet C.B.S.E. standards.

                    <br> ● Biology
                    Biology lab has various facilities to help students get a first-hand learning experience by performing various experiments on their own, under the guidance of the subject teacher.

                    <br> ● Bio-Technology

                    <br> ● Computer Lab
                    The school is embellished with an updated computer lab with the latest infrastructure and computers which can accommodate the classes with ease.


                    <br> ● Language Lab

                    Video clippings are shown to students on a regular basis to apprise them of the principles of language to better their command of it.

                    Fashion Studies Lab {need content}

                    <br> ● Math Lab

                </div>
                </p>
            </div>
        </div> -->


    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
    $('.moreless-button').click(function() {
        const moreText = $(this).siblings('.moretext');

        $('.moretext').not(moreText).slideUp();
        $('.moreless-button').not(this).text('Read more');

        // Toggle the current one
        moreText.slideToggle();

        if ($(this).text() == "Read more") {
            $(this).text("Read less");
        } else {
            $(this).text("Read more");
        }
    });

    var aboutCarousel = new Glide('.about-carousel', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 4
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel.mount();

    var aboutCarousel2 = new Glide('.about-carousel2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    aboutCarousel2.mount();




    var glide03 = new Glide('.glide-03', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });

    glide03.mount();

    var latestNews2 = new Glide('.latestNews2', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1680: {
                perView: 4
            },
            1024: {
                perView: 3
            },
            820: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    latestNews2.mount();
    </script>
</body>

</html>