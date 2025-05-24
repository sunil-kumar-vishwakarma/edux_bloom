@extends('frontent.layouts.app')
@section('title', 'EduX | Home ')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        /* Main Content Container */
        /* .content {
                max-width: 1600px;
                margin: 0 auto;
                padding: 40px 20px;
                text-align: left;
            } */

        /* Heading */
        .content h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.4;
        }

        /* Buttons Row */
        .btn4 {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-bottom: 30px;
        }

        .anchr {
            color: #fff;
            text-decoration: none;
        }

        /* Study Search Section aligned to the left */
        .study-search-section {
            width: 100%;
            display: block;
            /* Remove flexbox */
            margin-top: 0;
        }

        /* Search Box aligned left */
        .study-search-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px 25px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.2);
            width: 100%;
            max-width: 500px;
            text-align: left;
            color: #fff;
            /* Light text on dark backgrounds */
        }


        /* Heading inside the box */
        .study-search-heading {
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        /* Form Structure */
        .study-search-form-row {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        /* Input Box */
        .study-input-wrapper {
            display: flex;
            align-items: center;
            background: #f5f5f5;
            padding: 10px 12px;
            border-radius: 5px;
        }

        .study-search-input {
            flex: 1;
            border: none;
            background: transparent;
            font-size: 16px;
            margin-left: 8px;
            outline: none;
        }

        /* Icon */
        .study-search-icon {
            flex-shrink: 0;
        }

        /* Flex row for checkboxes + button */
        .search-options-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        /* Checkbox styling */
        .country-checkboxes {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .country-checkboxes label {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14px;
            margin-bottom: 0;
            /* remove space if any */
        }


        .country-checkboxes img {
            width: 20px;
        }

        /* Search Button */
        .study-search-button {
            /* background-color: #007bff; */
            background: linear-gradient(135deg, #bb0e45, #ad0039);
            color: white;
            border: none;
            padding: 10px 16px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .study-search-button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="content">
        <h1>Start Early, Dream Big, <br />Succeed Globally</h1>
        <div class="btn4">
            <button class="btn-second">
                <a href="/search" class="anchr">
                    <i class="fas fa-user-plus"></i> Join Our Program
                </a>
            </button>
            <button class="btn3"><a href="/contactus" class="anchr">Book a Free Consultation</a></button>
        </div>
        <div class="study-search-section">
            <div class="study-search-box">
                {{-- <h2 class="study-search-heading">10 million searches and counting</h2> --}}
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

                    <!-- Row for checkboxes and button -->
                    <div class="search-options-row">
                        <!-- Country Checkboxes -->
                        <div class="country-checkboxes">
                            <label>
                                <input type="checkbox" name="countries[]" value="Canada">
                                <img src="https://flagcdn.com/ca.svg" alt="Canada"
                                    style="width: 20px; vertical-align: middle;">
                                Canada
                            </label>
                            <label>
                                <input type="checkbox" name="countries[]" value="United States">
                                <img src="https://flagcdn.com/us.svg" alt="USA"
                                    style="width: 20px; vertical-align: middle;">
                                United States
                            </label>
                        </div>

                        <!-- Search Button -->
                        <button type="submit" class="study-search-button">Search</button>
                    </div>

                </form>


            </div>
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
