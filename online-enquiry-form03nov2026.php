<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/head.php" ?>
    <title>DPS Eldeco | Online Enquiry Form</title>
</head>
<body>
    <?php include "includes/header.php" ?>

    <div class="main relative">
        <div class="bg-center flex items-center text-center h-[300px] brud-image">
            <h1 class="sm:text-[32px] text-[28px] font-[700] text-white text-left ml-4 sm:ml-[7rem] hr-line relative leading-9">
                Online Enquiry Form
            </h1>
        </div>

        <div class="sm:mt-20 mt-10 mx-4 2xl:w-[1280px] lg:w-[1024px] md:w-[767px] sm:w-[640px] sm:mx-auto sm:px-5 px-4">
            <div class="relative">
                <h2 class="text-center sm:text-[32px] text-[28px] font-[700] text-blue-main leading-9">
                    Enquiry Form | Session 2026–2027
                </h2>

                <div class="my-10">
                    <form id="AdmissionForm" method="post">
                        <div class="mt-4">
                            <select name="session" required id="asession" class="w-full border border-gray-300 p-2 rounded-md text-gray-500">
                                <option value="" disabled selected>Enquiry For Session</option>
                                <?php
                                $sessions = include "includes/session-api.php";
                                foreach ($sessions as $item):
                                    $sessionName = trim($item['session'] ?? '');
                                    if ($sessionName === '') continue; ?>
                                    <option value="<?= htmlspecialchars($sessionName) ?>"><?= htmlspecialchars($sessionName) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <select name="class-selection" id="agrade" required class="w-full border border-gray-300 p-[11px] rounded-md text-[#808080cc]">
                                <option value="" disabled selected>Select Grade</option>
                                <?php
                                $grades = include 'includes/grade-api.php';
                                $uniqueGrades = array_unique(array_column($grades, 'grades'));

                                // Desired order for DPS Eldeco
                                $gradeOrder = [
                                    'P.G', 'Nursery', 'Prep',
                                    'I', 'II', 'III', 'IV', 'V',
                                    'VI', 'VII', 'VIII', 'IX',
                                    'X', 'XI', 'XII'
                                ];

                                // Sort the unique grades according to $gradeOrder
                                usort($uniqueGrades, function ($a, $b) use ($gradeOrder) {
                                    $posA = array_search($a, $gradeOrder);
                                    $posB = array_search($b, $gradeOrder);
                                    // Put grades not in the order list at the end
                                    $posA = ($posA === false) ? 999 : $posA;
                                    $posB = ($posB === false) ? 999 : $posB;
                                    return $posA - $posB;
                                });

                                foreach ($uniqueGrades as $gradeName):
                                ?>
                                    <option value="<?= htmlspecialchars($gradeName) ?>"><?= htmlspecialchars($gradeName) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="astudent_name" placeholder="Student Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <span id="astudent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="aparent_name" placeholder="Parents Name" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aparent-error" class="text-red-500 text-sm mt-1 hidden">Only letters and spaces allowed.</span>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="amobile" placeholder="Mobile Number" maxlength="10" class="w-full border border-gray-300 p-[11px] rounded-md outline-none" required>
                            <div id="amobile-error" class="text-red-500 text-sm mt-1 hidden">Please enter valid phone number</div>
                        </div>

                        <div class="mt-4">
                            <input type="email" id="aemail" placeholder="Email" class="w-full border border-gray-300 p-[11px] rounded-md outline-none">
                            <span id="aemail-error" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address.</span>
                        </div>

                        <div class="mt-4 relative customSelect" id="cityWrapper">
                            <select id="acity" name="city" class="hidden" required>
                                <option value="">Select City</option>
                                <?php
                                $cities = include 'includes/get-city.php';
                                foreach ($cities as $city): ?>
                                    <option value="<?= htmlspecialchars($city['name']) ?>"><?= htmlspecialchars($city['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div id="cityTrigger" class="border border-gray-300 p-[11px] rounded-md bg-white cursor-pointer flex justify-between items-center">
                                <span class="selected-text text-[#808080cc]">Select City</span>
                                <span>▼</span>
                            </div>
                            <div id="cityDropdown" class="absolute mt-1 border border-gray-300 rounded-md bg-white shadow-md hidden z-50 w-full">
                                <input type="text" id="citySearch" placeholder="Search..." class="w-full p-2 border-b border-gray-300 outline-none">
                                <ul id="cityList" class="max-h-48 overflow-y-auto"></ul>
                            </div>
                        </div>

                        <div class="mt-4">
                            <input type="text" id="apincode" placeholder="Pincode" class="w-full border border-gray-300 p-[11px] rounded-md" maxlength="6" required>
                            <span id="apincode-error" class="text-red-500 text-sm hidden">Please enter a valid Pincode.</span>
                        </div>

                        <div class="mt-4 flex items-center gap-2">
                            <input type="checkbox" id="terms" required>
                            <label for="terms">I agree to Terms and Conditions.</label>
                        </div>

                        <input type="hidden" id="source" name="source">
                        
                        <div id="successPopup" class="hidden px-4 py-2 mb-5 text-white bg-green-500 rounded text-center">
                            Form submitted successfully!
                        </div>

                        <div class="my-4">
                            <button type="submit" id="AsubmitBtn" class="p-4 bg-blue-main w-full text-white font-semibold text-[18px] rounded hover:bg-red-500 transition">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "includes/footer.php" ?>

    <script>
        // ==================== CITY DROPDOWN ====================
        const trigger = document.getElementById('cityTrigger');
        const dropdown = document.getElementById('cityDropdown');
        const hiddenSelect = document.getElementById('acity');
        const list = document.getElementById('cityList');
        const search = document.getElementById('citySearch');
        const selectedText = trigger.querySelector('.selected-text');

        // Build the list from PHP options
        Array.from(hiddenSelect.options).forEach(opt => {
            if (!opt.value) return;
            const li = document.createElement('li');
            li.className = "p-2 hover:bg-gray-100 cursor-pointer text-sm border-b last:border-0";
            li.textContent = opt.text;
            li.onclick = (e) => {
                e.stopPropagation();
                hiddenSelect.value = opt.value;
                selectedText.textContent = opt.text;
                selectedText.classList.remove('text-[#808080cc]');
                dropdown.classList.add('hidden');
            };
            list.appendChild(li);
        });

        trigger.onclick = (e) => { 
            e.stopPropagation(); 
            dropdown.classList.toggle('hidden'); 
            if(!dropdown.classList.contains('hidden')) search.focus(); 
        };

        search.oninput = (e) => {
            const val = e.target.value.toLowerCase();
            list.querySelectorAll('li').forEach(li => 
                li.style.display = li.textContent.toLowerCase().includes(val) ? '' : 'none'
            );
        };

        document.addEventListener('click', () => dropdown.classList.add('hidden'));

        // ==================== SOURCE TRACKING ====================
        (function() {
            const params = new URLSearchParams(window.location.search);
            let source = params.get("utm_source") || document.referrer || "Website";
            const srcLower = source.toLowerCase();
            if (srcLower.includes("google")) {
                source = "Google-Ads by Agency";
            } else if (srcLower.includes("facebook") || srcLower.includes("meta")) {
                source = "Facebook by Agency";
            } else if (srcLower.includes("instagram") || srcLower.includes("ig")) {
                source = "Instagram by Agency";
            } else if (source !== "Website") {
                source = "Others";
            }
            if (!sessionStorage.getItem("leadSource")) {
                sessionStorage.setItem("leadSource", source);
            }
            document.getElementById("source").value = sessionStorage.getItem("leadSource");
        })();

        // ==================== VALIDATION & SUBMISSION ====================
        const nameRegex = /^[A-Za-z\s]+$/;
        const mobileRegex = /^[6-9]\d{9}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const pincodeRegex = /^[1-9][0-9]{5}$/;

        document.getElementById("AdmissionForm").addEventListener("submit", async function(e) {
            e.preventDefault();
            const btn = document.getElementById("AsubmitBtn");

            // Get values
            const session = document.getElementById("asession").value;
            const grade = document.getElementById("agrade").value;
            const studentName = document.getElementById("astudent_name").value.trim();
            const parentName = document.getElementById("aparent_name").value.trim();
            const mobile = document.getElementById("amobile").value.trim();
            const email = document.getElementById("aemail").value.trim();
            const city = hiddenSelect.value;
            const pincode = document.getElementById("apincode").value.trim();
            const source = document.getElementById("source").value;
            const terms = document.getElementById("terms").checked;

            // Validation
            if (!session || !grade || !studentName || !mobile || !city || !pincode) {
                alert("Please fill all required fields.");
                return;
            }
            if (!nameRegex.test(studentName)) {
                alert("Student name contains invalid characters.");
                return;
            }
            if (parentName && !nameRegex.test(parentName)) {
                alert("Parent name contains invalid characters.");
                return;
            }
            if (!mobileRegex.test(mobile)) {
                alert("Please enter a valid 10-digit mobile number starting with 6-9.");
                return;
            }
            if (email && !emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                return;
            }
            if (!pincodeRegex.test(pincode)) {
                alert("Please enter a valid 6-digit pincode.");
                return;
            }
            if (!terms) {
                alert("Please agree to Terms and Conditions.");
                return;
            }

            btn.disabled = true;
            btn.textContent = "Submitting...";

            // COMPLETE PAYLOAD
            const payload = {
                session: session,
                grade: grade,
                grade_name: grade,
                name: studentName,
                parent_name: parentName,
                phone: mobile,
                email: email,
                city: city,
                pincode: pincode,
                source: source,
                branch_id: 2,
                school_id: 1,
                source_type: "Website",
                enquiry_type: "Digital",
                message: "This Message From DPS Eldeco Website",
                subject: "Admission Enquiry",
                language_id: 1
            };

            console.log("Submitting payload:", payload);

            try {
                const res = await fetch("proxy/admission-proxy", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(payload)
                });

                const responseData = await res.json().catch(() => ({ error: "Invalid JSON response" }));

                if (!res.ok) {
                    throw new Error(`HTTP ${res.status}: ${responseData.message || JSON.stringify(responseData)}`);
                }

                if (responseData.status === false) {
                    throw new Error(responseData.message || "API returned an error");
                }

                // Success - only show the green popup (alert removed)
                document.getElementById("successPopup").classList.remove("hidden");
                document.getElementById("AdmissionForm").reset();

                // Reset city display
                selectedText.textContent = "Select City";
                selectedText.classList.add('text-[#808080cc]');
                hiddenSelect.value = "";

                setTimeout(() => {
                    document.getElementById("successPopup").classList.add("hidden");
                }, 5000);

            } catch (err) {
                console.error("Submission error:", err);
                alert("Submission failed: " + err.message);
            } finally {
                btn.disabled = false;
                btn.textContent = "Submit";
            }
        });
    </script>
</body>
</html>