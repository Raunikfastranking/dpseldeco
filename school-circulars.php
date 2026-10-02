<?php
include "includes/apis.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= htmlspecialchars($schoolcirculars_data['data']['title'] ?? "School Circulars") ?></title>
    <meta name="description" content="<?= htmlspecialchars($schoolcirculars_data['data']['meta_description'] ?? "") ?>">
    <meta name="keywords" content="<?= htmlspecialchars($schoolcirculars_data['data']['meta_keywords'] ?? "") ?>">

    <!-- Inline CSS to fix table overflow, centering & responsiveness -->
    <style>
        /* Wrapper for wide CMS content (especially tables) */
        .cms-content-wrapper {
            overflow-x: auto;
            margin: 2rem auto;
            max-width: 100%;
            padding: 0 0.5rem;
        }

        /* Style tables from CMS */
        .page-section table {
            width: auto !important;
            min-width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            table-layout: auto;
            font-size: 0.95rem;
        }

        .page-section th,
        .page-section td {
            padding: 12px 14px;
            border: 1px solid #d1d5db;
            text-align: center;
            vertical-align: middle;
            white-space: nowrap; /* prevents awkward wrapping in narrow cells */
        }

        .page-section th {
            background-color: #166534; /* dark green to match your header */
            color: white;
            font-weight: 600;
            text-transform: uppercase;
        }

        .page-section tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .page-section tr:hover {
            background-color: #f3f4f6;
        }

        /* Better spacing for mobile */
        @media (max-width: 640px) {
            .page-section th,
            .page-section td {
                padding: 10px 8px;
                font-size: 0.875rem;
            }
        }

        /* Prevent body horizontal scroll */
        body, .main {
            overflow-x: hidden;
        }
    </style>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    <?= strip_tags($schoolcirculars_data['data']['sections'][0]['content_heading'] ?? "") ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= strip_tags($schoolcirculars_data['data']['sections'][0]['content_heading'] ?? "") ?>
                </h2>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Academics</p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="school-circulars" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">
                            <?= strip_tags($schoolcirculars_data['data']['sections'][0]['content_heading'] ?? "Circulars") ?>
                        </a>
                    </div>
                </li>
            </ol>
        </div>

        <!-- Main content area -->
        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0">
            <section class="page-section why-choose-allen-kids Event">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title-bottom-line"></div>
                        </div>
                    </div>

                    <!-- Wrap CMS content (table) in responsive + centered container -->
                    <div class="cms-content-wrapper">
                        <?= $schoolcirculars_data['data']['sections'][1]['content'] ?? '<p class="text-center text-gray-600 py-8">No circulars or datesheet available at the moment.</p>' ?>
                    </div>

                </div>
            </section>
        </div>

    </div>

    <?php include "includes/footer.php" ?>

    <?php include "includes/foot.php" ?>

    <script>
    // Your existing jQuery more/less toggle
    $('.moreless-button').click(function() {
        const moreText = $(this).siblings('.moretext');
        $('.moretext').not(moreText).slideUp();
        $('.moreless-button').not(this).text('Read more');
        moreText.slideToggle();
        if ($(this).text() == "Read more") {
            $(this).text("Read less");
        } else {
            $(this).text("Read more");
        }
    });

    // Your Glide carousels (unchanged)
    var aboutCarousel = new Glide('.about-carousel', {
        type: 'carousel',
        focusAt: 1,
        perView: 4,
        autoplay: 3500,
        animationDuration: 700,
        gap: 24,
        classes: { activeNav: '[&>*]:bg-slate-700' },
        breakpoints: { 1024: { perView: 4 }, 640: { perView: 1 } }
    }).mount();

    var aboutCarousel2 = new Glide('.about-carousel2', { /* ... same as before ... */ }).mount();
    var glide03 = new Glide('.glide-03', { /* ... same ... */ }).mount();
    var latestNews2 = new Glide('.latestNews2', { /* ... same ... */ }).mount();
    </script>

</body>
</html>