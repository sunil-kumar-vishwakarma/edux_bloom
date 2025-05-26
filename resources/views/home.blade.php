@extends('frontent.layouts.app')
@section('title', 'EduX | Home ')
@section('content')
    <style>
        .hero-section {
            background: linear-gradient(90deg, #0644a6, #5795f8);
            color: #fff;
            padding: 100px 20px;
            text-align: center;
            margin-top: 5%;
        }

        .content h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 30px;
            line-height: 1.3;
        }

        .btn4 {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .btn-second,
        .study-search-button {
            border: none;
            color: #fff;
            background: linear-gradient(135deg, #bb0e45, #ad0039);
        }

        .btn3 {
            background-color: #ffffff;
            color: #b92151;
            border: 0.5px solid #292E3E;
        }

        .btn-second,
        .btn3 {
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .btn-second:hover,
        .btn3:hover {
            transform: translateY(-4px);
        }

        .anchr {
            text-decoration: none;
            color: inherit;
        }

        .study-search-box {
            background: #fff;
            padding: 30px 30px;
            border-radius: 12px;
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        }

        .study-search-form-row {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .study-input-wrapper {
            position: relative;
        }

        .study-search-input {
            padding: 8px 10px 8px 40px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
            box-sizing: border-box;
        }

        .study-search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .country-checkboxes {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
        }

        .country-checkboxes label {
            display: flex;
            align-items: center;
            gap: 6px;
            color: black;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 14px;
            cursor: pointer;
        }

        .flag-icon {
            width: 20px;
            height: 14px;
            object-fit: cover;
        }

        .study-search-button {
            /* background-color: #0644a6; */
            border: none;
            padding: 10px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .study-search-button:hover {
            background-color: #022e7d;
        }

        /* Large laptop (below 1600px) */
        @media (max-width: 1599px) {
            .hero-section {
                padding: 80px 20px;
            }

            .content h1 {
                font-size: 2.5rem;
            }

            .study-search-box {
                max-width: 700px;
                padding: 25px 25px;
            }

            .btn-second,
            .btn3 {
                padding: 12px 20px;
                font-size: 15px;
            }

            .study-search-button {
                font-size: 14px;
            }
        }

        /* Tablet (below 992px) */
        @media (max-width: 991px) {
            .hero-section {
                padding: 200px 20px;
            }

            .content h1 {
                font-size: 2.2rem;
            }

            .study-search-box {
                max-width: 90%;
                padding: 20px;
            }

            .btn-second,
            .btn3 {
                font-size: 14px;
                padding: 10px 18px;
            }

            .study-search-input {
                font-size: 14px;
                padding: 10px 10px 10px 40px;
            }

            .study-search-button {
                padding: 10px;
                font-size: 14px;
            }
        }

        /* Mobile (below 768px) */
        @media (max-width: 767px) {
            .content h1 {
                font-size: 1.8rem;
            }

            .btn4 {
                flex-direction: column;
                gap: 15px;
            }

            .study-search-box {
                padding: 18px;
            }

            .country-checkboxes {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .study-search-input {
                font-size: 13.5px;
                padding: 6px 10px 6px 28px;
            }

            .study-search-button {
                font-size: 13px;
                padding: 10px;
            }
        }

        /* Extra small mobile (below 480px) */
        @media (max-width: 479px) {
            .hero-section {
                padding: 100px 15px;
            }

            .content h1 {
                font-size: 1.6rem;
            }

            .study-search-box {
                padding: 16px;
            }

            .study-search-input {
                font-size: 13px;
                padding: 10px 8px 10px 40px;
            }

            .btn-second,
            .btn3,
            .study-search-button {
                font-size: 14px;
                padding: 14px 14px;
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <div class="hero-section">
        <div class="content">
            <h1>Start Early, Dream Big,<br />Succeed Globally</h1>
            <div class="btn4">
                <button class="btn-second">
                    <a href="/search" class="anchr">
                        <i class="fas fa-user-plus"></i> Join Our Program
                    </a>
                </button>
                <button class="btn3">
                    <a href="/contactus" class="anchr">Book a Free Consultation</a>
                </button>
            </div>
        </div>

        <div class="study-search-box">
            <form action="{{ route('search') }}" method="GET" class="study-search-form-row">
                <!-- Input Field -->
                <div class="study-input-wrapper">
                    <svg class="study-search-icon" viewBox="0 0 24 24" width="20" height="20" fill="#aaa">
                        <path
                            d="M10 2a8 8 0 105.29 14.29l5.21 5.21 1.5-1.5-5.21-5.21A8 8 0 0010 2zm0 2a6 6 0 110 12 6 6 0 010-12z" />
                    </svg>
                    <input type="text" name="keyword" class="study-search-input"
                        placeholder="What would you like to study?">
                </div>

                <!-- Country Checkboxes -->
                <div class="country-checkboxes">
                    <label>
                        <input type="checkbox" name="countries[]" value="Canada">
                        <img src="https://flagcdn.com/ca.svg" alt="Canada" class="flag-icon"> Canada
                    </label>
                    <label>
                        <input type="checkbox" name="countries[]" value="United States">
                        <img src="https://flagcdn.com/us.svg" alt="USA" class="flag-icon"> United States
                    </label>
                </div>

                <!-- Search Button -->
                <button type="submit" class="study-search-button">Search</button>
            </form>
        </div>
    </div>


    <section class="why-edux-simple">
        <div class="why-edux-wrapper">
            <h2 class="why-edux-title">Why Choose Edu-X Services?</h2>
            <ul class="why-edux-list">

                <li>
                    <span class="why-edux-icon">
                        <!-- Clock/Calendar Icon -->
                        <svg viewBox="0 0 24 24" fill="white" width="20" height="20">
                            <path d="M12 1a11 11 0 1 0 11 11A11.012 11.012 0 0 0 12 1zm1 12H7v-2h4V5h2z" />
                        </svg>
                    </span>
                    7+ Years of Experience
                </li>

                <li>
                    <span class="why-edux-icon">
                        <!-- Globe Icon -->
                        <svg viewBox="0 0 24 24" fill="white" width="20" height="20">
                            <path
                                d="M12 2a10 10 0 1010 10A10.011 10.011 0 0012 2zm1 17.93A8 8 0 114 12a8.009 8.009 0 019 7.93z" />
                            <path d="M12.5 7l-1.5 1v1l-1 .5L9 10v2l1 1 1 .5V15l1.5 1L14 14l-1-1v-1l1-1 1-.5V9l-1-2z" />
                        </svg>
                    </span>
                    African-Led, Globally Informed
                </li>

                <li>
                    <span class="why-edux-icon">
                        <!-- Shield Check Icon -->
                        <svg viewBox="0 0 24 24" fill="white" width="20" height="20">
                            <path d="M12 2l9 4v6c0 6-5 11-9 11s-9-5-9-11V6l9-4z" />
                            <path d="M10 12l2 2 4-4" stroke="#fff" stroke-width="2" fill="none" />
                        </svg>
                    </span>
                    Proven Track Record: 98% student success rate
                </li>

                <li>
                    <span class="why-edux-icon">
                        <!-- Graduation Cap Icon -->
                        <svg viewBox="0 0 24 24" fill="white" width="20" height="20">
                            <path d="M12 3L2 8l10 5 10-5-10-5z" />
                            <path d="M4 10v6c0 2 4 4 8 4s8-2 8-4v-6" />
                        </svg>
                    </span>
                    Partnered with Accredited Schools in North America
                </li>

            </ul>
        </div>
    </section>

    <section class="support-journey-section">
        <div class="support-journey-header">
            <h2>Our 360° Student Support Journey</h2>
            <p>From high school and to university graduates- we are with you every steps of the way</p>
        </div>

        <div class="support-journey-grid">
            <!-- Step 1 -->
            <div class="support-journey-card">
                <h3>1. Early Academic Preparation</h3>
                <ul>
                    <li>Enroll from high schools</li>
                    <li>Tailored academic counseling</li>
                    <li>Access to top prep resources</li>
                </ul>
            </div>

            <!-- Step 2 -->
            <div class="support-journey-card">
                <h3>2. English Language Training</h3>
                <ul>
                    <li>Online & in-person English courses</li>
                    <li>IELTS/TOEFL preparation</li>
                    <li>Conversation clubs with native speakers</li>
                </ul>
            </div>

            <!-- Step 3 -->
            <div class="support-journey-card">
                <h3>3. College Application Support</h3>
                <ul>
                    <li>School selection strategy</li>
                    <li>Essay & document assistance</li>
                    <li>Scholarship & financial aid guidance</li>
                </ul>
            </div>

            <!-- Step 4 -->
            <div class="support-journey-card">
                <h3>4. Visa & Travel Planning</h3>
                <ul>
                    <li>Visa interview coaching</li>
                    <li>Flight planning & travel checklist</li>
                    <li>Parent support & updates</li>
                </ul>
            </div>

            <!-- Step 5 -->
            <div class="support-journey-card">
                <h3>5. Arrival & Installation</h3>
                <ul>
                    <li>Airport pickup coordination</li>
                    <li>Housing setup assistance</li>
                    <li>Essential document setup (bank, phone, ID)</li>
                </ul>
            </div>

            <!-- Step 6 -->
            <div class="support-journey-card">
                <h3>6. Life & Career Development</h3>
                <ul>
                    <li>Campus involvement guidance</li>
                    <li>Internship & career coaching</li>
                    <li>Alumni network access</li>
                </ul>
            </div>


        </div>
    </section>





    <center>
        <div class="content5">
            <h2>An Easy-to-Use Platform Built to Deliver Quality Applications and More</h2>
        </div>
        <br>
        <br>


        <div class="info-section">

            <!--if you want do set text-size give  style="font-size: 17px;" in this div service -->


            <div class="services">
                <div id="webcrumbs">
                    <div class="w-[1000px] bg-white rounded-lg ">
                        <div class="grid grid-cols-3 gap-10">
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Platform.webp') }}" alt="Find Programs Faster" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Find Programs Faster
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/helpfull-team.png') }}" alt="Dedicated Support Team" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Helpful and Dedicated Support Team
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Studen-Loan.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Access to Exclusive Scholarships
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Platform-check.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    One Easy Application Platform
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Support.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Knowledgeable Support Team
                                </h4>
                            </div>
                            <div class="flex flex-col items-center text-center">
                                <img src="{{ asset('images/Chart-3.webp') }}" alt="Exclusive Scholarships" />
                                <h4 class="text-neutral-900 font-medium mt-4">
                                    Data Driven Insights
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="leff">
                    <div class="box2">
                        <div class="tag">
                            <h2 class="elementor-heading-title elementor-size-default">We’re Passionate About Making
                                Education <br>Accessible for Everyone</h2>
                        </div>

                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4" id="card-col">
                        <div class="col">
                            <video class="w-100" controls autoplay muted loop playsinline>
                                <source src="{{ asset('images/how we help2.mp4') }}" type="video/mp4">
                            </video>
                        </div>

                    </div>
                    <br>
                </div>
            </div>
            <section class="country-section">
                <h1>Trusted by Leading Institutions</h1>
                <br>
                <div class="buttons">
                    <button class="country-btn active" data-country="country1">
                        <img src="https://flagcdn.com/w320/ca.png" alt="Country 1 Flag"> CANADA
                    </button>
                    <button class="country-btn" data-country="country2">
                        <img src="https://flagcdn.com/w320/us.png" alt="Country 2 Flag"> UNITED STATES
                    </button>
                    {{-- <button class="country-btn" data-country="country3">
                        <img src="https://flagcdn.com/w320/gb.png" a lt="Country 3 Flag"> UNITED KINGDOM
                    </button>
                    <button class="country-btn" data-country="country4">
                        <img src="https://flagcdn.com/w320/au.png" alt="Country 4 Flag"> AUSTRALIA
                    </button>
                    <button class="country-btn" data-country="country5">
                        <img src="https://flagcdn.com/w320/ie.png" alt="Country 5 Flag"> IRELAND
                    </button> --}}
                </div>

                <div class="content-institution">
                    <div class="images" id="country1">
                        <img src="images/Carleton-University.webp" alt="Country 1 Image 1">
                        <img src="images/Conestoga.webp" alt="Country 1 Image 2">
                        <img src="images/George_Brown.webp" alt="Country 1 Image 3">
                        <img src="images/YorkvilleU.webp" alt="Country 1 Image 4">
                        <img src="images/UWaterloo.webp" alt="Country 1 Image 5">
                    </div>
                    <div class="images" id="country2" style="display: none;">
                        <img src="images/UWaterloo.webp" alt="Country 2 Image 1">
                        <img src="images/YorkvilleU.webp" alt="Country 2 Image 2">
                        <img src="images/George_Brown.webp" alt="Country 2 Image 3">
                        <img src="images/Conestoga.webp" alt="Country 2 Image 4">
                        <img src="images/Carleton-University.webp" alt="Country 2 Image 5">
                    </div>
                    <div class="images" id="country3" style="display: none;">
                        <img src="images/Conestoga.webp" alt="Country 3 Image 1">
                        <img src="images/Carleton-University.webp" alt="Country 3 Image 2">
                        <img src="images/George_Brown.webp" alt="Country 3 Image 3">
                        <img src="images/YorkvilleU.webp" alt="Country 3 Image 4">
                        <img src="images/UWaterloo.webp" alt="Country 3 Image 5">
                    </div>
                    <div class="images" id="country4" style="display: none;">
                        <img src="images/UWaterloo.webp" alt="Country 4 Image 1">
                        <img src="images/Carleton-University.webp" alt="Country 4 Image 2">
                        <img src="images/YorkvilleU.webp" alt="Country 4 Image 3">
                        <img src="images/George_Brown.webp" alt="Country 4 Image 4">
                        <img src="images/Conestoga.webp" alt="Country 4 Image 5">
                    </div>
                    <div class="images" id="country5" style="display: none;">
                        <img src="images/George_Brown.webp" alt="Country 5 Image 1">
                        <img src="images/UWaterloo.webp" alt="Country 5 Image 2">
                        <img src="images/Carleton-University.webp" alt="Country 5 Image 3">
                        <img src="images/Conestoga.webp" alt="Country 5 Image 4">
                        <img src="images/YorkvilleU.webp" alt="Country 5 Image 5">
                    </div>
                </div>

            </section>

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const buttons = document.querySelectorAll(".tab-button2");
                const videoElement = document.getElementById("video-player2");
                const videoSource = document.getElementById("video-source2");

                // Define video paths for each tab
                const videoSets = {
                    "students-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4",
                    "recruitment-partners-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4"
                };

                buttons.forEach((button) => {
                    button.addEventListener("click", () => {
                        // Remove active class from all buttons
                        buttons.forEach((btn) => btn.classList.remove("active2"));

                        // Add active class to the clicked button
                        button.classList.add("active2");

                        // Update video source based on the clicked button
                        const target = button.getAttribute("data-target");
                        videoSource.src = videoSets[target];

                        // Load and play the new video
                        videoElement.load();
                        // videoElement.play();
                    });
                });

                // Trigger click on the default active button to load its video
                document.querySelector(".tab-button2.active2").click();
            });


            document.addEventListener("DOMContentLoaded", () => {
                const buttons = document.querySelectorAll(".tab-button");
                const videoElement = document.getElementById("video-player");
                const videoSource = document.getElementById("video-source");

                // Define video paths for each tab
                const videoSets = {
                    "students-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4",
                    "recruitment-partners-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
                    "partner-institutions-video": "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4"
                };

                // Set the active button class on page load
                const defaultActiveButton = document.querySelector(".tab-button.active1");
                const defaultTarget = defaultActiveButton.getAttribute("data-target");
                const defaultVideo = videoSets[defaultTarget];
                videoSource.src = defaultVideo;
                videoElement.load();
                videoElement.play();

                buttons.forEach((button) => {
                    button.addEventListener("click", () => {
                        // Remove active class from all buttons
                        buttons.forEach((btn) => btn.classList.remove("active1"));

                        // Add active class to the clicked button
                        button.classList.add("active1");

                        // Update video source based on the clicked button
                        const target = button.getAttribute("data-target");
                        videoSource.src = videoSets[target];

                        // Load and play the new video
                        videoElement.load();
                        videoElement.play();
                    });
                });
            });




            document.addEventListener("DOMContentLoaded", () => {
                const buttons = document.querySelectorAll(".tab-btn");
                const tabContents = document.querySelectorAll(".tab-content");
                const heroImages = document.querySelector(".hero-images");

                // Define image sets for each tab
                const imageSets = {
                    students: [
                        "images/student.jpg",
                        "images/partner_img.webp",
                        "images/institutions.jpg"
                    ],
                    "recruitment-partners": [
                        "images/partner_img.webp",
                        "images/institutions.jpg",
                        "images/student.jpg"
                    ],
                    "partner-institutions": [
                        "images/institutions.jpg",
                        "images/student.jpg",
                        "images/partner_img.webp"
                    ],
                };

                buttons.forEach((button) => {
                    button.addEventListener("click", () => {
                        // Remove active class from all buttons
                        buttons.forEach((btn) => btn.classList.remove("active-student"));

                        // Add active class to the clicked button
                        button.classList.add("active-student");

                        // Hide all tab contents
                        tabContents.forEach((content) => (content.style.display = "none"));

                        // Show the content corresponding to the clicked button
                        const target = button.getAttribute("data-target");
                        document.getElementById(target).style.display = "block";

                        // Update images for the active tab
                        const images = imageSets[target];
                        heroImages.innerHTML = ""; // Clear current images
                        images.forEach((src, index) => {
                            const imageCard = document.createElement("div");
                            imageCard.className = `image-card`;
                            imageCard.style.zIndex = 3 - index; // Adjust stacking
                            imageCard.style.transform =
                                `translateX(${(index - 1) * 50}%) translateY(${index * 20}px)`; // Adjust positions
                            imageCard.innerHTML = `<img src="${src}" alt="Image ${index + 1}">`;
                            heroImages.appendChild(imageCard);
                        });
                    });
                });

                // Trigger click on the default active button to load its images
                document.querySelector(".tab-btn.active-student").click();
            });





            document.addEventListener('DOMContentLoaded', function() {
                // Get all the buttons and content sections
                const buttons = document.querySelectorAll('.tab-button');
                const sections = document.querySelectorAll('.content');

                // Add event listener to each button
                buttons.forEach(button => {
                    button.addEventListener('click', function() {
                        // Get the target section ID
                        const target = this.getAttribute('data-target');

                        // Hide all content sections
                        sections.forEach(section => {
                            section.classList.remove('active-content');
                        });

                        // Show the content section corresponding to the button clicked
                        const activeSection = document.getElementById(target);
                        activeSection.classList.add('active-content');
                    });
                });
            });


            const dropdownBtn = document.getElementById('dropdownBtn');
            const dropdownMenu = document.getElementById('dropdownMenu');

            // Show dropdown when hovering on the button
            dropdownBtn.addEventListener('mouseenter', () => {
                dropdownMenu.style.display = 'block';
            });

            // Show dropdown when hovering over the menu
            dropdownMenu.addEventListener('mouseenter', () => {
                dropdownMenu.style.display = 'block';
            });

            // Hide dropdown when the mouse leaves the button or the menu
            dropdownBtn.addEventListener('mouseleave', () => {
                setTimeout(() => {
                    if (!dropdownMenu.matches(':hover')) {
                        dropdownMenu.style.display = 'none';
                    }
                }, 200); // Optional delay for smoother UX
            });

            dropdownMenu.addEventListener('mouseleave', () => {
                dropdownMenu.style.display = 'none';
            });
        </script>







        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const buttons = document.querySelectorAll('.country-btn');
                const imageSets = document.querySelectorAll('.images');

                function showImages(countryId) {
                    imageSets.forEach(images => {
                        images.classList.remove('active');
                        images.style.display = 'none';
                    });

                    const selectedImages = document.getElementById(countryId);
                    if (selectedImages) {
                        selectedImages.style.display = 'flex';
                        setTimeout(() => selectedImages.classList.add('active'), 10);
                    }
                }

                // Set initial view based on active button
                const initialButton = document.querySelector('.country-btn.active');
                if (initialButton) {
                    const initialCountryId = initialButton.getAttribute('data-country');
                    showImages(initialCountryId);
                }

                // Handle button clicks
                buttons.forEach(button => {
                    button.addEventListener('click', () => {
                        buttons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');

                        const countryId = button.getAttribute('data-country');
                        showImages(countryId);
                    });
                });
            });
        </script>

        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

        <!-- <script>
            $(document).ready(function() {
                $('.study-search-button').on('click', function(e) {
                    e.preventDefault();

                    let keyword = $('.study-search-input').val();
                    let countries = [];
                    $("input[name='countries[]']:checked").each(function() {
                        countries.push($(this).val());
                    });

                    $.ajax({
                        url: '{{ route('search') }}',
                        method: 'GET',
                        data: {
                            keyword: keyword,
                            countries: countries
                        },
                        success: function(response) {
                            $('#search-results').html(response); // Output goes here
                        },
                        error: function() {
                            alert('Something went wrong.');
                        }
                    });
                });
            });
        </script> -->

        <!-- Result container -->
        <!-- <div id="search-results"></div> -->
