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
            <button type="button" class="btn btn-light"><a href="program1.html">Start your journey</a></button>
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

    <div class="dropdwn">
        <img src="{{ asset('images/student_card.webp') }}" style="height: 500px; width: 400px;">


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
    <div class="hero" id="Personalized">
        <div class="navbar-brand">
            <img src="{{ asset('images/edu-x white.png') }}" alt="Edu-X Logo">
        </div>
        <hr class="css-fysqf">
        <div class="hero-text">
            Get Matched With Your<br>
            Personalized Programs Today
        </div>
        <button class="hero-button"><a href="program1.html">Start your journey</a></button>
    </div>

    <!-- Dream Destination Section -->
    <section class="destinations-section">
        <h2>Study In Your Dream Destination</h2>
        <br>
        <br>
        <div class="destinations">
            <div class="destination-card">
                <img src="{{ asset('images/study_in_canada_a597130e72.webp') }}" alt="Canada">
                <div class="destination-title">Study in Canada</div>
                <button><a href="studycanada.html">Explore →</a></button>
            </div>
            <div class="destination-card">
                <img src="{{ asset('images/study_in_united_kingdom_9f95e16c5a.webp') }}" alt="UK">
                <div class="destination-title">Study in UK</div>
                <button><a href="studyinuk.html">Explore →</a></button>
            </div>
            <div class="destination-card">
                <img src="{{ asset('images/study_in_united_states_e03dac4af2.webp') }}" alt="US">
                <div class="destination-title">Study in the US</div>
                <button> <a href="studyinus.html">Explore →</a></button>
            </div>
            <div class="destination-card">
                <img src="{{ asset('images/study_in_australia_eaced99bc7.webp') }}" alt="Australia">
                <div class="destination-title">Study in Australia</div>
                <button> <a href="studyinaus.html">Explore →</a></button>
            </div>
        </div>
    </section>



    <div class="stats-section">
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
    </div>


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
                <a href="{{ route('explr_school_Programs') }}" class="btn btn-primary">Find a Bachelor degree</a>
            </div>
        </div>
        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/partner.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Master's Degrees</h5>
                <p class="card-text-student">This card has supporting text below as a natural lead-in to additional
                    content.This content is a little bit longer.</p>
                <a href="{{ route('explr_school_Programs') }}" class="btn btn-primary">Find a Master's degree</a>
            </div>
        </div>
        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/student.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Online Programs & Degrees</h5>
                <p class="card-text-student">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first .</p>
                <a href="{{ route('explr_school_Programs') }}" class="btn btn-primary">Find an online degree</a>
            </div>
        </div>

        <div class="card-students">
            <img class="card-img-tops" src="{{ asset('images/partner1.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">PhD Research Degrees</h5>
                <p class="card-text-student">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first .</p>
                <a href="{{ route('explr_school_Programs') }}" class="btn btn-primary">Find a PhD program</a>
            </div>
        </div>
    </div>
    <br><br><br>

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
