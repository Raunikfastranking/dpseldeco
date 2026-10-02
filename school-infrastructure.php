<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "includes/head.php" ?>
  <title><?= $schoolinfrastructure_data['data']['title'] ?? "" ?></title>
  <meta name="description" content="<?= $schoolinfrastructure_data['data']['meta_description'] ?? "" ?>">
  <meta name="keywords" content="<?= $schoolinfrastructure_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

  <?php include "includes/header.php" ?>

  <div class="main relative mb-[40px]">
    <div class="bg-center flex items-center text-center h-[300px] brud-image"
      >
      <div>
        <h1
          class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
         <?= strip_tags($schoolinfrastructure_data['data']['sections'][0]['content_heading']) ?? "" ?>
        </h1>
      </div>

      <div class="md:w-[100%]">
        <h1
          class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
         <?= strip_tags($schoolinfrastructure_data['data']['sections'][0]['content_heading']) ?? "" ?>
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
            <p class="ms-1 text-sm font-medium text-blue-main">Mandatory Public Disclosures
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
            <a href="school-infrastructure" class="ms-1 text-sm font-medium text-blue-main"> <?= strip_tags($schoolinfrastructure_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
          </div>
        </li>
      </ol>
    </div>

    <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
      <div class="sm:mt-10 relative">
        <div class="md:w-[100%]">
          <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10">
             <?= $schoolinfrastructure_data['data']['sections'][1]['content'] ?? "" ?>
            <!-- <table class="w-full text-sm text-left rtl:text-right text-gray-700">
              <thead class="text-xs text-white uppercase bg-[#005224]">
                <tr class="text-center">
                  <th class="px-6 py-4 border">S.No</th>
                  <th class="px-6 py-4 border">Information</th>
                  <th class="px-6 py-4 border">Details</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">1</td>
                  <td class="px-6 py-2 border">Total Campus Area of the School (in sqr mtr)</td>
                  <td class="px-6 py-2 border">10945.94</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">2</td>
                  <td class="px-6 py-2 border">No. and Size of the Class Rooms (in sq ft mtr)</td>
                  <td class="px-6 py-2 border">
                    <a href="https://drive.google.com/file/d/1TwC8rbFTgUCd-QyjERWZ036esr_nKXjP/view" target="_blank"
                      class="text-[#005224] font-medium hover:underline">View</a>
                  </td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">3</td>
                  <td class="px-6 py-2 border">No. and Size of Laboratories Including Computer Labs (in sq mtr)</td>
                  <td class="px-6 py-2 border">-</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">4</td>
                  <td class="px-6 py-2 border">Internet Facility (Y/N)</td>
                  <td class="px-6 py-2 border">Yes</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">5</td>
                  <td class="px-6 py-2 border">No. of Girls Toilets</td>
                  <td class="px-6 py-2 border">10</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">6</td>
                  <td class="px-6 py-2 border">No. of Boys Toilets</td>
                  <td class="px-6 py-2 border">12</td>
                </tr>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                  <td class="px-6 py-2 border font-medium text-gray-900">7</td>
                  <td class="px-6 py-2 border">Link of YouTube Video of the Inspection of School Covering the
                    Infrastructure of the School</td>
                  <td class="px-6 py-2 border">
                    <a href="https://www.youtube.com/watch?v=odKTkekb2AA" target="_blank"
                      class="text-[#005224] font-medium hover:underline">
                      https://www.youtube.com/watch?v=odKTkekb2AA
                    </a>
                  </td>
                </tr>
              </tbody>
            </table> -->
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>

  <?php include "includes/footer.php" ?>
  <?php include "includes/foot.php" ?>

  <script>
    function toggleAccordion(index) {
      const content = document.getElementById(`content-${index}`);
      const icon = document.getElementById(`icon-${index}`);

      // SVG for Minus icon
      const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

      // SVG for Plus icon
      const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="white" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

      // Toggle the content's max-height for smooth opening and closing
      if (content.style.maxHeight && content.style.maxHeight !== '0px') {
        content.style.maxHeight = '0';
        icon.innerHTML = plusSVG;
      } else {
        content.style.maxHeight = content.scrollHeight + 'px';
        icon.innerHTML = minusSVG;
      }
    }
  </script>
</body>

</html>