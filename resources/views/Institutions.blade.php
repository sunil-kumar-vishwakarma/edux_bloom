@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/institution.css') }}">
    <section class="head">

    </section>
    <div class="text">
        <h1>Be Seen by 100,000+ Students Every Month</h1>
        <p>Increase your global presence and the number of qualified students from a single, easy-to-use platform trusted by
            more than 1,500 institutions worldwide.</p>
        <a href="/contactus"> <button type="button" class="btn btn-primary" id="workWithUsBtn">Work With US</button></a>
    </div>
    <br><br>

    <section class="journey">
        <div class="journey-section">
            <h2>Your journey at a glance <span><i class="fa-solid fa-hand-point-down"></i></span></h2><br>
            <div class="journey-steps">
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></i></div>
                    <h3>Find a program</h3>
                    <p>Use our search to <a href="/search">browse 81,000+ degrees</a> worldwide</p>
                </div>


                <div class="connector"><i class="fa-solid fa-arrow-right-long"></i></div>
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h3>Get a scholarship</h3>
                    <p>We give out <a href="/search">$32,000 in scholarships</a> every year - apply for one today!</p>
                </div>

                <i class="fa-solid fa-arrow-right-long"></i>
                <div class="connector"></div>
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <h3>Talk to universities</h3>
                    <p>Sign up for our <a href="/events">FREE virtual events</a> to speak to universities</p>
                </div>
                <div class="connector"><i class="fa-solid fa-arrow-right-long"></i></div>
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-globe"></i></div>
                    <h3>Stay up to date</h3>
                    <p>Follow us on <a href="#">Instagram</a>, <a href="#">TikTok</a>, and <a
                            href="#">YouTube</a> for scholarship</p>
                </div>
            </div>
        </div>
    </section>


    </div>


    <div class="work" id="letsgetstartedc">
        <h1>How It Works</h1><br>
    </div>
    <section class="working">

        <div class="steps-container">

            <div class="step-card">
                <div class="step-icon">
                    <img src="images/stuudents_check_eligibility_108.webp" alt="Step 1 Icon">
                </div>
                <div class="step-number">STEP 1</div>
                <div class="step-title">Students Check Their Eligibility</div>
                <div class="step-description">
                    Students complete a short survey and get matched to best-fit programs and institutions.
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <img src="images/students_apply_schools_108.webp" alt="Step 2 Icon">
                </div>
                <div class="step-number">STEP 2</div>
                <div class="step-title">Students Apply</div>
                <div class="step-description">
                    Students select an institution and program, complete their profile, pay their fees, and submit the
                    proper documentation.
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <img src="images/students_get_accepted.webp" alt="Step 3 Icon">
                </div>
                <div class="step-number">STEP 3</div>
                <div class="step-title">Students Get Accepted</div>
                <div class="step-description">
                    The application is reviewed by the institution, and a letter of acceptance is issued.
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <img src="images/students_apply_to_visa.webp" alt="Step 4 Icon">
                </div>
                <div class="step-number">STEP 4</div>
                <div class="step-title">Student Applies for Visa</div>
                <div class="step-description">
                    The student goes through the visa application process.
                </div>
            </div>

            <div class="step-card">
                <div class="step-icon">
                    <img src="images/students_start_journey_108.webp" alt="Step 5 Icon">
                </div>
                <div class="step-number">STEP 5</div>
                <div class="step-title">Student Journey Begins</div>
                <div class="step-description">
                    The student sets off with bags packed ready to start their adventure on your campus.
                </div>
            </div>
        </div>
    </section>



    <section class="country-section">
        <h1>Trusted by Leading Institutions</h1><br>
        <div class="buttons">
            <button class="country-btn active" data-country="country1">
                <img src="https://flagcdn.com/w320/ca.png" alt="Country 1 Flag"> CANADA
            </button>
            <button class="country-btn" data-country="country2">
                <img src="https://flagcdn.com/w320/us.png" alt="Country 2 Flag"> UNITED STATES
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

        </div>

    </section>



    <div class="container1">
        <h1>We're Invested in Caring for You and the<br> Ecosystem of International Education</h1>

        <div class="card-container">
            <div class="card-institutions">
                <div class="icon"><img src="images/Machine_Learning-pdfy8jys8c4u5yl9xfc2xsl44csh106t79gbivp4w8.png"
                        alt="Local Support Icon"></div>
                <h3>Local Support</h3>
                <p>Our international recruitment experts are there to support you every step of the way.</p>
            </div>

            <div class="card-institutions">
                <div class="icon"><img src="images/Big-Data-Analytics-pdfy8cg2pnujl2w75c32duhfd9tjbfcyi88foo0aa0.png"
                        alt="Education Icon"></div>
                <h3>Industry Education</h3>
                <p>Expand your knowledge and stay ahead of your competitors with guided online courses and certificates.</p>
            </div>

            <div class="card-institutions">
                <div class="icon"><img src="images/Security_Privacy-pdfy84xd6zk90774d8u1twdqm6ulluj3t70jugbfns.png"
                        alt="Events Icon"></div>
                <h3>Events and Webinars</h3>
                <p>Regular online webinars, training, and events to keep you updated on the latest trends and regulations.
                </p>
            </div>

            <div class="card-institutions">
                <div class="icon"><img src="images/Co-Created_Progras-pdfy7xenob9yfbi1l5l19ya1v3vnw9p945so08ml1k.png"
                        alt="Data Icon"></div>
                <h3>Data and Insights</h3>
                <p>Industry-leading insights and knowledge to help you plan, expand, and achieve your goals.</p>
            </div>
        </div>
    </div>
    </section>
    <br>

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
