<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DPS Eldeco| Transfer Certificate</title>
    <?php include "includes/head.php" ?>
</head>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative sm:top-[20px] mb-[40px] sm:mb-[120px] mx-0 sm:mx-2">
        <div class="mt-8 mx-3 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-3">
            <div class="sm:mt-10 relative">

                <h1
                    class="text-[32px] sm:hidden block font-[700] text-blue-main uppercase text-center mb-5 sm:mb-8 hr-line relative leading-9">
                    Transfer
                    <span class="sm:hidden"> <br></span> Certificate
                </h1>
                <div>

                    <div class="md:w-[100%]">
                        <h1
                            class="sm:text-[32px] sm:block hidden font-[700] text-blue-main uppercase text-center sm:mb-1 hr-line relative leading-9">
                            Transfer
                            <span class="sm:hidden"></span> Certificate
                        </h1>




                        <div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-5">
                            <form action="#" method="POST" class="sm:flex block items-center gap-5">
                                <!-- Admission No. -->
                                <div class="flex flex-col">
                                    <label for="admissionNo" class="text-gray-700">Admission No.</label>
                                    <input type="text" id="admissionNo" name="admissionNo"
                                        class="mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                        required>
                                    <p class="text-red-500 text-xs mt-1" id="admissionNoError" style="display: none;">
                                        This Admission No is required.</p>
                                </div>

                                <!-- Date of Birth -->
                                <div class="flex flex-col">
                                    <label for="dob" class="text-gray-700">Date of Birth</label>
                                    <input type="date" id="dob" name="dob"
                                        class="mt-1 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                        required>
                                    <p class="text-red-500 text-xs mt-1" id="dobError" style="display: none;">This Date
                                        of Birth is required.</p>
                                </div>

                                <!-- Search Button -->
                                <div class="mt-6">
                                    <button type="submit"
                                        class="px-3 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        Search
                                    </button>
                                </div>
                            </form>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed bottom-0 w-full">
    <?php include "includes/footer.php" ?>
    <?php include "includes/foot.php" ?>
    <script>
    // Simple form validation
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        let valid = true;

        // Validate Admission No.
        const admissionNo = document.getElementById('admissionNo');
        const admissionNoError = document.getElementById('admissionNoError');
        if (!admissionNo.value) {
            admissionNoError.style.display = 'block';
            valid = false;
        } else {
            admissionNoError.style.display = 'none';
        }

        // Validate Date of Birth
        const dob = document.getElementById('dob');
        const dobError = document.getElementById('dobError');
        if (!dob.value) {
            dobError.style.display = 'block';
            valid = false;
        } else {
            dobError.style.display = 'none';
        }

        // If form is invalid, prevent submission
        if (!valid) {
            e.preventDefault();
        }
    });
    </script>
</body>

</html>