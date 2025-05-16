@extends('frontent.layouts.app')
@section('title', 'EduX | Home ')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <div class="content">
        <h1>Start Early, Dream Big, <br />Succeed Globally</h1>
        <!--     <p id="subheadding">-->
        <!--    Edu-X Services supports you from your first step in Africa to your first class in North America.-->
        <!--</p>-->


        <!--<button class="btn2"> <a href="Student.html" class="anchr">I am a student who wants to study abroad</a></button>-->
        <div class="btn4">
            <button class="btn-second">
                <a href="partner.html" class="anchr">
                    <i class="fas fa-user-plus"></i> Join Our Program
                </a>
            </button>
            <button class="btn3"><a href="Institutions.html" class="anchr">Book a Free Consultation</a></button>
        </div>
    </div>




    <div class="box2">
        <div class="content2">
            <h2 class="elementor-heading-title elementor-size-default">A Platform That Assists You Through Every Step of the
                Journey</h2>
        </div>


        <div class="box3">


            <main class="hero">
                <div class="tab-nav">
                    <button class="tab-btn active-student" data-target="students">STUDENTS</button>
                    <button class="tab-btn" data-target="recruitment-partners">RECRUITMENT PARTNERS</button>
                    <button class="tab-btn" data-target="partner-institutions">PARTNER INSTITUTIONS</button>
                </div>



                <div class="hero-content">
                    <div class="text-and-images">

                        <div class="tab-content active" id="students">
                            <div id="img1"><img src="{{ asset('images/student.jpg') }}"></div>
                            <h1>Students</h1>
                            <p style="margin-top:10px;">We believe in your dreams and work hard to make them a reality. Get
                                matched with and apply to programs and institutions that align with your background, skills,
                                and interests.</p>
                            <a href="Student.html"><button class="btn" style="margin-top:15px;">Learn More</button></a>
                        </div>
                        <div class="tab-content" id="recruitment-partners" style="display: none;">
                            <div id="img2"><img src="{{ asset('images/partner_img.webp') }}"></div>
                            <h1>Recruitment Partners</h1>
                            <p style="margin-top:10px;">edux is more than a platform. We're your trusted partner, here to
                                help you guide students around the world to fulfill their international education dreams.
                            </p>
                            <a href="partner.html"><button class="btn" style="margin-top:15px;">Learn More</button></a>
                        </div>
                        <div class="tab-content" id="partner-institutions" style="display: none;">
                            <div id="img3"><img src="{{ asset('images/institutions.jpg') }}"></div>
                            <h1>Partner Institutions</h1>
                            <p style="margin-top:10px;">Increase your global presence and the number of qualified student
                                applicants from a single, easy-to-use platform trusted by more than 1,500 institutions
                                worldwide.</p>
                            <a href="Institutions.html"><button class="btn" style="margin-top:15px;">Learn
                                    More</button></a>
                        </div>


                        <div class="hero-images">
                            <div class="image-stack">
                                <div class="image-card">
                                    <img src="{{ asset('images/student.jpg') }}" alt="Image1">
                                </div>
                                <div class="image-card">
                                    <img src="{{ asset('images/partner_img.webp') }}" alt="Image 2" id="Image2">
                                </div>
                                <div class="image-card">
                                    <img src="{{ asset('images/institutions.jpg') }}" alt="Image 3" id="Image3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>

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
            <button class="country-btn" data-country="country3">
                <img src="https://flagcdn.com/w320/gb.png" a lt="Country 3 Flag"> UNITED KINGDOM
            </button>
            <button class="country-btn" data-country="country4">
                <img src="https://flagcdn.com/w320/au.png" alt="Country 4 Flag"> AUSTRALIA
            </button>
            <button class="country-btn" data-country="country5">
                <img src="https://flagcdn.com/w320/ie.png" alt="Country 5 Flag"> IRELAND
            </button>
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

    <center>
        <div class="content5">
            <h2>An Easy-to-Use Platform Built to Deliver Quality Applications and More</h2>
        </div>

        <!--  <main class="hero2">-->
        <!--    <div class="tab-navigation2">-->
        <!--        <button class="tab-button2 active2" data-target="students-video">STUDENTS</button>-->
        <!--        <button class="tab-button2" data-target="recruitment-partners-video">RECRUITMENT PARTNERS</button>-->
        <!--    </div>-->

        <!--    <div class="video-display2">-->
        <!--        <video id="video-player2" controls>-->
        <!--            <source id="video-source2" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4" type="video/mp4">-->
        <!--            Your browser does not support the video tag.-->
        <!--        </video>-->
        <!--    </div>-->
        <!--</main>-->


        <div class="info-section">

            <!--if you want do set text-size give  style="font-size: 17px;" in this div service -->


            <div class="services">
                <br><br>


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
                <br><br>

                <div class="leff">
                    <!--<div class="d-grid gap-2">-->
                    <!--  <a href="student_register.html"><button class="btn btn-primary" type="button">Try It Today</button></a>-->
                    <!--</div><br><br>-->

                    <!--  <div class="video2">-->
                    <!--        <video controls>-->
                    <!--          <source src="{{ asset('images/how we help.mp4') }}" type="video/mp4">-->

                    <!--        Your browser does not support the video tag.-->
                    <!--        </video>-->
                    <!--</div>-->

                    <div class="box2">

                        <!--<h2 id="feedb">Feedback from Our Trusted Partners</h2>-->

                        <!--<main class="hero1">-->
                        <!--  <div class="tab-navigation1">-->
                        <!--    <button class="tab-button active1" data-target="students-video">STUDENTS</button>-->
                        <!--    <button class="tab-button" data-target="recruitment-partners-video">RECRUITMENT PARTNERS</button>-->
                        <!--    <button class="tab-button" data-target="partner-institutions-video">PARTNER INSTITUTIONS</button>-->
                        <!--  </div>-->

                        <!--  <div class="video-display">-->
                        <!--    <video id="video-player" controls>-->
                        <!--      <source id="video-source" src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">-->
                        <!--      Your browser does not support the video tag.-->
                        <!--    </video>-->
                        <!--  </div>-->
                        <!--</main>-->

                        <div class="tag">
                            <h2 class="elementor-heading-title elementor-size-default">We’re Passionate About Making
                                Education <br>Accessible for Everyone</h2>
                        </div>

                    </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4" id="card-col">
                        <div class="col">
                            <video controls autoplay muted loop playsinline>
                                <source src="{{ asset('images/how we help.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>

                            <!--<p style="text-align: justify;">-->
                            <!--  edux believes that education should be accessible to all. We delivered 1,000 backpacks and school supplies to empower children in India to dream big and work hard to achieve their dreams.-->
                            <!--</p>-->
                        </div>

                        <div class="col">
                            <video controls autoplay muted loop playsinline>
                                <source src="{{ asset('images/how we help2.mp4') }}" type="video/mp4">
                            </video>
                            <!--<p style="text-align: justify;">-->
                            <!--  edux believes that education should be accessible to all. We delivered 1,000 backpacks and school supplies to empower children in India to dream big and work hard to achieve their dreams.-->
                            <!--</p>-->
                        </div>
                    </div>
                    <br>
                </div>
            </div>


            <div class="content2">
                <h2>Begin Your Journey with Edu-X</h2>
            </div>
            <br><br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4" id="card2">
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/student_section.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Students</h5>
                            <p class="card-text">Are you a student looking to study abroad in Canada, the United States,
                                the United Kingdom, Australia, or Ireland? Let our team of experts guide you through your
                                journey.</p>
                            <a href="student_register.html"><button type="button" class="btn">Student
                                    Registration</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/partner.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Partner Institutions</h5>
                            <p class="card-text">Become an edux partner institution to diversify your campus by attracting
                                qualified students from around the world. Connect with our Partner Relations team here.</p>
                            <a href="Institutions.html"><button type="button" class="btn"
                                    style="margin-top:60px; margin-bottom:-2px;">Partner Inquiry</button></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="{{ asset('images/recruiter_partner.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Recruitment Partners</h5>
                            <p class="card-text">Do you recruit prospective students who want to study in Canada, the
                                United States, the United Kingdom, Australia, or Ireland? Become an edux recruitment
                                partner.</p>
                            <a href="partner_registration.html"><button type="button" class="btn">Recruiter
                                    Registration</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
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
                        buttons.forEach((btn) => btn.classList.remove("active"));

                        // Add active class to the clicked button
                        button.classList.add("active");

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
                document.querySelector(".tab-btn.active").click();
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
            document.querySelector('.navbar-toggler').addEventListener('click', function() {
                const navbarCollapse = document.querySelector('.navbar-collapse');
                const isExpanded = navbarCollapse.style.display === 'flex';
                navbarCollapse.style.display = isExpanded ? 'none' : 'flex';
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
