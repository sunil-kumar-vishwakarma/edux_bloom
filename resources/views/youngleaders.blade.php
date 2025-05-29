@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="stylesheet" />

    <style>
        .student-hero {
            padding: 0px 40px 40px;
            background: linear-gradient(135deg, #e0f7ff, #ffffff);
            margin-top: 5%;
        }

        .hero-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1300px;
            margin: 0 auto;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
        }

        .hero-left {
            flex: 1 1 500px;
        }

        .hero-title {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-title span {
            background: linear-gradient(to right, #bb0e45, #ad0039);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-tagline {
            font-size: 1.3rem;
            font-weight: 600;
            color: #ad0039;
            margin-bottom: 16px;
        }

        .hero-description {
            font-size: 1rem;
            color: #444;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .hero-right {
            flex: 1 1 400px;
            position: relative;
            text-align: center;
        }

        .hero-right::before {
            content: '';
            position: absolute;
            top: -60px;
            right: -60px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, #00c6ff30 0%, transparent 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .app-mockup {
            width: 100%;
            max-width: 600px;
            z-index: 1;
            position: relative;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .section {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        .section-heading {
            font-size: 2rem;
            margin-bottom: 20px;
            display: inline-block;
            background: linear-gradient(to right, #bb0e45, #ad0039);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
        }

        .section-heading::after {
            content: '';
            display: block;
            height: 4px;
            width: 60px;
            background: linear-gradient(to right, #bb0e45, #ad0039);
            border-radius: 2px;
            margin-top: 8px;
        }

        .grid123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 30px;
        }

        .card123 {
            /* background: linear-gradient(145deg, #ffffff, #c5c6c9); */
            background: linear-gradient(90deg, #0644a6, #2764c5);
            border-radius: 16px;
            padding: 25px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
            text-align: center;
            transition: 0.3s;
        }

        .card123:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.08);
        }

        /* .card123 i {
                    font-size: 2.5rem;
                    color: #bb0e45;
                    margin-bottom: 10px;
                } */

        .mv-icon-circle {
            width: 70px;
            height: 70px;
            /* background: linear-gradient(135deg, #00c6ff, #0072ff); */
            background: linear-gradient(135deg, #bb0e45, #ad0039);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            font-size: 28px;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4);
        }

        .card123 h3 {
            font-size: 1.2rem;
            margin: 15px 0 10px;
            color: white;
        }

        .card123 p {
            font-size: 0.95rem;
            color: #fff;
            /* color: #444; */
            line-height: 1.5;
        }



        .swiper {
            width: 100%;
            padding: 40px 0;
        }

        .swiper-slide {
            /* background: #edecec; */
            background: linear-gradient(90deg, #0644a6, #2764c5);
            color: #fff;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.05);
            text-align: center;
            font-size: 0.95rem;
            max-width: 100%;
            margin: 0 auto;
        }

        iframe {
            width: 100%;
            height: 500px;
            border: none;
            border-radius: 12px;
        }

        .application-section {
            background: #f9fbfe;
            padding: 80px 20px;
            border-top: 1px solid #e0e6f0;
        }

        .application-container {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.05);
        }


        .application-heading {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin: 0 auto 20px auto;
            background: linear-gradient(to right, #bb0e45, #ad0039);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }




        .application-subheading {
            text-align: center;
            font-size: 1.125rem;
            color: #555;
            margin-bottom: 40px;
        }

        .application-form {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .form-row {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .full-width {
            width: 100%;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }

        .form-input,
        .form-select,
        .form-textarea {
            padding: 14px 16px;
            border: 1px solid #ccc;
            border-radius: 12px;
            font-size: 1rem;
            transition: border 0.3s ease;
            font-family: 'Inter', sans-serif;
            background: #fefefe;
            resize: none;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            outline: none;
            border-color: #5795f8;
            box-shadow: 0 0 0 3px rgba(87, 149, 248, 0.3);
        }

        .form-textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-submit {
            text-align: center;
            margin-top: 20px;
        }

        .btn-submit {
            /* background: linear-gradient(to right, #0644a6, #5795f8); */
            background: linear-gradient(to right, #bb0e45, #ad0039);
            border: none;
            padding: 14px 40px;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            /* background: #022e7d; */
            transform: scale(1.03);
        }

        .heading-title {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 60px;
            font-weight: 700;
            color: #111;
        }

        .heading-title span {
            background: linear-gradient(to right, #bb0e45, #ad0039);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
        }

        .paragraph-text {
            font-size: 1.1rem;
            line-height: 1.5;
            color: #333;
            max-width: 1100px;
            margin: 0 auto 1.5rem auto;
            text-align: justify;
            font-family: 'Open Sans', sans-serif;
        }


        /* Responsive */
        @media (max-width: 768px) {
            .form-row {
                flex-direction: column;
            }
        }


        @media (max-width: 768px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
            }

            .hero-title {
                font-size: 2.2rem;
            }

            .hero-tagline {
                font-size: 1.1rem;
            }

            iframe {
                height: 220px;
            }
        }
    </style>


    <section class="student-hero">
        <div class="hero-container">
            <div class="hero-left">
                <h1 class="hero-title">Edu-X <span>Young Leaders</span></h1>
                <p class="hero-tagline">Your Journey to Young Leaders Starts Here</p>
                <p class="hero-description">Empowering Africa’s future change-makers through leadership, mentorship, and
                    global opportunities.</p>
            </div>
            <div class="hero-right">
                <img src="https://i.ibb.co/G4YTHSXm/business-person-building-black-creative-Photoroom.png"
                    alt="EduBloom App Mockup" class="app-mockup" />
            </div>
        </div>
    </section>

    <section class="section" data-aos="fade-up">
        <h1 class="heading-title">What Is <span>the Young Leaders Program?</span></h1>

        <p class="paragraph-text">The Edu-X Young Leaders program is a launchpad for passionate students in Africa who want
            to make an impact.
            We support you with tools, training, and mentorship to succeed in high school and beyond—locally and globally.
        </p>

        <p class="paragraph-text">Our mission is to equip future changemakers with the academic, social, and emotional
            skills they need to thrive
            in an increasingly competitive and interconnected world.</p>

        <p class="paragraph-text">Through a carefully designed curriculum, students explore leadership, innovation, global
            citizenship, and
            personal growth—all while building a strong academic foundation.</p>

        <p class="paragraph-text">Participants gain exclusive access to workshops, one-on-one coaching, and opportunities to
            connect with
            universities, professionals, and peers across Africa, North America, and beyond.</p>

        <p class="paragraph-text">Whether you're dreaming of studying abroad, launching a community project, or excelling in
            your national exams,
            the Young Leaders program provides the roadmap and the support to help you reach your goals.</p>

        <p class="paragraph-text">We believe every student has a voice that deserves to be heard. With Edu-X, you’ll learn
            how to use yours to
            lead, inspire, and create lasting change—starting today.</p>
    </section>


    <section class="section" data-aos="fade-up">
        {{-- <h2 class="section-heading">What You’ll Gain</h2> --}}
        <h1 class="heading-title">Edu-X <span>Young Leaders</span></h1>
        <div class="grid123">
            <div class="card123" data-aos="zoom-in">
                <div class="mv-icon-circle">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h3>Academic Mentorship</h3>
                <p>One-on-one guidance to help you excel academically and prepare for global universities.</p>
            </div>
            <div class="card123" data-aos="zoom-in" data-aos-delay="100">
                <div class="mv-icon-circle">
                    <i class="fas fa-globe-africa"></i>
                </div>
                <h3>Global Exposure</h3>
                <p>Join exchange programs, virtual conferences, and workshops with students from around the world.</p>
            </div>
            <div class="card123" data-aos="zoom-in" data-aos-delay="200">
                <div class="mv-icon-circle">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Leadership Skills</h3>
                <p>Lead projects in your community and gain real-world leadership experience.</p>
            </div>
            <div class="card123" data-aos="zoom-in" data-aos-delay="300">
                <div class="mv-icon-circle">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Internship Pathways</h3>
                <p>Access internships in youth-focused industries locally and abroad.</p>
            </div>
            <div class="card123" data-aos="zoom-in" data-aos-delay="400">
                <div class="mv-icon-circle">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>EduBloom App</h3>
                <p>Use the EduBloom app to track progress, connect with mentors, and explore opportunities.</p>
            </div>
        </div>
    </section>

    <section class="section" data-aos="fade-up">
        <h1 class="heading-title">Watch <span>the Program in Action</span></h1>
        {{-- <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe> --}}

        <iframe src="https://player.vimeo.com/video/1083129107?h=ff2a5bb1a0&autoplay=1&muted=1&loop=1&background=1"
            allow="autoplay; allowfullscreen;" title="EduX Video">
        </iframe>

        <script src="https://player.vimeo.com/api/player.js"></script>


    </section>

    <section class="section" data-aos="fade-up">
        <h1 class="heading-title">Hear from <span>Our Young Leaders</span></h1>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">"Edu-X gave me confidence and a clear path to study in Canada. Amazing
                    mentors!"<br><strong>- Amina, Nigeria</strong></div>
                <div class="swiper-slide">"Thanks to the Young Leaders program, I led my first community
                    initiative."<br><strong>- John, Kenya</strong></div>
                <div class="swiper-slide">"The EduBloom app keeps me organized and inspired. Highly
                    recommend!"<br><strong>- Fatou, Senegal</strong></div>
            </div>
        </div>
    </section>

    <section class="application-section" id="application">
        <div class="application-container">
            <h2 class="application-heading" data-aos="fade-up">Apply to Edu-X Young Leaders</h2>
            <p class="application-subheading" data-aos="fade-up" data-aos-delay="100">
                We’re excited to meet future leaders like you! Fill out the form below to start your journey.
            </p>
            <form class="application-form" action="#" method="POST" data-aos="fade-up" data-aos-delay="200">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-input" placeholder="Enter your name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input" placeholder="you@example.com"
                            required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" id="country" name="country" class="form-input"
                            placeholder="canada,us etc." required>
                    </div>
                    <div class="form-group">
                        <label for="level" class="form-label">Academic Level</label>
                        <select id="level" name="level" class="form-select" required>
                            <option value="">Select Level</option>
                            <option>High School</option>
                            <option>Gap Year</option>
                            <option>University</option>
                        </select>
                    </div>
                </div>
                <div class="form-group full-width">
                    <label for="message" class="form-label">Why do you want to join?</label>
                    <textarea id="message" name="message" class="form-textarea" rows="5"
                        placeholder="Tell us about your aspirations..."></textarea>
                </div>
                <div class="form-submit">
                    <button type="submit" class="btn-submit">Submit Application</button>
                </div>
            </form>
        </div>
    </section>



    <!-- AOS & Swiper Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.mySwiper', {
            loop: true,
            autoplay: {
                delay: 5000,
            },
        });
    </script>


@endsection
