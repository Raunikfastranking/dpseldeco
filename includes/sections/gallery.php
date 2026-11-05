   <?php
    $gallery      = $data['resolved_content'] ?? [];
    $mediaItems   = $gallery['media'] ?? [];
    $galleryId    = $gallery['id'] ?? '';
    $galleryTitle = $gallery['gallery_title'] ?? $gallery['heading'] ?? $data['title'] ?? '';
    $galleryType  = $gallery['gallery_type'] ?? 'gallery';
    $detailUrl    = 'gallery-detail?id=' . urlencode((string) $galleryId);

    $coverImage = null;
    foreach ($mediaItems as $m) {
        if (($m['media_type'] ?? '') === 'image' && !empty($m['media_url'])) {
            $coverImage = $m['media_url'];
            break;
        }
    }

    $rawDate = !empty($gallery['date']) ? $gallery['date'] : ($gallery['created_at'] ?? '');
    $day     = $rawDate ? date("d", strtotime($rawDate)) : '';
    $month   = $rawDate ? date("M", strtotime($rawDate)) : '';
    $year    = $rawDate ? date("Y", strtotime($rawDate)) : '';
    ?>
   <div class="mt-10">
       <div class="grid 2xl:grid-cols-3 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 md:mt-10 mt-5">
           <div class="gallery-item w-[100%] mx-auto bg-white border border-gray-200 rounded-lg shadow hover:shadow-[rgba(0,0,0,0.15)_0px_15px_25px,rgba(0,0,0,0.05)_0px_5px_10px] transition-shadow duration-300">
               <a href="<?= htmlspecialchars($detailUrl) ?>" target="_blank" rel="noopener">
                   <?php if ($coverImage): ?>
                       <img class="rounded-t-lg w-full h-[200px] object-cover" src="<?= htmlspecialchars($coverImage) ?>" alt="<?= ms_image_alt($mediaItems[0] ?? [], $galleryTitle ?: 'Gallery Image') ?>">
                   <?php else: ?>
                       <div class="rounded-t-lg w-full h-[200px] bg-gray-200 flex items-center justify-center text-gray-500">No Image</div>
                   <?php endif; ?>
               </a>
               <div class="sm:p-4 p-1 flex flex-col justify-between relative">
                   <a href="<?= htmlspecialchars($detailUrl) ?>" target="_blank" rel="noopener">
                       <div class="flex gap-4">
                           <div class="w-[30%]">
                               <div class="bg-blue-main text-white text-center rounded-t-lg p-1 font-[700] text-[18px]">
                                   <?= $year ?>
                               </div>
                               <div class="text-center font-[700] text-[24px] text-[#D9A414] rounded-b-lg border border-gray-300">
                                   <?= $day ?><br>
                                   <span class="text-[#223B71] text-[14px]"><?= $month ?></span>
                               </div>
                           </div>

                           <div class="w-[70%]">
                               <div class="text-blue-main text-[1rem] font-[700] m-2 line-clamp-2">
                                   <?= htmlspecialchars($galleryTitle) ?>
                               </div>
                               <hr>
                               <div class="flex gap-2 text-[9px] text-[#3B3B3B] m-2">
                                   <div>Category: <strong><?= htmlspecialchars(ucfirst($galleryType)) ?></strong></div>
                                   <div>Total Photo(s): <strong><?= count($mediaItems) ?></strong></div>
                               </div>
                           </div>
                       </div>
                   </a>
                   <a href="<?= htmlspecialchars($detailUrl) ?>" target="_blank" rel="noopener"
                      class="group py-1 px-4 sm:px-6 rounded-[10px] w-full border border-gray text-blue-main hover:text-white hover:bg-[#003618] flex gap-2 items-center justify-center mt-5">
                       View More
                   </a>
               </div>
           </div>

       </div>
   </div>
