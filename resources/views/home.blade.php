@extends('frontent.layouts.app')
@section('title', 'EduX | Home ')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: "Open Sans", Sans-serif;
        }

        /* Hero Section */
        .hero-bannerr {
            margin-top: 5%;
            background: linear-gradient(135deg, #bb0e45 0%, #0644a6 70%);
            color: #fff;
            padding: 5rem 2rem 4rem;
            /* padding: 6rem 2rem 20rem; */
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-bannerr::after {
            content: "";
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(255, 255, 255, 0.08), transparent);
            animation: pulse 10s linear infinite;
            z-index: 0;
        }

        @keyframes pulse {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .hero-content-home {
            position: relative;
            z-index: 1;
        }

        .badge-home {
            background: #000;
            padding: 0.4rem 1.2rem;
            font-size: 0.8rem;
            display: inline-block;
            text-transform: uppercase;
            border-radius: 30px;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
        }

        .hero-bannerr h1 {
            font-size: 2.7rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .buttons-home {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 3rem;
        }

        .buttons-home i {
            margin-bottom: 3px;
        }

        .btn-home {
            /* padding: 0.75rem 1.5rem; */
            padding: 7px 1.8rem;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: #fff;
            color: #bb0e45;
            /* background: linear-gradient(135deg, #bb0e45, #ad0039); */
        }

        .btn-primary:hover {
            background: #f8f8f8;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        /* Cards Section */
        .cards-home {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 4rem 2rem;
            /* margin-top: -10%; */
            gap: 30px;
            /* background: #f2f2f2; */
        }

        .card-home {
            width: 300px;
            height: 450px;
            border-radius: 6px;
            overflow: hidden;
            position: relative;
            background: #000;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-home:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .card-home img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.9;
        }

        .card-home::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.6), transparent);
        }

        @media (max-width: 768px) {
            .hero-bannerr {
                margin-top: 15%;
            }

            .hero-bannerr h1 {
                font-size: 2rem;
            }

            .card-home {
                width: 90%;
                max-width: 320px;
            }
        }

        .practice-section {
            padding: 10px 20px;
            background-color: #ffffff;
            /* White background */
            font-family: 'Segoe UI', sans-serif;
        }

        .practice-section h2 {
            font-size: 26px;
            margin-bottom: 10px;
            text-align: center;
            font-weight: 750;
            color: black;
        }

        .practice-section .para {
            font-size: 18px;
            text-align: center;
            color: #444;
            margin-bottom: 40px;
        }

        /* .practice-title {
                                        font-size: 2.4rem;
                                        color: #000000;
                                        text-align: center;
                                        margin-bottom: 50px;
                                        font-weight: 700;
                                    } */

        .practice-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .practice-card {
            background: #ededed;
            padding: 25px 20px;
            border: 1px solid #eee;
            /* border-left: 5px solid #e60023;  */
            border-radius: 6px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            text-align: left;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .practice-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .practice-number {
            font-size: 2rem;
            color: #bb0e45;
            /* Primary Red */
            font-weight: bold;
            margin-bottom: 8px;
        }

        .practice-heading {
            font-size: 1.2rem;
            color: black;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .practice-card p {
            font-size: 0.95rem;
            color: #111;
            /* Tertiary Black */
            line-height: 1.6;
        }



        .section,
        .section2 {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 5rem 2rem;
            gap: 9rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section2 {
            flex-direction: row-reverse;
            gap: 11rem;
        }

        .image-stack,
        .image-stack2 {
            position: relative;
            width: 300px;
            height: 400px;
        }

        .image-stack img,
        .image-stack2 img {
            position: absolute;
            border-radius: 8px;
            object-fit: cover;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .image-stack img:nth-child(1) {
            width: 90%;
            z-index: 2;
            top: 0;
            left: 0;
        }

        .image-stack img:nth-child(2) {
            width: 70%;
            z-index: 1;
            top: 50px;
            left: 65%;
            opacity: 0.9;
        }

        .image-stack2 img:nth-child(1) {
            width: 70%;
            z-index: 1;
            top: 50px;
            left: -45%;
            opacity: 0.9;
        }

        .image-stack2 img:nth-child(2) {
            width: 90%;
            z-index: 2;
            top: 0;
            left: 0;
        }

        .text-content {
            max-width: 500px;
            margin-top: 50px;
        }

        .text-content h2 {
            font-size: 2rem;
            color: #222;
            margin-bottom: 1rem;
        }

        .text-content p {
            text-align: justify;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
            color: #666;
        }

        .btn-explore {
            padding: 0.75rem 2.5rem;
            background: linear-gradient(135deg, #bb0e45, #ad0039);
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            display: inline-block;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-explore:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }



        /* RESPONSIVE MEDIA QUERIES */
        @media (max-width: 992px) {

            .section,
            .section2 {
                flex-direction: column-reverse;
                align-items: center;
                gap: 3rem;
                padding: 2rem 1.5rem;
            }

            .image-stack,
            .image-stack2 {
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                gap: 1rem;
                position: static;
            }

            .image-stack img,
            .image-stack2 img {
                position: static;
                width: 100%;
                height: auto;
                object-fit: cover;
                box-shadow: none;
            }

            .image-stack img:nth-child(1),
            .image-stack img:nth-child(2),
            .image-stack2 img:nth-child(1),
            .image-stack2 img:nth-child(2) {
                width: 40%;
                border-radius: 8px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }

            .text-content {
                margin-top: 0;
                text-align: center;
            }

            .text-content h2 {
                font-size: 2.6rem;
            }

            .text-content {
                max-width: 730px;
            }

            .text-content p {
                font-size: 1.5rem;
                line-height: 1.5;
            }

            .btn {
                padding: 0.75rem 2rem;
                font-size: 1rem;
            }
        }


        @media (max-width: 576px) {

            .section,
            .section2 {
                flex-direction: column-reverse;
                align-items: center;
                gap: 3rem;
                padding: 2rem 1.5rem;
            }

            .image-stack,
            .image-stack2 {
                flex-direction: column;
                width: 100%;
                height: auto;
            }

            .image-stack img,
            .image-stack2 img {
                position: static;
                width: 100% !important;
                margin-bottom: 1rem;
            }

            .text-content p {
                font-size: 0.95rem;
                line-height: 1.6;
            }

            .btn {
                padding: 0.65rem 2rem;
            }
        }

        /* stat-section */

        .myapp-stats-section {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 6rem 5rem;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            flex-wrap: wrap;
        }

        .myapp-stat-box {
            text-align: center;
            margin: 1rem;
            min-width: 120px;
        }

        .myapp-stat-box h2 {
            font-size: 3rem;
            color: #bb0e45;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .myapp-stat-box p {
            font-size: 1rem;
            color: #555;
            margin: 0;
        }

        @media (max-width: 768px) {
            .myapp-stats-section {
                flex-direction: column;
                gap: 2rem;
            }

            .myapp-stat-box h2 {
                font-size: 2rem;
            }

            .myapp-stat-box p {
                font-size: 0.95rem;
            }
        }

        /* testimonial section */

        .myapp-testimonial-section {
            /* background-color: #1e1e1e; */
            background: linear-gradient(90deg, #0644a6, #2764c5);
            color: #fff;
            padding: 2rem 2rem;
            text-align: center;
        }

        .myapp-testimonial-section h2 {
            font-size: 2.2rem;
            margin-bottom: 2rem;
            color: #fff;
        }

        .myapp-slider-container {
            max-width: 900px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .myapp-testimonial-slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .myapp-testimonial {
            min-width: 100%;
            padding: 2rem;
            box-sizing: border-box;
        }

        .myapp-testimonial p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #ccc;
            margin-bottom: 1rem;
        }

        .myapp-testimonial .myapp-author {
            font-weight: bold;
            color: #fff;
            font-size: 1rem;
        }

        .myapp-stars {
            color: #ffcc00;
            font-size: x-large;
            margin-bottom: 0.8rem;
        }

        /* Dots */
        .myapp-dots {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
            gap: 0.5rem;
        }

        .myapp-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #555;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .myapp-dot.myapp-active {
            background-color: #fff;
        }

        @media (max-width: 768px) {
            .myapp-testimonial p {
                font-size: 1rem;
            }

            .myapp-dot {
                width: 10px;
                height: 10px;
            }
        }

        /* === Consultation Banner === */
        .consultation-banner {
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .consultation-overlay {
            background: url('https://i.ibb.co/5xSqFzdr/asian-businessman-sitting-car.jpg') center/cover no-repeat;
            /* background: rgba(0, 0, 0, 0.6); */
            padding: 5rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1100px;
            border-radius: 6px;
            backdrop-filter: blur(4px);
        }

        .consultation-text h2 {
            color: #ffffff;
            font-size: 1.75rem;
            margin: 0;
            font-weight: 600;
        }

        .consultation-text p {
            color: #ddd;
            font-size: 0.95rem;
            margin-top: 0.4rem;
        }

        .consultation-button {
            /* background: linear-gradient(to right, var(--primary), var(--secondary)); */
            background: linear-gradient(135deg, #bb0e45, #ad0039);
            padding: 0.8rem 1.6rem;
            color: #ffffff;
            font-weight: 600;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .consultation-button:hover {
            /* opacity: 0.9; */
            transform: translateY(-4px);
        }

        @media (max-width: 768px) {
            .consultation-overlay {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
                padding: 1.5rem;
            }

            .consultation-text h2 {
                font-size: 1.4rem;
            }

            .consultation-button {
                width: 80%;
            }
        }

        @media (max-width: 1024px) {
            .myapp-stats-section {
                padding: 6rem 3rem;
            }

            .consultation-button {
                width: 30%;
            }
        }

        /* === FAQ Section === */
        .faq-section {
            background-color: #ffffff;
            padding: 4rem 2rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: auto;
            gap: 3rem;
        }

        .faq-title {
            flex: 1 1 250px;
        }

        .faq-title h2 {
            font-size: 2.4rem;
            font-weight: 700;
            line-height: 1.3;
            margin: 0;
            color: #000000;
        }

        .faq-grid {
            flex: 2 1 600px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.8rem;
        }

        .faq-item {
            /* background: #fff; */
            padding: 1.4rem 1.2rem;
            background: #ededed7a;
            border-left: 4px solid #bb0e45;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        }

        .faq-item h3 {
            color: #bb0e45;
            font-size: 1rem;
            margin-bottom: 0.6rem;
        }

        .faq-item p {
            color: #444444;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        @media (max-width: 768px) {
            .faq-title h2 {
                font-size: 2rem;
            }

            .faq-item {
                padding: 1.2rem;
            }
        }
    </style>

    <!-- Hero -->
    <section class="hero-bannerr">
        <div class="hero-content-home">
            <div class="badge-home">Your Bridge to a World-Class Education</div>
            <h1>Turn Your Dream of Studying in The US or Canada
                <br> Into a Reality
            </h1>

            <div class="buttons-home">
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
                    {{-- <button type="submit" class="study-search-button">Search</button> --}}
                </form>
            </div>
            <div class="buttons-home">
                <a href="/search" class="btn-home btn-primary"><i class="fas fa-user-plus"></i> Join Our Program</a>
                <a href="/contactus" class="btn-home btn-secondary">Book a Free Consultation</a>
            </div>
        </div>
    </section>

    {{-- <section class="study-search-section">
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
    </section> --}}

    <!-- Cards -->
    <section class="cards-home">
        <div class="card-home">
            <img src="{{ asset('images/home3.png') }}" alt="Card 1">
        </div>
        <div class="card-home">
            <img src="{{ asset('images/vertical1.jpg') }}" alt="Card 2">
        </div>
        <div class="card-home">
            <img src="{{ asset('images/home2.png') }}" alt="Card 3">
        </div>
    </section>

    <!-- Practice Section -->
    <section class="practice-section">
        <h2 class="practice-title">Our 360° Student Support Journey</h2>
        <p class="para">From high school to university, we prepare African students to thrive, not just survive, abroad.
        </p>

        <div class="practice-grid">
            <div class="practice-card">
                <div class="practice-number">01</div>
                <h3 class="practice-heading">Early Academic Preparation</h3>
                <p>Enroll from high school, receive tailored academic counseling, and gain access to top preparatory
                    resources.</p>
            </div>

            <div class="practice-card">
                <div class="practice-number">02</div>
                <h3 class="practice-heading">English Language Training</h3>
                <p>Join online or in-person English courses, prepare for IELTS/TOEFL, and participate in conversation clubs
                    with native speakers.</p>
            </div>

            <div class="practice-card">
                <div class="practice-number">03</div>
                <h3 class="practice-heading">College Application Support</h3>
                <p>Develop a school selection strategy, get assistance with essays and documents, and receive guidance on
                    scholarships and financial aid.</p>
            </div>

            <div class="practice-card">
                <div class="practice-number">04</div>
                <h3 class="practice-heading">Visa & Travel Planning</h3>
                <p>Receive visa interview coaching, plan flights with a comprehensive travel checklist, and get support for
                    parents throughout the process.</p>
            </div>

            <div class="practice-card">
                <div class="practice-number">05</div>
                <h3 class="practice-heading">Arrival & Installation</h3>
                <p>Coordinate airport pickup, get help with housing setup, and organize essential documents such as bank
                    accounts, phones, and ID cards.</p>
            </div>

            <div class="practice-card">
                <div class="practice-number">06</div>
                <h3 class="practice-heading">Life & Career Development</h3>
                <p>Engage in campus activities, receive internship and career coaching, and connect with our global alumni
                    network.</p>
            </div>
        </div>

    </section>

    <section class="section">
        <div class="image-stack">
            <img src="{{ asset('images/home6.png') }}" alt="Front Image">
            <img src="{{ asset('images/home2.png') }}" alt="Back Image">
        </div>
        <div class="text-content">
            <h2>Discover and Explore a World of Knowledge</h2>
            <p>
                Immerse yourself in an unparalleled educational journey at our esteemed institution. Engage with a
                diverse curriculum that not only covers the core foundations of learning but also explores emerging
                global trends, interdisciplinary studies, and innovative methodologies. Our experienced educators are
                committed to nurturing critical thinking, creativity, and collaboration in every student.Discover a
                world where your curiosity is celebrated and your potential is limitless, excel in higher education and
                life beyond the classroom.
            </p>
            <a href="/student" class="btn-explore">Explore Student</a>
        </div>
    </section>

    <section class="section2">
        <div class="image-stack2">
            <img src="https://i.ibb.co/8qt3gm9/vertical-individual-portrait-african-american-600nw-2408548309.webp"
                alt="Back Image">
            <img src="https://i.ibb.co/G3vxSNBC/african-american-college-student-with-laptop-sunny-day-city-street-231208-5497.jpg"
                alt="Front Image">
        </div>
        <div class="text-content">
            <h2>Discover and Explore Edu-X Young Leaders</h2>
            <p>
                Empowering Africa’s future change-makers through a dynamic blend of leadership training, dedicated
                mentorship, and access to exclusive global academic and career-building opportunities. Our mission is to
                equip future changemakers with the academic, social, and emotional skills they need to thrive in an
                increasingly competitive and interconnected world.
                Through a carefully designed curriculum, students explore leadership, innovation, global citizenship,
                and personal growth—all while building a strong academic foundation.
            </p>
            <a href="/youngleaders" class="btn-explore">Explore Young Leaders</a>
        </div>
    </section>



    <section class="myapp-stats-section">
        <div class="myapp-stat-box">
            <h2>8000+</h2>
            <p>Students Helped</p>
        </div>
        <div class="myapp-stat-box">
            <h2>14000+</h2>
            <p>Programs Offered</p>
        </div>
        <div class="myapp-stat-box">
            <h2>50+</h2>
            <p>Institutions</p>
        </div>
        <div class="myapp-stat-box">
            <h2>01</h2>
            <p>Destination Country</p>
        </div>
    </section>


    <!-- Testimonial Section -->
    <section class="myapp-testimonial-section">
        <h2>What Our Students Say</h2>

        <div class="myapp-slider-container">
            <div class="myapp-testimonial-slider" id="myappTestimonialSlider">
                <div class="myapp-testimonial">
                    <div class="myapp-stars">★★★★★</div>
                    <p>"The faculty and curriculum truly helped me excel beyond the classroom. The learning environment
                        is top-notch."</p>
                    <div class="myapp-author">– Vishnu Rajput, PhD Scholar</div>
                </div>

                <div class="myapp-testimonial">
                    <div class="myapp-stars">★★★★★</div>
                    <p>"Every course pushed me to think deeper and grow smarter. I can't recommend this institution
                        enough!"</p>
                    <div class="myapp-author">– Aavesh Khan, B.Sc. Graduate</div>
                </div>

                <div class="myapp-testimonial">
                    <div class="myapp-stars">★★★★★</div>
                    <p>"From seminars to research support, everything here empowered me to follow my academic passions
                        confidently."</p>
                    <div class="myapp-author">– Sohit Tiwari, Class of 24</div>
                </div>
            </div>

            <!-- Dots -->
            <div class="myapp-dots" id="myappDotsContainer"></div>
        </div>
    </section>

    <!-- === Consultation Banner === -->
    <section class="consultation-banner">
        <div class="consultation-overlay">
            <div class="consultation-text">
                <h2>Edu-X Services—to bridge the gap for students.</h2>
                <p>Easy-to-Use · Find Programs
                    Faster · Data Driven Insights</p>
            </div>
            <a href="/contactus" class="consultation-button">Schedule a consultation</a>
        </div>
    </section>

    <!-- === FAQ Section === -->
    <section class="faq-section">
        <div class="faq-title">
            <h2>Frequently<br>Asked Questions</h2>
        </div>
        <div class="faq-grid">
            <div class="faq-item">
                <h3>Is there a free trial available?</h3>
                <p>Yes, we offer a free trial period of 14 days. During this time, you'll get access to all our premium
                    features.</p>
            </div>
            <div class="faq-item">
                <h3>How do I schedule a consultation?</h3>
                <p>Click the “Schedule a consultation” button above and pick a time that works for you from our online
                    calendar.</p>
            </div>
            <div class="faq-item">
                <h3>Can I cancel at any time?</h3>
                <p>Absolutely. You can cancel your subscription any time from your dashboard with no hidden fees.</p>
            </div>
            <div class="faq-item">
                <h3>Is support really 24/7?</h3>
                <p>Yes, our dedicated support team is available around the clock to assist you with anything you need.
                </p>
            </div>
        </div>
    </section>


    <script>
        const slider = document.getElementById('myappTestimonialSlider');
        const testimonials = document.querySelectorAll('.myapp-testimonial');
        const dotsContainer = document.getElementById('myappDotsContainer');
        let index = 0;

        // Create dots based on number of slides
        testimonials.forEach((_, i) => {
            const dot = document.createElement('div');
            dot.classList.add('myapp-dot');
            if (i === 0) dot.classList.add('myapp-active');
            dot.addEventListener('click', () => {
                index = i;
                updateSlider();
                resetAutoSlide();
            });
            dotsContainer.appendChild(dot);
        });

        const dots = document.querySelectorAll('.myapp-dot');

        function updateSlider() {
            slider.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach(dot => dot.classList.remove('myapp-active'));
            dots[index].classList.add('myapp-active');
        }

        function nextSlide() {
            index = (index + 1) % testimonials.length;
            updateSlider();
        }

        let slideInterval = setInterval(nextSlide, 5000);

        function resetAutoSlide() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }
    </script>

@endsection
