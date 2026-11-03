<?php
include "includes/apis.php";

// Correct step order: API returns steps in reverse (Step 6 first), so reverse the array
$accordion_data = $process_____data['data'][0] ?? [];
$process_steps = isset($accordion_data['items']) ? array_reverse($accordion_data['items']) : [];
$process_description = $accordion_data['description'] ?? '';

// Remove debug output after verification – keep only if needed
// echo '<pre>'; print_r($process_steps); echo '</pre>';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $process_data['data']['title'] ?? "" ?></title>
    <meta name="description" content="<?= $process_data['data']['meta_description'] ?? "" ?>">
    <meta name="keywords" content="<?= $process_data['data']['meta_keywords'] ?? "" ?>">
    <?php include "includes/head.php" ?>
</head>
<style>
    /* ============================
   STEP 4 – MOBILE SCROLL FIX
   ============================ */

/* Prevent horizontal page scroll globally */
html, body {
  max-width: 100%;
  overflow-x: hidden;
}

/* Step 4 container: allow vertical scroll */
[data-tab-content="step-4"] {
  max-width: 100%;
  overflow-x: hidden;
  overflow-y: visible; /* allow vertical scrolling */
}

/* Make ONLY the table scroll horizontally */
[data-tab-content="step-4"] table {
  display: block;
  max-width: 100%;
  width: max-content;
  min-width: 100%;
  overflow-x: auto;
  overflow-y: hidden;
  -webkit-overflow-scrolling: touch;
  overscroll-behavior-x: contain; /* stop horizontal scroll chaining */
}

/* Prevent cells from expanding page width */
[data-tab-content="step-4"] th,
[data-tab-content="step-4"] td {
  white-space: nowrap;
}
    /* Force horizontal tabs to start from left + show partial next tab + kill bounce */
@media (max-width: 767px) {  /* Covers phones + small tablets */
  /* Target the green background container holding the tabs */
  .mt-10.flex.justify-center.p-8.bg-\[\#003618\].overflow-x-auto {
    justify-content: flex-start !important;  /* Start from left edge */
    padding-left: 16px !important;           /* Space from left screen edge */
    padding-right: 80px !important;          /* Extra right space: crucial so last Step 6 can scroll fully into view + shows partial next if more */
    overflow-x: auto !important;
    -webkit-overflow-scrolling: touch !important;  /* Smooth iOS scroll */
    overscroll-behavior-x: none !important;  /* Kills the rubber-band bounce on horizontal swipe */
    scrollbar-width: thin;                   /* Better scrollbar on Android/Firefox */
  }

  /* Make tabs smaller + non-shrinking on mobile */
  #tab-buttons {
    justify-content: flex-start !important;
    gap: 12px !important;                    /* Smaller gaps to fit more initially */
  }

  .tab-btn {
    padding: 8px 16px !important;            /* Tighter padding */
    font-size: 14px !important;              /* Slightly smaller text if needed */
    white-space: nowrap;
    flex: 0 0 auto !important;               /* Don't let tabs shrink/compress */
  }

  /* Visual hint: fade edges to scream "swipe me!" */
  .mt-10.flex.justify-center.p-8.overflow-x-auto {
    position: relative;
   
  }

  /* Optional: show scrollbar always on mobile for clarity */
  .mt-10.flex.justify-center.p-8.overflow-x-auto::-webkit-scrollbar {
    height: 6px;
    display: block !important;
  }
  .mt-10.flex.justify-center.p-8.overflow-x-auto::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,0.5);
    border-radius: 3px;
  }
}
</style>

<body>

    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <div>
                <h1
                    class="text-[32px] sm:hidden block font-[700] text-white text-left pl-4 mb-5 sm:mb-8 hr-line relative leading-9">
                    Process
                </h1>
            </div>

            <div class="md:w-[100%]">
                <h2
                    class="sm:text-[32px] sm:block hidden font-[700] text-white text-left sm:mb-1 hr-line relative leading-9 ml-[7rem]">
                    Process
                </h2>
            </div>
        </div>

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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Admission
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
                        <p class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Admission Overview
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
                        <a href="process" class="ms-1 text-[10px] sm:text-[16px] font-medium text-blue-main">Process</a>
                    </div>
                </li>
            </ol>
        </div>

        <div
            class="custom-container-1280 mx-3 sm:py-10 py-0 sm:p-20 p-0 space-y-10 text-gray-600 md:mx-auto">
            <div>
                <?= $process_description ?>
            </div>
            <div class="mt-10 flex justify-center overflow-x-auto  p-8 bg-[#003618] bg-no-repeat md:h-[140px]">
                <ul class="flex gap-8 items-center justify-center pb-2" id="tab-buttons">
                    <li class="tab-btn active text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                        data-tab="step-1">Step 1</li>
                    <li class="tab-btn text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                        data-tab="step-2">Step 2</li>
                    <li class="tab-btn text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                        data-tab="step-3">Step 3</li>
                    <li class="tab-btn text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                        data-tab="step-4">Step 4</li>
                    <li class="tab-btn text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                        data-tab="step-5">Step 5</li>
                    <li class="tab-btn text-[#fff] border-[1px] border-[#fff] p-[8px] px-6 cursor-pointer whitespace-nowrap rounded-[5px]"
                        data-tab="step-6">Step 6</li>
                </ul>
            </div>
            <!-- Step 1 -->
            <div class="tab-content" data-tab-content="step-1">
                <?= $process_steps[0]['title'] ?? '' ?>
                <?= $process_steps[0]['content'] ?? '' ?>
            </div>

            <!-- Step 2 -->
            <div class="tab-content hidden" data-tab-content="step-2">
                <?= $process_steps[1]['title'] ?? '' ?>
                <?= $process_steps[1]['content'] ?? '' ?>
                <div
                    class="mt-10 w-full max-w-[1024px] mx-auto px-4 sm:px-5">
                    <div class="relative">
                        <h2 class="process-enquiry-title text-center">
                            Enquiry Form | Session 2027–2028
                        </h2>
                        <div class="mt-5">
                            <div id="ee-form-process" style="width: 100%; max-width: 800px; margin: 0 auto; box-sizing: border-box;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="tab-content hidden" data-tab-content="step-3">
                <?= $process_steps[2]['title'] ?? "" ?>
                <?= $process_steps[2]['content'] ?? "" ?>
            </div>

            <!-- Step 4 -->
            <div class="tab-content hidden" data-tab-content="step-4">
                <?= $process_steps[3]['title'] ?? "" ?>
                <?= $process_steps[3]['content'] ?? "" ?>
            </div>

            <!-- Step 5 -->
            <div class="tab-content hidden" data-tab-content="step-5">
                <?= $process_steps[4]['title'] ?? "" ?>
                <?= $process_steps[4]['content'] ?? "" ?>
            </div>

            <!-- Step 6 -->
            <div class="tab-content hidden" data-tab-content="step-6">
                <?= $process_steps[5]['title'] ?? "" ?>
                <?= $process_steps[5]['content'] ?? "" ?>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>
    </div>
    <script>
        const tabButtons = document.querySelectorAll(".tab-btn");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach(button => {
            button.addEventListener("click", () => {
                // Remove active from all buttons
                tabButtons.forEach(btn => btn.classList.remove("active"));
                // Hide all tab contents
                tabContents.forEach(content => content.classList.add("hidden"));

                // Add active class to clicked tab
                button.classList.add("active");
                // Show corresponding content
                const tab = button.getAttribute("data-tab");
                document.querySelector(`[data-tab-content="${tab}"]`).classList.remove("hidden");
            });
        });
    </script>

    <script>
        if (document.getElementById("AdmissionForm")) {
        (function() {
            function getParam(name) {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get(name);
            }

            let source = getParam("utm_source") || document.referrer || "";
            console.log("Initial Source:", source);

            const src = source.toLowerCase();

            // Determine the correct source
            if (!source) {
                source = "Website";
            } else if (src.includes("google")) {
                source = "Google-Ads by Agency";
                console.log("Referrer is Google, setting source to 'Google-Ads by Agency'");
            } else if (src.includes("facebook") || src.includes("meta")) {
                source = "Facebook by Agency";
            } else if (src.includes("instagram") || src.includes("ig")) {
                source = "Instagram by Agency";
            } else {
                // Any unknown platform → set to "Others"
                source = "Others";
                console.log("Unrecognized platform, setting source to 'Others'");
            }

            // Save in sessionStorage only if not already saved
            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }

            const finalSource = sessionStorage.getItem("leadSource");
            const sourceInput = document.getElementById("source");

            if (sourceInput) {
                sourceInput.value = finalSource;
            }

            console.log("Captured Source:", finalSource);
        })();


        // Validation regex patterns
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        // Error elements
        const studentError = document.getElementById("astudent-error");
        const parentError = document.getElementById("aparent-error");
        const mobileError = document.getElementById("amobile-error");
        const emailError = document.getElementById("aemail-error");
        const pincodeError = document.getElementById("apincode-error");


        document.getElementById("astudent_name").addEventListener("input", function() {
            studentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
        });

        document.getElementById("aparent_name").addEventListener("input", function() {
            parentError.classList.toggle("hidden", !this.value || nameRegex.test(this.value));
        });

        document.getElementById("amobile").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 10);
            mobileError.classList.toggle("hidden", !this.value || mobileRegex.test(this.value));
        });

        document.getElementById("aemail").addEventListener("input", function() {
            this.value = this.value.toLowerCase();
            emailError.classList.toggle("hidden", !this.value || emailRegex.test(this.value));
        });

        document.getElementById("apincode").addEventListener("input", function() {
            this.value = this.value.replace(/\D/g, '').slice(0, 6);
            pincodeError.classList.toggle("hidden", !this.value || pincodeRegex.test(this.value));
        });

        // Submit Validation
        document.getElementById("AdmissionForm").addEventListener("submit", function(e) {
            e.preventDefault();
            const AsubmitBtn = document.getElementById("AsubmitBtn");
            AsubmitBtn.disabled = true;
            AsubmitBtn.textContent = "Submitting...";
            // Inputs
            const agrade = document.getElementById("agrade").value.trim();
            const astudent_name = document.getElementById("astudent_name").value.trim();
            const aparent_name = document.getElementById("aparent_name").value.trim();
            const amobile = document.getElementById("amobile").value.trim();
            const aemail = document.getElementById("aemail").value.trim();
            const acity = document.getElementById("acity").value.trim();
            const apincode = document.getElementById("apincode").value.trim();
            const source = sessionStorage.getItem("leadSource") || "Website";
            const asession = document.getElementById("asession").value.trim();

            let isValid = true;

            if (!nameRegex.test(astudent_name)) {
                studentError.textContent = "Only letters and spaces allowed.";
                isValid = false;
            }

            if (!nameRegex.test(aparent_name)) {
                parentError.textContent = "Only letters and spaces allowed.";
                isValid = false;
            }

            if (!mobileRegex.test(amobile)) {
                mobileError.classList.remove("hidden");
                isValid = false;
            }

            if (!emailRegex.test(aemail)) {
                emailError.classList.remove("hidden");
                isValid = false;
            }

            if (!pincodeRegex.test(apincode)) {
                pincodeError.classList.remove("hidden");
                isValid = false;
            }


            if (!isValid) return; // STOP submission if any field is invalid


            if (!isValid) {
                AsubmitBtn.disabled = false;
                AsubmitBtn.textContent = "Submit";
                return;
            }

            // API Payload
            const payload = {
                session: asession,
                grade: agrade,
                name: astudent_name,
                parent_name: aparent_name,
                phone: amobile,
                email: aemail,
                city: acity,
                pincode: apincode,
                source: source,
                source_type: "Website",
                enquiry_type: "Digital",
                message: "This Message From DPS Bareilly Website",
                subject: "Admission Enquiry",
                branch_id: 2,
                school_id: 1,
                language_id: 1
            };

            fetch(`proxy/admission-proxy`, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(payload)
                })
                .then(response => {
                    if (!response.ok) throw new Error("Error: " + response.statusText);
                    return response.json();
                })
                .then(data => {
                    document.getElementById("AdmissionFormPopup").classList.remove("hidden");
                    setTimeout(() => {
                        document.getElementById("AdmissionFormPopup").classList.add("hidden");
                    }, 3000);
                    document.getElementById("AdmissionForm").reset();
                })
                .catch(error => {
                    alert("There was an error submitting the form.");
                    console.error("Error:", error);
                })
                .finally(() => {
                    // Re-enable button
                    AsubmitBtn.disabled = false;
                    AsubmitBtn.textContent = "Submit";
                });
        });
        }
    </script>

    <?php include "includes/foot.php" ?>
</body>

</html>