<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $missionvision_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $missionvision_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $missionvision_data['data']['meta_keywords'] ?? "" ?>">

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
    "name": "About Us",
    "item": "https://dpseldeco.com/mission"
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
                    <?= strip_tags($missionvision_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden  font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($missionvision_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index"
                        class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">About Us
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
                        <a href="mission"
                            class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"><?= strip_tags($missionvision_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="md:mt-[80px] 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3 sm:mt-3 bg-center sm:mb-10 mb-0 sm:px-20 p-0 relative">
            <div class="mb-10">
                <h2 class="text-[16px] font-[700] text-gray-500 leading-8 text-center relative">
                    <?= $missionvision_data['data']['sections'][1]['content'] ?? "" ?>
                    <!-- <span class="text-[32px] font-[700] text-blue-main hr-line uppercase">WELCOME TO DELHI PUBLIC SCHOOL,
                        ELDECO.</span></h2>
                <p class="text-[17px] text-gray-500 mt-5">The foundation of DPS Eldeco was laid down in the year 2000.
                    The school has grown leaps and bounds since its inception. The journey that began with imparting
                    education till class V is now offering PCM, PCB, Commerce and Humanities in standard XII. The school
                    is constantly evolving and broadening its approach to provide a holistic learning environment to the
                    students. </p>
                <p class="text-[17px] text-gray-500 mt-5">The school is affiliated to the Central Board of Secondary
                    Education. We are striving to keep up with the board’s vision of imbibing the values conceived in
                    the NEP 2020. Along with the co-scholastic activities the students are offered Skill Subjects and
                    Optional subjects for multidimensional growth. Besides scholastic we also emphasize on the
                    performing arts through adequate dance, music and singing lessons in the curriculum. The health and
                    fitness of the students is paramount for us. Thus we offer various sports like swimming, badminton,
                    tennis, cricket and many more. A healthy body fosters a healthy mind, empowering students to excel
                    and achieve laurels in academics. </p>
                <p class="text-[17px] text-gray-500 mt-5">Our school’s motto, Service before Self, is a constant
                    reminder that the safety and well being of fellow human beings comes before our own welfare, comfort
                    and security.</p> -->

            </div>


            <div class="sm:flex gap-10 items-center">
                <div class="mx-3 pb-0  sm:w-[50%]">
                    <div class="sm:text-left text-center">
                        <?= $missionvision_data['data']['sections'][2]['columns'][0]['content'] ?? "" ?>
                        <!-- <h2 class="text-[30px] font-[700] text-blue-main  hr-line inline relative">Vision</h2>
                        <p class="text-[16px] text-gray-600 mt-1">To provide a stimulating learning environment with a
                            technological orientation which maximises individual potential and ensures that students of
                            all ability levels are well-equipped to meet the challenges of education, work and life.</p> -->
                    </div>
                </div>
                <div class="sm:w-[50%] ">
                    <img src="<?= $missionvision_data['data']['sections'][2]['columns'][1]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($missionvision_data['data']['sections'][2]['columns'][1] ?? [], 'Vision') ?>">
                </div>
            </div>
        </div>

        <div
            class=" 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3 sm:mt-0 bg-center sm:mb-10 mb-0 sm:px-20 p-0 relative">

            <div class="flex sm:flex-row flex-col-reverse items-center gap-10">
                <div class="sm:w-[50%] ">
                    <img src="<?= $missionvision_data['data']['sections'][3]['columns'][0]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($missionvision_data['data']['sections'][3]['columns'][0] ?? [], 'Mission') ?>">
                </div>
                <div class="mx-3 pb-0  sm:w-[50%]">
                    <div class="sm:text-left text-center">
                        <?= $missionvision_data['data']['sections'][3]['columns'][1]['content'] ?? "" ?>
                        <!-- <h2 class="text-[30px] font-[700] text-blue-main hr-line inline relative">Mission</h2>
                        <p class="text-[16px] text-gray-500 mt-1">To develop an active and creative mind in every
                            student, a sense of understanding and compassion for others and the courage to act on their
                            beliefs. We stress the total development of each child: spiritual, moral, intellectual,
                            social, emotional and physical.</p> -->
                    </div>
                </div>
            </div>
        </div>

        <div
            class=" 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4 sm:mt-0 bg-center sm:mb-10 mb-5 sm:px-20 p-0 relative">

            <div class="sm:flex items-center gap-10">
                <div class="pb-0  sm:w-[50%]">
                    <div class="sm:text-left text-center">
                        <?= $missionvision_data['data']['sections'][4]['columns'][0]['content'] ?? "" ?>
                        <!-- <h2 class="text-[30px] font-[700] text-blue-main hr-line inline relative">Core Values</h2>
                        <p class="text-[16px] text-gray-500 mt-1">At DPS Eldeco, we believe that education should go beyond
                            textbooks and should be rooted in the principles of holistic development. Our core values are
                            designed to nurture not just minds, but hearts and spirits. These values guide everything we
                            do—inside the classroom and beyond..
                        </p> -->
                    </div>
                </div>
                <div class="sm:w-[50%] ">
                    <img src="<?= $missionvision_data['data']['sections'][4]['columns'][1]['image_url'] ?? "" ?>"
                        alt="<?= ms_image_alt($missionvision_data['data']['sections'][4]['columns'][1] ?? [], 'Core values') ?>">
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>
    <script>
        $('.moreless-button').click(function () {
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