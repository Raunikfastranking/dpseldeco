<?php
include "includes/apis.php";

$gallery = null;
$id = $_GET['id'] ?? null;

if ($id !== null) {
    // Look in photo_gallery_data first
    if (!empty($photo_gallery_data['data']) && is_array($photo_gallery_data['data'])) {
        foreach ($photo_gallery_data['data'] as $item) {
            if ((string)($item['id'] ?? '') === (string)$id) {
                $gallery = $item;
                break;
            }
        }
    }

    // Then in achievement_data if not found
    if ($gallery === null && !empty($achievement_data['data']) && is_array($achievement_data['data'])) {
        foreach ($achievement_data['data'] as $item) {
            if ((string)($item['id'] ?? '') === (string)$id) {
                $gallery = $item;
                break;
            }
        }
    }
}

// Fallbacks
$page_title    = $gallery['heading'] ?? $gallery['title'] ?? $gallery['data']['title'] ?? 'Photo Gallery';
$description   = $gallery['content'] ?? $gallery['description'] ?? $gallery['data']['content'] ?? 'No description available.';
$meta_desc     = $gallery['meta_description'] ?? $gallery['data']['meta_description'] ?? '';
$meta_keywords = $gallery['meta_keywords'] ?? $gallery['data']['meta_keywords'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_desc) ?>">
    <meta name="keywords" content="<?= htmlspecialchars($meta_keywords) ?>">
    <?php include "includes/head.php"; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <!-- PDF Preview Styles (consistent with other pages) -->
    <style>
        .pdf-preview {
            height: 250px;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }
        .pdf-preview:hover {
            background: #e9ecef;
            box-shadow: 0 6px 16px rgba(0,0,0,0.12);
            transform: translateY(-2px);
        }
        .pdf-icon {
            width: 80px;
            height: 100px;
            background: #dc3545;
            color: white;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.3rem;
            margin-bottom: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        .pdf-label {
            font-size: 0.95rem;
            color: #4b5563;
            text-align: center;
            padding: 0 12px;
            font-weight: 500;
        }
    </style>
</head>

<body>

    <?php include "includes/header.php"; ?>

    <div class="main relative mb-[120px]">

        <!-- Banner -->
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div class="w-full">
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 hr-line relative leading-9">
                    <?= htmlspecialchars($page_title) ?>
                </h1>
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    <?= htmlspecialchars($page_title) ?>
                </h2>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="flex m-5" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center sm:text-sm text-xs font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-xs sm:text-sm font-medium text-blue-main">Media & Events</span>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="photo-gallery.php" class="ms-1 sm:text-sm text-xs font-medium text-blue-main">
                            Photo Gallery
                        </a>
                    </div>
                </li>
            </ol>
        </div>

        <!-- Content -->
        <div class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3 mx-3 mt-8">
            <?php if ($gallery === null): ?>
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-gray-700 mb-4">Gallery Not Found</h2>
                    <p class="text-gray-500 mb-8">The requested gallery could not be found.</p>
                    <a href="photo-gallery.php" class="inline-block px-8 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition">
                        Back to Photo Galleries
                    </a>
                </div>
            <?php else: ?>

                <!-- Description -->
                <div class="text-center mb-12">
                    <h2 class="text-[24px] font-[600] mb-4">Description</h2>
                   <div class="text-gray-600 max-w-4xl mx-auto leading-relaxed">
    <?= $description ?>
</div>
                </div>

                <!-- Media Grid -->
                <?php if (!empty($gallery['media']) && is_array($gallery['media'])): ?>
                    <div id="photoGallerys" class="grid gap-4 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                        <?php foreach ($gallery['media'] as $media): 
                            $url = $media['media_url'] ?? '';
                            $ext = strtolower(pathinfo($url, PATHINFO_EXTENSION));
                            $is_pdf = ($ext === 'pdf');
                        ?>
                            <div class="media-item group">
                                <?php if ($is_pdf): ?>
                                    <a href="<?= htmlspecialchars($url) ?>" target="_blank" class="block no-fancybox">
                                        <div class="pdf-preview">
                                            <div class="pdf-icon">PDF</div>
                                            <div class="pdf-label">View PDF Document</div>
                                        </div>
                                    </a>
                                <?php else: ?>
                                    <a href="<?= htmlspecialchars($url) ?>" 
                                       data-fancybox="gallery" 
                                       data-caption="<?= htmlspecialchars($page_title) ?>">
                                        <img src="<?= htmlspecialchars($url) ?>" 
                                             alt="<?= ms_image_alt($media, 'Gallery media') ?>" 
                                             class="rounded-lg shadow-md w-full h-[250px] object-cover transition-transform duration-300 group-hover:scale-[1.03]">
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <div class="text-center py-16 text-gray-500 text-lg">
                        No media files available in this gallery.
                    </div>
                <?php endif; ?>

            <?php endif; ?>
        </div>

    </div>

    <?php include "includes/footer.php"; ?>
    <?php include "includes/foot.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        // Bind only to image gallery items
        Fancybox.bind('[data-fancybox="gallery"]', {
            Thumbs: { showOnStart: false },
            Images: { initialSize: "fit" }
        });

        // Optional global config
        Fancybox.bind("[data-fancybox]", {
            loop: false,
            protect: true
        });
    </script>

</body>
</html>