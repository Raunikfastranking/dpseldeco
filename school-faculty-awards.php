<?php
include "includes/apis.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= htmlspecialchars($schoolfaculty_data['data']['title'] ?? "School Faculty Awards") ?></title>
    <meta name="description" content="<?= htmlspecialchars($schoolfaculty_data['data']['meta_description'] ?? "") ?>">
    <meta name="keywords" content="<?= htmlspecialchars($schoolfaculty_data['data']['meta_keywords'] ?? "") ?>">
    <style>
        .pdf-preview-card {
            height: 200px;
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            border-radius: 8px 8px 0 0;
        }
        .pdf-preview-card:hover { background: #e9ecef; }
    </style>
</head>
<body>

<?php include "includes/header.php" ?>

<div class="main relative mb-[120px]">
    <div class="bg-center flex items-center text-center h-[300px] brud-image">
        <div class="w-full">
            <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                <?= htmlspecialchars(strip_tags($schoolfaculty_data['data']['sections'][0]['content_heading'] ?? 'School Faculty Awards')) ?>
            </h1>
            <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                <?= htmlspecialchars(strip_tags($schoolfaculty_data['data']['sections'][0]['content_heading'] ?? 'School Faculty Awards')) ?>
            </h2>
        </div>
    </div>

    <div class="flex m-5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
            <li class="inline-flex items-center">
                <a href="/" class="sm:text-sm text-xs font-medium text-blue-main">Home</a>
            </li>
            <li><span class="text-blue-main text-xs sm:text-sm mx-1">›</span></li>
            <li><span class="text-blue-main text-xs sm:text-sm">Awards</span></li>
            <li><span class="text-blue-main text-xs sm:text-sm mx-1">›</span></li>
            <li><span class="text-blue-main text-xs sm:text-sm">Awards and Accolades</span></li>
            <li><span class="text-blue-main text-xs sm:text-sm mx-1">›</span></li>
            <li>
                <a href="school-faculty-awards.php" class="sm:text-sm text-xs font-medium text-blue-main">
                    <?= htmlspecialchars(strip_tags($schoolfaculty_data['data']['sections'][0]['content_heading'] ?? 'School Faculty Awards')) ?>
                </a>
            </li>
        </ol>
    </div>

    <div class="mt-8 mx-3 sm:mx-auto sm:px-5 px-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px]">
        <?= $schoolfaculty_data['data']['sections'][1]['content'] ?? '<p class="text-center text-gray-600">No introductory content available.</p>' ?>
    </div>

    <div class="mt-12 mx-3 sm:mx-auto sm:px-5 px-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px]">
        <div class="relative mb-10">
            <div class="tabs">
                <div class="flex items-center gap-2 sm:justify-between flex-wrap">
                    <?php include __DIR__ . '/includes/gallery-year-toolbar.php'; ?>
                </div>

                <section id="section1" class="tab-panel mt-5" role="tabpanel">
                    <div id="galleryGrids" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4"></div>

                    <div id="facultyPagination" class="flex justify-center items-center gap-2 mt-8">
                        <button id="facultyPrevBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">Previous</button>
                        <div id="facultyPageNumbers" class="flex gap-1"></div>
                        <button id="facultyNextBtn" class="px-3 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 disabled:opacity-50 disabled:cursor-not-allowed">Next</button>
                    </div>

                    <p id="noResults" class="hidden text-center text-gray-500 mt-4 text-sm sm:text-base">No matching faculty awards found.</p>
                </section>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>
<?php include "includes/foot.php" ?>

<?php
$galleryGridConfig = [
    'galleryType' => 'achievements',
    'subType' => 'school_faculty',
    'prevBtnId' => 'facultyPrevBtn',
    'nextBtnId' => 'facultyNextBtn',
    'pageNumbersId' => 'facultyPageNumbers',
    'paginationId' => 'facultyPagination',
    'emptyMessage' => 'No school faculty awards for this year.',
    'searchEmptyMessage' => 'No matching faculty awards found.',
    'pdfLabel' => 'Award Document',
    'mediaCountLabel' => 'Total Items',
];
include __DIR__ . '/includes/gallery-grid-init.php';
?>

</body>
</html>
