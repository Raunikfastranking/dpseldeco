<?php
include "includes/apis.php";

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title><?= $primarywing_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $primarywing_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $primarywing_data['data']['meta_keywords'] ?? "" ?>">
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1 class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                     <?= strip_tags($primarywing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2 class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                     <?= strip_tags($primarywing_data['data']['sections'][0]['content_heading']) ?? "" ?>
                </h2>
            </div>
        </div>

        <div class="flex m-5 overflow-x-auto" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="index" class="inline-flex items-center text-[10px] sm:text-[16px] font-medium text-blue-main">
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">About Us
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Faculty List
                        </p>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-blue-main mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
                        </svg>
                        <a href="primary-wing-faculty" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main"> <?= strip_tags($primarywing_data['data']['sections'][0]['content_heading']) ?? "" ?></a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 mx-3 sm:py-10 py-0 sm:p-20 p-0">
            <div class="flex justify-center w-full">
                <div class="overflow-x-auto w-full max-w-6xl bg-white rounded-md shadow-lg">
                    <?= $primarywing_data['data']['sections'][1]['content'] ?? "" ?>
                    
                    <!-- <table class="w-full table-auto text-[10px] sm:text-[16px] md:text-base text-left border border-gray-300">
                        <thead class="bg-gray-100 text-gray-700 font-semibold">
                            <tr>
                                <th class="px-4 py-3 border border-gray-300">S.No.</th>
                                <th class="px-4 py-3 border border-gray-300">Name</th>
                                <th class="px-4 py-3 border border-gray-300">Designation</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            
                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <td class="px-4 py-2 border">Ruchika Saxena</td>
                                <td class="px-4 py-2 border">I-II wing coordinator</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">2</td>
                                <td class="px-4 py-2 border">Bhagyashree Pandey</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">3</td>
                                <td class="px-4 py-2 border">Rajshree Srivastava</td>
                                <td class="px-4 py-2 border">Class rep grade I</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">4</td>
                                <td class="px-4 py-2 border">Saumya Singh</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">5</td>
                                <td class="px-4 py-2 border">Riya Rajwani</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">6</td>
                                <td class="px-4 py-2 border">Gurmeet Singh</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">7</td>
                                <td class="px-4 py-2 border">Sakshi Jaiswal</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">8</td>
                                <td class="px-4 py-2 border">Sambhavi Singh</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">9</td>
                                <td class="px-4 py-2 border">Saba Afaq</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">10</td>
                                <td class="px-4 py-2 border">Rekha Mishra</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">11</td>
                                <td class="px-4 py-2 border">Rupa Mukherjee</td>
                                <td class="px-4 py-2 border">Class Rep II</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">12</td>
                                <td class="px-4 py-2 border">Shweta Shukla</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">13</td>
                                <td class="px-4 py-2 border">Sampada Tiwari</td>
                                <td class="px-4 py-2 border">PRT (I & II)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">14</td>
                                <td class="px-4 py-2 border">Puja Kumari</td>
                                <td class="px-4 py-2 border">SSFL teacher</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">15</td>
                                <td class="px-4 py-2 border">Rinky Gupta</td>
                                <td class="px-4 py-2 border">PRT (I & II) Computer</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">16</td>
                                <td class="px-4 py-2 border">Neelima Yadav</td>
                                <td class="px-4 py-2 border">Primary wing coordinator (III to V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">17</td>
                                <td class="px-4 py-2 border">Suchi Naithani</td>
                                <td class="px-4 py-2 border">Class Rep III</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">18</td>
                                <td class="px-4 py-2 border">Urvashi Yadav</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">19</td>
                                <td class="px-4 py-2 border">Heena Khan</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">20</td>
                                <td class="px-4 py-2 border">Neha Rauf</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">21</td>
                                <td class="px-4 py-2 border">Samridhi Mehrotra</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">22</td>
                                <td class="px-4 py-2 border">Charu Srivastava</td>
                                <td class="px-4 py-2 border">Class Rep IV</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">23</td>
                                <td class="px-4 py-2 border">Geetika kakkar</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">24</td>
                                <td class="px-4 py-2 border">Avneet Kaur</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">25</td>
                                <td class="px-4 py-2 border">Jagmohan Kaur</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">26</td>
                                <td class="px-4 py-2 border">Evengeline</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">27</td>
                                <td class="px-4 py-2 border">Anu Tewari</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">28</td>
                                <td class="px-4 py-2 border">Kavita Sen</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">29</td>
                                <td class="px-4 py-2 border">Sheelu Singh</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">30</td>
                                <td class="px-4 py-2 border">Arjita Saxena</td>
                                <td class="px-4 py-2 border">Class Rep V</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">31</td>
                                <td class="px-4 py-2 border">Shweta Ojha</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">32</td>
                                <td class="px-4 py-2 border">Namita Yadav</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">33</td>
                                <td class="px-4 py-2 border">Bhawana Pandey</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">34</td>
                                <td class="px-4 py-2 border">Pritha Tarafdar</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">35</td>
                                <td class="px-4 py-2 border">Preeti Sharma</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">36</td>
                                <td class="px-4 py-2 border">Poonam Pandey</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">37</td>
                                <td class="px-4 py-2 border">Deepali Shukla</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">38</td>
                                <td class="px-4 py-2 border">Shivani Gaur</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">39</td>
                                <td class="px-4 py-2 border">Shalini Verma</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-2 border">40</td>
                                <td class="px-4 py-2 border">Deboshree</td>
                                <td class="px-4 py-2 border">PRT (III-V)</td>
                            </tr>
                        </tbody>
                    </table> -->
                </div>
            </div>
        </div>

    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <?php include "includes/foot.php" ?>

</body>

</html>