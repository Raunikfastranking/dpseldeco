   <div class="mt-10">
       <div class="grid 2xl:grid-cols-3 xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-2 grid-cols-1 gap-5 md:mt-10 mt-5">
           <?php foreach ($data['resolved_content']['media'] as $items) { ?>
               <div class="relative hidden">
                   <a data-fancybox="gallery78" data-src="<?= $data['media_url'] ?? "" ?>">
                       <img src="<?= $items['media_url'] ?? "" ?>" class="w-[100%] md:h-[275px] h-[250px] object-cover rounded-[10px]" alt="<?= ms_image_alt($items, strip_tags($items['heading'] ?? 'Gallery')) ?>">
                   </a>
                   <div class="absolute bottom-[30px] left-0 right-0 p-4 text-white rounded-b-[10px] relative z-10" style="background: #003618;">
                       <div class="absolute top-[-51px] md:right-[20px] right-[5px]">
                           <div class="relative">
                               <p class="absolute md:top-[22px] top-[22px] right-[-13px] w-[100px] h-[55px] rounded-[10px] bg-[#003618] md:text-[15px] text-[13px] md:leading-[24px] leading-[18px] font-semibold text-center">
                                   16 Sep <br> 2025 </p>
                           </div>
                       </div>
                       <div class="flex items-center gap-3 border-b-[1px] border-[#e7b78a] pb-[14px]">
                           <div class="md:text-[16px] text-[14px] font-[400]">
                               Category : <span class="font-[500]">Gallery</span>
                           </div>
                           <div class="md:text-[16px] text-[14px] font-[400]">
                               Total Photo(s) : <span class="font-[500]">1</span>
                           </div>
                       </div>
                       <div class="mt-3">
                           <h2 class="md:text-[24px] text-[22px] md:leading-7 leading-7">
                               <?= strip_tags($items['heading']) ?? "No Title" ?></h2>
                           <!-- <a href="gallery-detail.php?id= " class="rounded-[20px] bg-[#096130] text-white w-[100%] block text-center h-[47px]  text-[17px] mt-[20px] transition-all hover:bg-[#c4171d] p-[10px]">
                               View More
                           </a> -->
                       </div>
                   </div>
               </div>
           <?php } ?>

           <?php
            $rawDate = !empty($data['date']) ? $data['date'] : $data['created_at'];
            $day = date("d", strtotime($rawDate));
            $year = date("Y", strtotime($rawDate));
            $month = date("M", strtotime($rawDate));
            ?>
           <div class="gallery-item w-[100%] mx-auto bg-white border border-gray-200 rounded-lg shadow hover:shadow-[rgba(0,0,0,0.15)_0px_15px_25px,rgba(0,0,0,0.05)_0px_5px_10px] transition-shadow duration-300" data-title="Encore, the Silver Jubilee celebration of DPS Eldecooooooooo">
               <a href="#">
                   <img class="rounded-t-lg w-full h-[200px] object-cover" src="<?= $data['resolved_content']['media'][0]['media_url'] ?? '' ?>" alt="<?= ms_image_alt($data['resolved_content']['media'][0] ?? [], $data['heading_link'] ?? 'Gallery Image') ?>">
               </a>
               <div class="sm:p-4 p-1 flex flex-col justify-between relative">
                   <a href="#">
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
                                   <?= strip_tags($data['title']) ?? '' ?>
                               </div>
                               <hr>
                               <div class="flex gap-2 text-[9px] text-[#3B3B3B] m-2">
                                   <div>Category: <strong><?= ucfirst($data['gallery_type']) ?></strong></div>
                                   <div>Total Photo(s): <strong><?= count($data['media'] ?? []) ?></strong></div>
                               </div>
                           </div>
                       </div>
                   </a>
                   <?php
                    $mediaList = [];
                    if (!empty($data['resolved_content']['media'])) {
                        foreach ($data['resolved_content']['media'] as $m) {
                            $mediaList[] = [
                                'type' => $m['media_type'],
                                'url'  => $m['media_url']
                            ];
                        }
                    }
                    ?>
                   <button
                       class="group py-1 px-4 sm:px-6 rounded-[10px] w-full border border-gray text-blue-main hover:text-white hover:bg-[#003618] flex gap-2 items-center justify-center mt-5 openGallery"
                       data-media='<?= json_encode($mediaList, JSON_HEX_APOS | JSON_HEX_QUOT) ?>'>
                       View More
                   </button>
               </div>
           </div>

       </div>
   </div>

   <div id="galleryModal" class="fixed inset-0 bg-black/70 hidden z-50 flex items-center justify-center">
       <div class="bg-white max-w-9xl w-full rounded-lg p-5 relative">

           <button id="closeModal" class="absolute top-3 right-4 text-2xl font-bold">
               ✕
           </button>

           <div id="modalGallery" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-6">
           </div>

       </div>
   </div>

   <script>
       document.querySelectorAll('.openGallery').forEach(btn => {
           btn.addEventListener('click', function() {
               const media = JSON.parse(this.dataset.media || '[]');
               const modal = document.getElementById('galleryModal');
               const gallery = document.getElementById('modalGallery');

               gallery.innerHTML = '';

               media.forEach(item => {
                   if (item.type === 'image') {
                       const img = document.createElement('img');
                       img.src = item.url;
                       img.className = 'w-full   object-cover rounded-lg';
                       gallery.appendChild(img);
                   }
               });

               modal.classList.remove('hidden');
           });
       });

       document.getElementById('closeModal').addEventListener('click', () => {
           document.getElementById('galleryModal').classList.add('hidden');
       });

       document.getElementById('galleryModal').addEventListener('click', e => {
           if (e.target.id === 'galleryModal') {
               e.target.classList.add('hidden');
           }
       });
   </script>