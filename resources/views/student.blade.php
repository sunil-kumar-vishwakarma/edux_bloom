@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

    <style>
        .navbar-brand img {
            height: 70px !important;
            width: auto;
            margin-left: 17.5px;
        }

        .login-signup a {
            background-color: blue;
            color: white;
            font-weight: 550;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .login-signup a:hover {
            background-color: white;
            color: black;
        }


        .navbar-brand div {
            font-size: 27px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: white;
            font-weight: bold;
            margin-top: 17px;
        }


        .navbar-brand {
            display: flex;
            gap: 15px;
        }

        .student-add-program {
            font-size: xx-large;
            font-weight: 700;
            color: white;
        }

        .study-pro {}

        .cont h2 {
            /* font-size: 18px; */
            color: white;
            margin-top: 12px;
            font-size: xx-large;
            font-weight: 600;
        }

        .cont p {
            /* font-size: 18px; */
            color: black;

        }

        /* newcss date-21 may */
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');

        .offer-section {
            /* background: linear-gradient(to bottom, #dbeafe, #f0f4ff); */
            padding: 70px 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        .offer-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 50px;
            color: #000;
            /* Changed from gradient to solid black */
            font-weight: bold;
        }

        .offer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 35px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .offer-card {
            background: linear-gradient(90deg, #0644a6, #2764c5);
            backdrop-filter: blur(12px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            padding: 25px 25px 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
            color: white;
            /* Make text readable on dark bg */
        }


        .offer-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
        }

        .offer-card h3 {
            font-size: 20px;
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }

        .offer-card h3,
        .offer-card h3 span,
        .offer-card ul li {
            color: #fff;
        }

        .offer-card ul li i,
        .offer-card h3 i {
            color: #dbeafe;
        }


        .offer-card h3 i {
            margin-right: 10px;
        }

        .offer-card h3 span {
            display: block;
            font-size: 14px;
            margin-top: 4px;
        }

        .offer-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
            z-index: 1;
        }

        .offer-card ul li {
            padding: 8px 0;
            font-size: 15px;
            display: flex;
            align-items: center;
        }

        .offer-card ul li i {
            margin-right: 10px;
            font-size: 14px;
        }

        .cta-section {
            background: url("{{ asset('images/contact-us-Flutemate-1024x538.webp') }}") no-repeat center center/cover;
            padding: 80px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .cta-card {
            /* background: linear-gradient(135deg, rgba(6, 68, 166, 0.85), rgba(39, 100, 197, 0.85)); */
            border-radius: 20px;
            padding: 40px;
            max-width: 800px;
            text-align: center;
            color: #fff;
            /* backdrop-filter: blur(10px); */
            /* box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); */
        }

        .cta-card h2 {
            color: white;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .cta-card p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #ffffffb8;
        }

        .cta-buttons {
            display: flex !important;
            justify-content: center !important;
            gap: 20px !important;
            flex-wrap: wrap !important;
        }

        .stepbtn {
            display: inline-flex ;
            /* Use flex to center content */
            align-items: center ;
            /* Vertically center */
            justify-content: center ;
            /* Horizontally center */
            padding: 12px 24px ;
            border: none ;
            border-radius: 50px ;
            text-decoration: none ;
            font-weight: 600 ;
            transition: all 0.3s ease ;
            font-size: 1rem ;
            text-align: center ;
            /* Ensure multiline text is centered */
            cursor: pointer ;
            /* Optional: adds hand cursor */
        }


        .primary-btn {
            background-color: #fff !important;
            color: #0644a6 !important;
        }

        .primary-btn:hover {
            background-color: #f0f0f0 !important;
            text-decoration: none;
        }

        .secondary-btn {
            background-color: transparent !important;
            color: #fff !important;
            border: 2px solid #fff !important;
        }

        .secondary-btn:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
            text-decoration: none;
        }


        .mission-vision-modern {
            padding: 40px 20px;
            /* background: linear-gradient(to right, #e9f0ff, #f3f6ff); */
            font-family: 'Poppins', sans-serif;
            text-align: center;
        }

        .mv-container {
            max-width: 1200px;
            margin: auto;
        }

        .mv-main-heading {
            font-size: 3rem !important;
            font-weight: 700 !important;
            color: #0a1f44 !important;
            margin-bottom: 50px !important;
            line-height: 1.4 !important;
        }

        .mv-main-heading .accent {
            font-size: 3rem !important;
            color: #0644a6 !important;
            position: relative !important;
            display: inline-block !important;
        }

        .mv-main-heading .accent::after {
            content: '' !important;
            width: 50% !important;
            height: 4px !important;
            background: #0644a6 !important;
            position: absolute !important;
            left: 0 !important;
            bottom: -6px !important;
            border-radius: 2px !important;
        }


        .mv-section {
            padding: 1rem 2rem;
            text-align: center;
        }

        .mv-flex-cards {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: nowrap;
            /* Prevent wrapping */
            padding-bottom: 1rem;
            /* scroll-snap-type: x mandatory; */
        }


        .mv-glass-card {
            flex: 0 0 45%;
            /* Adjust card width as needed (45% means 2 cards fit in one row) */
            min-width: 400px;
            scroll-snap-align: center;
            background: linear-gradient(90deg, #0644a6, #2764c5);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-radius: 1.5rem;
            padding: 2.5rem 2rem;
            width: 100%;
            max-width: 480px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .mv-glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        }

        .mv-icon-circle {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            font-size: 28px;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4);
        }

        .mv-subheading {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .mv-glass-card p {
            font-size: 1.05rem;
            line-height: 1.8;
            color: #e6e6e6;
        }

        /* Media Query for Large Screens */
        @media (min-width: 1200px) {
            .mv-glass-card {
                padding: 40px;
            }

            .mv-main-heading {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 1024px) {
            .mv-glass-card {
                min-width: 300px;
                flex: 0 0 45%;
            }
        }

        @media (max-width: 768px) {
            .mv-flex-cards {
                flex-wrap: wrap;
            }

            .mv-glass-card {
                min-width: 300px;
                flex: 0 0 80%;
            }
        }

        /* testimonial */
        .testimonial-section {
            padding: 3rem 1rem;
            text-align: center;
            background: linear-gradient(to bottom right, #061e52, #0c347a);
            color: white;
        }

        .testimonials-heading {
            font-size: 2rem;
            margin-bottom: 3rem;
            font-weight: bold;
            color: white;
        }

        .custom-swiper {
            position: relative;
            width: 90%;
            max-width: 800px;
            margin: 3rem auto;
            overflow: hidden;
        }

        .testimonial-slide {
            display: none;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease;
        }

        .testimonial-slide.active {
            display: block;
        }

        .testimonial-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(20px);
            padding: 2rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .testimonial-slide .icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            font-size: 28px;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4);
        }

        .testimonial-text {
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 1rem;
            color: #fff;
        }

        .testimonial-author {
            font-weight: bold;
            color: #fff;
        }

        .swiper-dots {
            text-align: center;
            margin-top: 1rem;
        }

        .swiper-dots span {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin: 0 5px;
            background-color: #aaa;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .swiper-dots span.active {
            background-color: #2764c5;
        }



        /* Responsive Adjustments */
        @media (max-width: 600px) {
            .testimonial-card {
                padding: 1.5rem;
            }

            .testimonial-text {
                font-size: 1rem;
            }

            .icon {
                font-size: 2rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

    <!-- nav-end -->
    <br><br><br><br>
    <!-- <div class="content"> -->
    <div class="imag-background">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('images/studentmain.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="text-content">
            <span class="dot study-abroad">
                <ul>
                    <li>YOUR STUDY ABROAD SOLUTION</li>
                </ul>
            </span>

            <div class="cont">
                <h2 class="study-pro">Find Your Perfect Program</h2><br>
                <p>We'll help you find and get into the perfect<br>
                    program in your dream destination.</p>
            </div>
            <button type="button" class="btn btn-light"><a href="/search">Start your journey</a></button>
        </div>
    </div>

    <div class="work">
        <span><img src="{{ asset('images/girl.png') }}" style="height: 60px; width: 50px;">
            <h3>800,000+</h3><br>
            <p>Students Helped</p>
        </span>
        <span><img src="{{ asset('images/envolope.png') }}"style="height: 60px; width: 50px;">
            <h3>140,000+</h3><br>
            <p>Programs Offered</p>
        </span>
        <span><img src="{{ asset('images/home.png') }}" style="height: 60px; width: 50px;">
            <h3>1500+</h3><br>
            <p>Institutions</p>
        </span>
        <span><img src="{{ asset('images/earth.png') }}" style="height: 60px; width: 50px;">
            <h3>05</h3><br>
            <p>Destination Countries</p>
        </span>
    </div>


    {{-- new sections --}}
    <section class="offer-section">
        <h2 class="offer-title"> What We Offer You ?</h2>
        <div class="offer-grid">

            <div class="offer-card">
                <h3><i class="fas fa-user-graduate"></i> Preparatory Program <span>(From 9th Grade)</span></h3>
                <ul>
                    <li><i class="fas fa-chalkboard-teacher"></i> Personalized academic counseling</li>
                    <li><i class="fas fa-globe"></i> Exposure to international education standards</li>
                    <li><i class="fas fa-book-open"></i> High school course guidance</li>
                </ul>
            </div>

            <div class="offer-card">
                <h3><i class="fas fa-language"></i> English Language Training</h3>
                <ul>
                    <li><i class="fas fa-comment-dots"></i> Academic & general English classes</li>
                    <li><i class="fas fa-graduation-cap"></i> TOEFL, IELTS, Duolingo prep</li>
                    <li><i class="fas fa-headset"></i> Native speaker workshops</li>
                </ul>
            </div>

            <div class="offer-card">
                <h3><i class="fas fa-university"></i> College & University Applications</h3>
                <ul>
                    <li><i class="fas fa-search"></i> Tailored school/program selection</li>
                    <li><i class="fas fa-file-alt"></i> Help with personal statements & letters</li>
                    <li><i class="fas fa-hand-holding-usd"></i> Scholarship & financial aid support</li>
                </ul>
            </div>

            <div class="offer-card">
                <h3><i class="fas fa-passport"></i> Visa & Travel Planning</h3>
                <ul>
                    <li><i class="fas fa-file-signature"></i> Visa prep & interview coaching</li>
                    <li><i class="fas fa-plane-departure"></i> Travel checklists & bookings</li>
                    <li><i class="fas fa-users"></i> Family support & documentation</li>
                </ul>
            </div>

            <div class="offer-card">
                <h3><i class="fas fa-hands-helping"></i> Airport & Local Installation</h3>
                <ul>
                    <li><i class="fas fa-taxi"></i> Airport pickup</li>
                    <li><i class="fas fa-home"></i> Housing support</li>
                    <li><i class="fas fa-sim-card"></i> Help with SIM, banking, transport</li>
                </ul>
            </div>

            <div class="offer-card">
                <h3><i class="fas fa-users-cog"></i> Mentorship Program</h3>
                <ul>
                    <li><i class="fas fa-user-friends"></i> Connect with African students</li>
                    <li><i class="fas fa-brain"></i> Guidance on academics & life</li>
                    <li><i class="fas fa-heart"></i> Peer motivation & support</li>
                </ul>
            </div>

        </div>
    </section>

    {{-- ready to take first step section --}}
    <section class="cta-section">
        <div class="cta-card">
            <h2>Ready to Take the First Step?</h2>
            <p>
                Let us help you achieve your dream. Whether you’re in high school or already planning
                to apply, Edu-X is your partner for a smooth and successful transition.
            </p>
            <div class="cta-buttons">
                <a href="/search" class="stepbtn primary-btn">Join Our Program</a>
                <a href="/student-register" class="stepbtn secondary-btn">Register Yourself</a>
            </div>
        </div>
    </section>

    {{-- empowering section --}}
    <section class="mission-vision-modern">
        <div class="mv-container">
            <h2 class="mv-main-heading">
                Empowering African Students Through<br />
                <span class="accent">Connection, Guidance, and Inspiration</span>
            </h2>

            <div class="mv-section">
                <div class="mv-flex-cards">
                    <div class="mv-glass-card">
                        <div class="mv-icon-circle">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3 class="mv-subheading">Our Mission</h3>
                        <p>
                            To ensure that every African student studying in North America feels supported, understood,
                            and
                            guided—not just academically, but culturally, emotionally, and socially—through a strong
                            mentorship
                            network.
                        </p>
                    </div>

                    <div class="mv-glass-card">
                        <div class="mv-icon-circle">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <h3 class="mv-subheading">Our Vision</h3>
                        <p>
                            A future where African students thrive in global classrooms—not only by earning diplomas,
                            but by
                            becoming confident leaders, engaged citizens, and empowered contributors to their
                            communities.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <div class="dropdwn">
        <img src="{{ asset('images/happy-student-girl_.avif') }}" style="height: 500px; width: 400px;">


        <div class="dropdown-container">
            <h2>The Easiest Way to Study Abroad</h2>

            <div class="dropdown">
                <div class="dropdown-line" onclick="toggleDropdown(this)">
                    <span>1. Answer a few questions</span>
                    <span class="dropdown-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="dropdown-content">
                    We'll find the best study programs tailored to you. Just take 3 minutes to answer a few questions about
                    your education goals, interests, preferred countries, and academic background. The more we know, the
                    better we can match you.
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-line" onclick="toggleDropdown(this)">
                    <span>2. Select a program</span>
                    <span class="dropdown-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="dropdown-content">
                    Explore hundreds of universities and colleges around the world. Filter by program type, tuition cost,
                    location, and language of instruction. EduX makes comparison easy so you can confidently choose your
                    ideal program.
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-line" onclick="toggleDropdown(this)">
                    <span>3. Submit your best application</span>
                    <span class="dropdown-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="dropdown-content">
                    We'll review your documents to ensure nothing is missing. Our system checks your application quality and
                    completeness before submission. If we notice any gaps or errors, you’ll get notified right away.
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-line" onclick="toggleDropdown(this)">
                    <span>4. Financial assistance</span>
                    <span class="dropdown-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="dropdown-content">
                    Access financial tools like Guaranteed Investment Certificates (GICs) or apply for an EduX Student Loan.
                    We help you understand costs and connect you with resources to reduce your financial burden while
                    studying abroad.
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-line" onclick="toggleDropdown(this)">
                    <span>5. Payment processing support</span>
                    <span class="dropdown-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="dropdown-content">
                    With Flywire, you can pay tuition and other fees quickly, securely, and in your local currency. You'll
                    get verification and peace of mind that your funds are delivered correctly and on time to the
                    institution.
                </div>
            </div>

            <div class="dropdown">
                <div class="dropdown-line" onclick="toggleDropdown(this)">
                    <span>6. Visa support</span>
                    <span class="dropdown-icon"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="dropdown-content">
                    Going through visa applications can be overwhelming. EduX and our trusted partner One Vasco provide
                    end-to-end support for submitting visa documents, scheduling interviews, and preparing for your journey
                    abroad.
                </div>
            </div>
        </div>



    </div><br>


    <!-- Hero Section -->
    {{-- <div class="hero" id="Personalized">
        <div class="navbar-brand">
            <img src="{{ asset('images/edu-x white.png') }}" alt="Edu-X Logo">
        </div>
        <hr class="css-fysqf">
        <div class="hero-text">
            Get Matched With Your<br>
            Personalized Programs Today
        </div>
        <button class="hero-button"><a href="/search">Start your journey</a></button>
    </div> --}}

    <!-- Dream Destination Section -->
    {{-- <section class="destinations-section">
        <h2>Study In Your Dream Destination</h2>
        <br>
        <br>
        <div class="destinations">
            <div class="destination-card">
                <img src="{{ asset('images/study_in_canada_a597130e72.webp') }}" alt="Canada">
                <div class="destination-title">Study in Canada</div>
                <button><a href="/search">Explore →</a></button>
            </div>
            <div class="destination-card">
                <img src="{{ asset('images/study_in_united_kingdom_9f95e16c5a.webp') }}" alt="UK">
                <div class="destination-title">Study in UK</div>
                <button><a href="/search">Explore →</a></button>
            </div>
            <div class="destination-card">
                <img src="{{ asset('images/study_in_united_states_e03dac4af2.webp') }}" alt="US">
                <div class="destination-title">Study in the US</div>
                <button> <a href="/search">Explore →</a></button>
            </div>
            <div class="destination-card">
                <img src="{{ asset('images/study_in_australia_eaced99bc7.webp') }}" alt="Australia">
                <div class="destination-title">Study in Australia</div>
                <button> <a href="/search">Explore →</a></button>
            </div>
        </div>
    </section> --}}



    {{-- <div class="stats-section">
        <div class="stat-box">
            <i class="fas fa-user"></i>
            <div class="stat-number">51m+</div>
            <div class="stat-label">unique visitors every year</div>
        </div>
        <div class="stat-box">
            <i class="fas fa-book"></i>
            <div class="stat-number">245,000+</div>
            <div class="stat-label">programmes listed globally</div>
        </div>
        <div class="stat-box">
            <i class="fas fa-building"></i>
            <div class="stat-number">3,500+</div>
            <div class="stat-label">featured institutions</div>
        </div>
    </div> --}}


    <!-- Dream Destination Section -->
    <section class="destinations-section">
        <h2>Find Your Study Program Here!</h2>
    </section>



    <div class="card-bottom">
        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/institutions.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Bachelors Degrees</h5>
                <p class="card-text-student">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                <a href="/search" class="btn">Find a Bachelor degree</a>
            </div>
        </div>
        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/partner.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Master's Degrees</h5>
                <p class="card-text-student">This card has supporting text below as a natural lead-in to additional
                    content.This content is a little bit longer.</p>
                <a href="/search" class="btn">Find a Master's degree</a>
            </div>
        </div>
        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/student.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Online Programs & Degrees</h5>
                <p class="card-text-student">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first .</p>
                <a href="/search" class="btn">Find an online degree</a>
            </div>
        </div>

        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/partner1.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">PhD Research Degrees</h5>
                <p class="card-text-student">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first .</p>
                <a href="/search" class="btn">Find a PhD program</a>
            </div>
        </div>
    </div>
     <!-- testimonial -->
    <div class="testimonial-section">
        <h2 class="testimonials-heading">What Our Students & Mentors Say</h2>

        <div class="testimonial-slider-wrapper">
            <div class="slider-track" id="sliderTrack">
                <!-- Slide 1 -->
                <div class="testimonial-slide">
                    <i class="fas fa-hand-holding-heart icon"></i>
                    <p class="testimonial-text">“My mentor helped me find housing, prepare for my first class, and even
                        navigate campus jobs. It made my transition so much smoother.”</p>
                    <p class="testimonial-author">— Fatou, student in Ottawa</p>
                </div>

                <!-- Slide 2 -->
                <div class="testimonial-slide">
                    <i class="fas fa-user-graduate icon"></i>
                    <p class="testimonial-text">“Being a mentor is the most fulfilling thing I do. I feel like I’m
                        giving back and building the Africa of tomorrow.”</p>
                    <p class="testimonial-author">— Ismael, MBA graduate in Texas</p>
                </div>

                <!-- Add more slides if needed -->
            </div>
        </div>

        <!-- Dot navigation -->
        <div class="swiper-dots" id="swiperDots"></div>

    </div>


    <style>
        .card-text-student {
            /* margin-top: 14px; */
            display: flex;
            justify-content: center;
            align-items: center;
            /* width: 250px; */
        }


        .card-students {
            border: 1px solid #afacac;
            padding: 10px;
            width: 300px;
            /* Adjust width as needed */
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            text-align: center;
            padding-bottom: 25px;
        }

        .card-students:hover {
            transform: translateY(-5px);
        }

        .card-img-tops {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text-student {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function toggleDropdown(clickedHeader) {
            // Close all other dropdowns
            document.querySelectorAll('.dropdown').forEach(dropdown => {
                if (dropdown.querySelector('.dropdown-line') !== clickedHeader) {
                    dropdown.classList.remove('open');
                }
            });

            // Toggle the clicked dropdown
            clickedHeader.parentElement.classList.toggle('open');
        }
    </script>



    <script>
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const isExpanded = navbarCollapse.style.display === 'flex';
            navbarCollapse.style.display = isExpanded ? 'none' : 'flex';
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const slides = document.querySelectorAll(".testimonial-slide");
        const dotContainer = document.getElementById("swiperDots");
        let currentSlide = 0;

        // Create dots dynamically
        slides.forEach((_, index) => {
            const dot = document.createElement("span");
            dot.dataset.index = index;
            dotContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll("#swiperDots span");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
                dots[i].classList.toggle("active", i === index);
            });
        }

        dots.forEach(dot => {
            dot.addEventListener("click", () => {
                currentSlide = parseInt(dot.dataset.index);
                showSlide(currentSlide);
            });
        });

        // Optional: Auto slide
        setInterval(() => {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }, 5000);

        // Initial load
        showSlide(currentSlide);
    </script>
