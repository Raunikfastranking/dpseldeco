<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>

    <title>AllenHouse Bareilly| Pedagogy</title>
</head>

<body>
    <style>
    .job-opening-bg {
        position: relative;
    }

    .job-opening-bg::before {
        content: "";
        height: 100%;
        position: absolute;
        opacity: .6;
        width: 100%;
        background: #112759;
    }
    </style>
    <?php include "includes/header.php" ?>



    <div class="main relative  mb-[40px] sm:mb-[120px] ">
        <div class="bg-center flex items-center text-center h-[300px] "
            style=" background-image: url(https://res.cloudinary.com/dj7wogsju/image/upload/v1747062391/Contact_Us_Banner_APS_JHANSI_lkud0h.jpg);background-position: top;">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Pedagogy
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h1
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Pedagogy
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
                        <a href="pedagogy" class="ms-1 text-sm font-medium text-blue-main">Pedagogy</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">

            <p class="mt-2 text-gray-700">Pedagogy refers to the art and science of teaching. It encompasses the
                strategies, methods, and approaches that educators use to facilitate learning and promote student
                engagement. Pedagogy considers not just the content being taught but also how that content is delivered
                and received by learners.</p>
            <p class="mt-2 text-gray-700">The school's pedagogical approach emphasizes a blend of academic rigor,
                character development, and life skills, preparing students for the complexities of the modern world.</p>
            <p class="mt-2 text-gray-700">The pedagogy at DPS Eldeco incorporates various innovative teaching
                strategies, including:</p>
            <p class="mt-2 text-gray-700 font-[700]">Project-Based Learning:</p>
            <p class="mt-2 text-gray-700">Students engage in hands-on projects that promote collaboration and practical
                application of knowledge.</p>
            <p class="mt-2 text-gray-700 font-[700]">Experiential Learning:</p>
            <p class="mt-2 text-gray-700">Field trips, workshops, and guest lectures are integral, allowing students to
                connect classroom concepts with real-world experiences.</p>
            <p class="mt-2 text-gray-700 font-[700]">Technology Integration:</p>
            <p class="mt-2 text-gray-700">The use of digital tools and resources enhances learning experiences,
                encouraging students to become proficient in modern technologies.</p>

        </div>
    </div>
    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>
    <script>
    var glide01 = new Glide('.glide-01', {
        type: 'carousel',
        focusAt: 'center',
        perView: 3,
        autoplay: 3500,
        animationDuration: 700,
        gap: 2,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    glide01.mount();

    var glide02 = new Glide('.glide-02', {
        type: 'carousel',
        focusAt: 'center',
        perView: 3.5,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: {
            activeNav: '[&>*]:bg-slate-700',
        },
        breakpoints: {
            1024: {
                perView: 2
            },
            640: {
                perView: 1
            }
        },
    });
    glide02.mount();

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
            1024: {
                perView: 4
            },
            640: {
                perView: 1
            }
        },
    });
    glide03.mount();

    var glide04 = new Glide('.glide-04', {
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
    glide04.mount();
    </script>
</body>

</html>