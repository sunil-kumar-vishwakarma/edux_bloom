@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>

    <br><br>

    <style>
        .navbar {
            background-color: #1652b4;
            padding: 10px 20px;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
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

        .navbar-brand img {
            height: 70px !important;
            width: auto;
        }

        /* Center navbar links on larger screens */
        .navbar-nav {
            gap: 15px;
        }

        .navbar-nav .nav-link {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 5px 15px;
            position: relative;
            font-size: 17px;
        }

        .navbar-nav .nav-link:hover::after {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: -8px;
            height: 2px;
            background-color: white;
            border-radius: 1px;
        }




        .navbar-toggler {
            border: none;
            /* Add a border to make it visible */
            background-color: blue;
            /* Set a background color */
            padding: 0.5rem;
            /* Add some padding */
            color: #000;
            /* Ensure the icon is visible */
        }

        /* Adjust the toggler icon */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='%23000'%3E%3Cpath d='M0 7h30v3H0zm0 7h30v3H0zm0 7h30v3H0z'/%3E%3C/svg%3E");
        }

        /* Buttons styling */
        .btn-custom {
            color: white;
            background-color: blue;
            font-weight: bold;
            border: 0.5px solid white;
            padding: 8px 20px;
            margin: 5px;
            border-radius: 7px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: white;
            color: black;
        }


        #down {
            transform: translateY(23px);
        }



        .navbar .container-fluid a p {
            font-family: 'Times New Roman', Times, serif;
            color: white;
            margin: 5px;
            font-weight: 550;
            padding-left: 10px;

        }



        .dropdown-Menu a {
            text-decoration: none;
        }

        .dropdown-btn {
            text-decoration: none;
        }


        .dropdown-menu {
            padding-top: -400px;
            position: absolute;
            top: 80%;
            left: 0;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            width: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 10;
            /*color:#2E2EFF;*/
        }

        .dropdown-item {
            padding: 5px 10px;
            cursor: pointer;
            color: #2E2EFF;
            text-align: left;
            font-weight: bold;
            padding-top: -10px;
        }

        .dropdown-item:hover {
            background-color: #f0f0f0;
        }


        #dropdownBtn {
            transform: translateY(-14px);

            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 5px 15px;
            position: relative;
            font-size: 15px;
            border: none;
            background-color: #1652b4;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            ;
        }


        #dropdownMenu a {
            text-decoration: none;
        }




        .d-flex a {
            background-color: blue;
            color: white;
            font-weight: 550;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }



        .footer {
            background-color: #1652b4;
            color: white;
            padding: 40px 0;
        }

        .footer ul li a {
            display: inline-block;
        }

        .footer-column h2 {
            font-weight: 550;
            margin-left: 32px;
            font-size: larger;
        }

        .footer p {
            color: white;
        }


        .footer-column .line ul li a {
            font-weight: 550;
            font-size: larger;
        }

        .footer-column .line h3:hover,
        .footer-column .line ul li a:hover {
            text-decoration: underline;

        }


        #firstcol li a {
            text-decoration: none;
        }

        .footer-column .line h3:hover,
        .footer-column .line ul li a:hover::after {

            position: absolute;
            left: 0;
            bottom: -20px;
            /* Distance between text and underline */
            width: 100%;
            height: 10px;
            background-color: #000;
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.3s ease;
        }

        .footer-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .footer-column {
            width: 100%;
            max-width: 270px;
            margin-bottom: 30px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
            margin-left: 30px;
        }

        .line-h3 {
            text-decoration: none;
            color: #fff;
        }

        .footer-column p,
        .footer-column ul {
            margin-bottom: 15px;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .country-section h1 {
            color: #212529 !important;
        }


        .social-icons a {
            color: white;
            font-size: 24px;
            text-decoration: none;
            transition: color 0.3s color 0.3s;
            padding: 0px 6px;

        }

        .line2 ul li a:hover {
            text-decoration: underline;
            color: #fff;
        }

        .li .social-icons {
            display: flex;
            gap: 10px;
        }


        .social-icons a:hover {

            background-color: #fff;
            /* Background color on hover */
            color: #003399;

        }


        .copyright {
            padding: 2px;
            margin-top: 50px;
            margin-left: 43%;

        }



        .head {
            width: 50%;
            background-image: url('images/Group-4368.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 500px;
            height: 400px;
            margin-left: 50%;
            margin-top: 50px;
            margin-bottom: 40px;
        }

        .text {
            width: 35%;
            display: flex;
            flex-direction: column;
            text-align: justify;
            margin-left: 10%;
            margin-top: -380px;
            justify-content: center;
        }

        .text h1 {
            font-size: 35px;
            max-width: 354px;
            font-weight: 550;
        }

        .text button {
            height: 40px;
            width: 150px;
            background-color: #b92151;
            color: white;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 20px;
        }

        .text button:hover {
            background-color: #b92151 !important;
        }

        .journey-section {
            text-align: center;
            font-family: Arial, sans-serif;
            padding: 40px;
            margin-top: 50px;
        }

        .journey-section h2 {
            font-size: 24px;
            color: #333;
        }

        .journey-section h2 span {
            font-size: 24px;
        }

        .journey-steps {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .step {
            text-align: center;
            max-width: 265px;
        }

        .icon {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .step h3 {
            font-size: 17px;
            color: #333;
            margin: 10px 0;
        }

        .step p {
            font-size: 14px;
            color: #666;
        }

        .step a {
            color: #1a73e8;
            text-decoration: none;
        }



        .benefits-section {
            background: linear-gradient(135deg, #0644a6, #3b7ded);
            color: #292E3E;
            padding: 50px 20px;
            text-align: center;
            justify-content: center;
            align-items: center;
        }

        .benefits-content h1 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #fff;
        }

        .pargraphhhh {
            text-align: center;
            color: #efeded;
            white-space: nowrap;
            /* margin-left: 420px; */
        }

        .benefits-content p {
            font-size: 1.2em;
            font-weight: 400;
            margin-bottom: 30px;

        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 100px;
        }

        .card-institutions {
            background-color: white;
            color: black;
            width: 250px;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-icon {
            width: 135px;
            height: 130px;
            margin-bottom: 15px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 33px;
        }

        .card-institutions h2 {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-institutions p {
            font-size: 1.1em;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: 550;
            color: #555;
            min-width: 100px;

        }


        .success-Story {
            margin-top: 30px;
            justify-content: center;
            text-align: center;
            align-items: center;
        }

        .success-Story h1 {
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 28px;
        }

        .success-Story .video2 video {
            display: inline;
            height: 200px;
            width: auto;

        }

        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            margin-top: 60px;
        }

        .container1 h1 {
            font-size: 26px;
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 10px;
            max-width: 900px;
            width: 100%;
        }

        .card-container .card-institutions {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 200px;
            margin-left: 170px;
        }

        .card-container .icon img {
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
        }

        .card-container h3 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card-container p {
            font-size: 0.9em;
            color: #666;
        }

        .card-container .cta {
            margin-top: 20px;
        }

        .cta button a {
            text-decoration: none;
            color: white;
            font-size: 35px;
            font-weight: bold;
        }

        .cta button {
            height: 80px;
            width: 400px;
            background-color: #0065ff;
            color: #fff;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 40px;
        }

        .cta button:hover {
            background-color: #004bbd;
        }

    .working {
    display: flex;
    justify-content: center;
    align-items: center;
    /* min-height: 100vh; */
    /*background-color: #f5f5f5;*/
    padding: 20px;
    box-sizing: border-box;
}

.work h1 {
    margin-top: 80px;
    font-size: 35px;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-size: 35px;
}

.steps-container {
    max-width: 1200px;
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    text-align: center;
}

.step-card {
    display: flex;
    flex: 1 1 300px;
    background-color: #ffffff;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 20px;
    border: 2px solid #000000c2;
    border-radius: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.step-icon img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
}

.step-number {
    color: #007bff;
    font-weight: bold;
    margin-bottom: 10px;
}

.step-title {
    font-size: 1.2em;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.step-description {
    font-size: 0.98em;
    color: #151515;
    line-height: 1.5;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Base styles for large screens (already in place) */

/* Responsive styles for small laptops (1025px to 1366px) */
@media (min-width: 1025px) and (max-width: 1366px) {
    .steps-container {
        max-width: 85%;
        gap: 30px;
        justify-content: center;
    }
    .step-card {
        flex: 1 1 30%; /* roughly two cards per row with some margin */
        padding: 18px;
        border-radius: 25px;
    }
    .step-icon img {
        width: 70px;
        height: 70px;
        margin-bottom: 13px;
    }
    .step-title {
        font-size: 1.15em;
    }
    .step-description {
        font-size: 0.95em;
    }
    .work h1 {
        font-size: 32px;
        margin-top: 70px;
    }

     .card-container {
        max-width: 70%;
        gap: 16px;
    }

    .card-container .card-institutions {
        padding: 18px;
    }

    .card-container .icon img {
        width: 120px;
        height: 120px;
    }

    .card-container h3 {
        font-size: 1.1em;
    }

    .card-container p {
        font-size: 0.85em;
    }
     .card-container {
        max-width: 60%;
        gap: 16px;
    }

    .card-container .card-institutions {
        padding: 18px;
    }

    .card-container .icon img {
        width: 120px;
        height: 120px;
    }

    .card-container h3 {
        font-size: 1.1em;
    }

    .card-container p {
        font-size: 0.85em;
    }


}


/* Responsive for small laptops and below */
@media (max-width: 1024px) {
    .steps-container {
        gap: 25px;
        max-width: 90%; /* slightly smaller width */
        justify-content: center; /* center the items */
    }
    .step-card {
        flex: 1 1 45%; /* two cards per row */
        padding: 15px;
        border-radius: 20px;
    }
    .step-icon img {
        width: 60px;
        height: 60px;
        margin-bottom: 12px;
    }
    .step-title {
        font-size: 1.1em;
    }
    .step-description {
        font-size: 0.9em;
    }
    .work h1 {
        font-size: 28px;
        margin-top: 60px;
    }
}

/* Optional: further adjustments for tablets and smaller devices */
@media (max-width: 768px) {
    .steps-container {
        gap: 20px;
    }
    .step-card {
        flex: 1 1 100%; /* stack cards vertically */
    }
}





        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
            gap: 20px;
        }

        .buttons button {
            border-radius: 20px;
            border: none;
            font-size: 15px;
            font-weight: 500;

        }

        .buttons button:hover {
            background-color: #b92151;
            color: white;
        }

        .application {
            text-align: center;
            /*margin-top: 80px;*/
        }

        .application img {
            height: 400px;
            width: 1420px;
            margin: 0px 60px;
            border-radius: 15px;
        }

        .application h1,
        .work h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
            font-size: 26px;
            margin-bottom: 30px;
        }


        @media (max-width: 768px) {
            .steps-container {
                flex-direction: column;
                gap: 20px;
            }
        }

        .program {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 50px;
        }

        .program-logo {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
        }

        .plogo {
            display: flex;
            flex-direction: column;
            /* Stack icon above content */
            align-items: center;
            max-width: 300px;
            text-align: center;
            gap: 10px;
        }

        .plogo-icon img {
            width: 50px;
            height: 50px;
        }

        .plogo-content h3 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            max-width: 200px;
        }

        .plogo-content p {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
            max-width: 200px;
        }

        @media (max-width: 600px) {
            .program-logo {
                flex-direction: column;
                gap: 20px;
            }
        }

        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 700px;
            width: 100%;
        }

        .card-container .card-institutions {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 350px;
            margin-left: 250px;
            border: 0.5px solid black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card-container .icon img {
            width: 150px;
            height: 150px;
            margin-bottom: 15px;
        }

        .card-container h3 {
            font-size: 1.2em;
            color: #333;
            margin-bottom: 10px;
        }

        .card-container p {
            font-size: 0.9em;
            color: #666;
        }

        .card-container .cta {
            margin-top: 20px;
        }

        .cta button {
            background-color: #0065ff;
            color: #fff;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .cta button:hover {
            background-color: #004bbd;
        }

        .container1 h1 {
            justify-content: center;
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .global {
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 40px;
        }

        .global h1 {
            font-weight: bold;
            font-size: 26px;
        }

        .gmap {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .global .score h3 {
            color: #007bff;
            font-size: 30px;
            font-weight: bold;
        }

        .container3 {
            max-width: 840px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .section-title {
            color: var(--primary-text);
            text-align: center;
            font-size: 40px;
            font-family: "Cormorant Garamond";
            font-weight: bold;
            line-height: 48px;
            margin-bottom: 52px;

        }

        .testimonial-section {
            padding: 82px 15px;
            background-color: #3972e3;
            margin-top: 200px;
            height: fit-content;
        }

        .testimonial-section h2 {
            color: white;
            font-size: 35px;
        }

        .swiper-slide {
            text-align: center;
            border-radius: 20px;
            padding: 30px;
            background: var(--primary-text);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--white-text-white);
            min-height: 300px;
            /* Ensure all slides have the same minimum height */
            justify-content: space-between;
            height: 100%;
            /* This ensures that all slides expand to the same height */
        }


        .testimonial-items .testimonial-text {
            font-size: 16px;
            font-family: "Outfit";
            max-width: 330px;
            margin-bottom: 20px;
            min-height: 50px;
            /* Ensure consistent height for the text */
            margin-left: 30%;
        }

        .testimonial-text {
            color: white;
        }

        .testimonial-items .testimonial-title {
            font-size: 16px;
            font-family: "Outfit";
            font-weight: bold;
            margin-top: px;

        }

        .testimonial-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            margin-bottom: 20px;
            margin-left: 42%;
        }


        .testimonial-img.tm-img-1 {
            background-image: url(https://w7.pngwing.com/pngs/646/829/png-transparent-avatar-man-ico-icon-cartoon-little-boy-avatar-cartoon-character-png-material-child-thumbnail.png);
        }

        .testimonial-img.tm-img-2 {
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2IYhSn8Y9S9_HF3tVaYOepJBcrYcd809pBA&s);
        }

        .testimonial-img.tm-img-3 {
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2IYhSn8Y9S9_HF3tVaYOepJBcrYcd809pBA&s);
        }

        .testimonial-img.tm-img-4 {
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2IYhSn8Y9S9_HF3tVaYOepJBcrYcd809pBA&s);
        }

        .testimonial-img.tm-img-5 {
            background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2IYhSn8Y9S9_HF3tVaYOepJBcrYcd809pBA&s);
        }

        .swiper-pagination-bullet-active {
            background: white;

        }


        .card1 {
            display: flex;
            justify-content: flex-end;
            justify-content: start;
            margin-left: 100px;
            margin-top: -37%;
            border: 1px solid black;

        }

        .card1 .card-institutions {
            width: 450px;
            padding: 20px;
            border: 1px solid black;
        }

        .card1 button {
            color: white;
            border: none;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: lighter;

        }



        .login-form {
            width: 50%;
            background-color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            border: none;
            /* height:auto; */
            transform: translateY(-680px);
        }

        .illustration {
            width: 60%;
            background-image: url('images/School-Footer_Illustration.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 400px;
            height: 700px;
            margin-left: 60%;
            margin-top: 30px;
        }

        .social-buttons button {
            border-radius: 10px;
            border: #240606 solid;
        }

        .partnership {
            margin-top: 80px;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .partnership .upper {
            color: #0065ff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }

        .partnership h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: bold;
        }

        .partnership p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
        }


        .choices__input {
            width: 300px;
            /* Adjust the width to your preference */
            padding: 10px;
            font-size: 16px;
        }

        /* Adjust the width of the dropdown container */
        .choices__list {
            width: 60%;
            /* Ensure the dropdown list has the same width */
        }

        /* Optional: If you want the dropdown to stretch to the container's width */
        .choices {
            width: 80%;
            /* This will make the dropdown field take up the full width of the parent container */
        }

        /* Style the dropdown menu */
        .choices__list {
            display: block;
            /* Make the list block-level to stack each item */
        }



        /* Optional: Hover effect to highlight items */
        .choices__item--highlighted {
            background-color: #f0f0f0;
        }

        /* Optional: Style the selected item */
        .choices__item--selected {
            background-color: #007BFF;
            color: white;
        }

        .choices {
            width: 400px;
            /* Set this to the desired width */
            max-width: 100%;
            /* Ensures it doesn’t overflow in smaller containers */
        }

        /* Optional: Increase the width of the dropdown list */
        .choices__list--dropdown .choices__list {
            width: 400px;
            /* Matches the dropdown field width */
            max-width: 100%;
        }

        /* Adjust the input field to match the new width */
        .choices__input {
            width: 100%;
            /* Fill the width of the container */
        }



        /* Container styling */
        .login-container {
            display: flex;
            align-items: flex-start;
            /* Aligns the items at the start */
            gap: 20px;
            /* Adds space between the image and form */
            max-width: 1000px;
            /* Adjust the container's width */
            margin: 0 auto;
            /* Centers the container horizontally */
            /* margin-top: -320%; */
        }

        /* Left side (image) styling */
        .left-side {
            flex: 1;
            /* Takes up 1 part of the available space */
        }

        .left-side .image {
            width: 100%;
            /* Makes the image take up the full width of the left side */
            height: auto;
            /* Maintains the aspect ratio */
            max-width: 400px;
            /* Adjusts the maximum width of the image */
        }

        /* Right side (form) styling */
        .right-side {
            flex: 1.5;
            /* Takes up more space than the image side */
        }

        form {
            display: flex;
            flex-direction: column;

            gap: 10px;
        }

        label {
            font-weight: normal;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .login-container input,
        select,
        textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f7fafd;
            width: 103%;
            /* Full width for each input field */
        }



        .login-container textarea {
            resize: vertical;
            /* Allow resizing only vertically */
        }

        .login-container select {
            width: 100%;
            /* Full width for select dropdown */
        }

        .checkbox-container {
            display: flex;
            flex-direction: column;
            /* Stack checkbox and label vertically */
            align-items: left;
            /* Center-aligns the checkbox and label */
            gap: 4px;
        }

        .checkbox-container input[type="checkbox"] {
            width: 16px;
            height: 16px;
            transform: translateY(33px);
        }

        .checkbox-container label {
            font-size: 16px;
            text-align: center;
            transform: translateX(30px);
        }

        .right-side p {
            margin-top: 30px;
            max-width: 600px;
            justify-content: start;
            text-align: center;
            align-items: center;

        }

        .right-side button {
            width: 100px;
            height: 50px;
        }

        .right-side button a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }


        .box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: stretch;
            max-width: 1200px;
            margin: 50px auto;
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Form section */
        .form-container {
            flex: 1;
            padding: 40px;
            background-color: #f9f9f9;
        }

        .form-container h2 {
            font-size: 28px;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
            color: #444;
        }

        input,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        input:focus,
        select:focus {
            border-color: #007BFF;
            outline: none;
        }

        #contactForm .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
            /* space between checkbox and label */
            margin-bottom: 20px;
        }

        #contactForm .checkbox-group input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #007BFF;
        }

        #contactForm .checkbox-group label {
            margin: 0;
            color: #444;
            font-weight: normal;
            font-size: 15px;
            cursor: pointer;
        }


        /* Error messages */
        .error {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
            display: none;
        }

        /* Submit button */
        .btn-submit {
            background-color: #007BFF;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        /* Right Image Section */
        .image-container-institution {
            flex: 1;
            background: linear-gradient(135deg, #007BFF, #00c6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .image-container-institution img {
            width: 90%;
            max-width: 400px;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 30px 40px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            border-radius: 16px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            position: relative;
        }

        .close-btn {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: #e74c3c;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .box-container {
                flex-direction: column;
            }

            .image-container-institution {
                order: -1;
                padding: 20px;
            }

            .form-container {
                padding: 30px 20px;
            }
        }



        @media (max-width: 768px) {

            /* General Body Styles */
            body,
            html {
                padding: 0;
                margin: 0;
            }

            /* Head Section */
            .head {
                width: 100%;
                height: 250px;
                margin-left: 0;
                margin-top: 113px;
                background-size: cover;
                background-position: center;
            }

            .text {
                width: 80%;
                margin-left: 10%;
                margin-top: 50px;
                text-align: center;
            }

            .text h1 {
                font-size: 30px;
            }

            .text button {
                width: 120px;
                height: 40px;
                font-size: 14px;
            }

            /* Journey Section */
            .journey-section {
                display: none;
            }

            .cta button {
                width: 324px;
                border-radius: 10px;
            }


            .checkbox-group input {
                margin-right: 58px;
            }

            input#checkbox1 {
                margin-left: -46px;
            }


            button.btn-submit {
                margin-left: -20px;
                width: 300px;
            }


            .global p {
                padding: 20px;
            }

            .gmap img {

                display: none;
            }

            /* Benefits Section */
            .benefits-section {
                padding: 20px;
                margin-top: 30px;

            }

            .benefits-content h1 {
                font-size: 1.5em;
            }


            .cards {
                display: block;
                margin-left: 40px;
            }

            .card-institutions {
                width: 90%;
                margin-bottom: 20px;
                height: 200px;
            }

            .card-icon {
                width: 100px;
                height: 100px;
                margin-left: 50px;
            }

            .card-institutions h2 {
                font-size: 1.3em;
            }

            .card-institutions p {
                font-size: 1em;
            }

            /* Success Story Section */
            .success-Story h1 {
                font-size: 20px;
            }

            .success-Story .video2 video {
                height: 150px;
                width: 100%;
            }

            /* Container for Content */
            .container1 {
                padding: 0 10px;

            }

            .container1 h1 {
                font-size: 20px;
            }

            .container1 p {
                font-size: 16px;
            }

            /* Program Section */
            .program-logo {
                flex-direction: column;
                gap: 20px;
            }

            .plogo {
                max-width: 100%;
                text-align: center;
            }

            .plogo-icon img {
                width: 40px;
                height: 40px;
            }

            .plogo-content h3 {
                font-size: 16px;
            }

            .plogo-content p {
                font-size: 12px;
            }

            /* Card container for Mobile */
            .card-container {
                display: block;
                max-width: 100%;
            }

            .card-container .card-institutions {
                width: 80%;
                height: 300px;
                margin-left: 30px;
            }

            .card-container .card-institutions p {
                font-size: 13px;
            }

            /* Application Section */
            .application img {
                width: 100%;
                height: auto;
                display: flex;
                margin: auto;
            }

            .application h1 {
                font-size: 1.5em;
            }

            /* Login Section */
            .login-container {
                flex-direction: column;
                align-items: center;
            }

            .left-side .image {
                width: 80%;
                height: auto;
            }



            .right-side {
                flex: 1;
                margin-top: 20px;
            }

            .login-container input,
            .login-container select,
            .login-container textarea {
                width: 100%;
            }

            .login-form {
                width: 90%;
                padding: 20px;
            }

            /* Partnership Section */
            .partnership h1 {
                font-size: 24px;
            }

            .partnership p {
                font-size: 16px;
            }

            /* Global Section */
            .global h1 {
                font-size: 23px;
            }

            .global img {
                /* width: 60%;
                                    margin-left: 0; */
                display: none;
            }

            .global .score {
                display: flex;
                flex-direction: column;
                margin-left: 57px;
                gap: -13px;
                /* margin-top: 550px; */
                align-items: center;
                justify-content: center;
                /*margin-bottom: -135px;*/

            }

            .global .score h3 {
                font-size: 25px;
            }

            */ .global p {
                font-size: 14px;
                gap: 10px;
            }

            /* Testimonial Section */
            .testimonial-section {
                padding: 40px 10px;
            }

            .testimonial-section h2 {
                font-size: 28px;
            }

            .swiper-slide {
                padding: 15px;
                min-height: 250px;
            }

            .testimonial-items .testimonial-text {
                font-size: 14px;
            }

            .testimonial-items .testimonial-title {
                font-size: 14px;
            }

            .testimonial-img {
                width: 80px;
                height: 80px;
            }

            /* Card Styling for Small Screens */
            .card1 {
                margin-left: 0;
                margin-top: 20px;
            }

            .card1 .card-institutions {
                width: 100%;
                margin-left: 0;
            }


            .form-group {
                width: 246px;
            }

            .contactForm {
                padding: 20px;
                width: 100%;
            }


            input#checkbox1 {
                margin-left: 171px;
            }

            .checkbox-group input {
                margin-right: 287px;
            }
        }



        /* Media Queries */

        /* For Large Desktop/Laptop (1200px and above) */
        @media (min-width: 1200px) {
            .application img {
                height: 400px;
                width: 1140px;
                margin: 0px 60px;
            }



            .text p {
                font-size: 1.25rem;
            }

            .journey h2 {
                font-size: 26px;
                /* max-width: 354px; */
                font-weight: 550;
            }

            .journey-steps {
                gap: 20px;
            }

            .step h3 {
                font-size: 16px;
            }

            .step p {
                font-size: 13px;
            }

        }

        /* For Large Laptop / Tablet Landscape (1024px to 1199px) */
        @media (max-width: 1199px) and (min-width: 1024px) {
            .text h1 {
                font-size: 2.5rem;
            }

            .text p {
                font-size: 1.125rem;
            }

            .journey h2 {
                font-size: 2.25rem;
            }

            .journey-steps {
                gap: 20px;
            }

            .step h3 {
                font-size: 1.2rem;
            }

            .step p {
                font-size: 0.8rem;
            }

            .connector i {
                font-size: 2.25rem;
            }

            .cta button {
                padding: 10px 25px;
                font-size: 0.9rem;
            }
        }

        /* For Tablet / Small Laptop (768px to 1023px) */
        @media (max-width: 1023px) and (min-width: 768px) {
            .container1 {
                padding: 30px;
            }

            .container1 h1 {
                font-size: 2rem;
            }

            .container1 p {
                font-size: 1rem;
            }

            .card-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }

            .card-institutions {
                width: 45%;
                /* Adjust width for smaller screens */
                padding: 15px;
            }

            .card-institutions h3 {
                font-size: 1.1rem;
            }


            .text {
                max-width: 100%;
                margin-left: 25px;
                width: 365px;
            }

            /*.cta button {*/
            /*    padding: 10px 25px;*/
            /*    font-size: 0.9rem;*/
            /*}*/
        }


        /* For Tablet Portrait and Mobile (480px to 767px) */
        @media (max-width: 767px) and (min-width: 480px) {
            .text h1 {
                font-size: 1.75rem;
            }

            .text p {
                font-size: 0.95rem;
            }

            .text button {
                font-size: 0.85rem;
                padding: 8px 20px;
            }

            .journey h2 {
                font-size: 1.75rem;
            }

            .journey-steps {
                flex-direction: column;
                gap: 10px;
            }

            .step {
                max-width: 100%;
            }

            .step h3 {
                font-size: 0.875rem;
            }

            .step p {
                font-size: 0.575rem;
            }

            .connector {
                font-size: 1.75rem;
            }

            .connector i {
                font-size: 2rem;
            }
        }


        @media (max-width: 991px) {
            .navbar-nav {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .d-flex {
                justify-content: center;
                flex-direction: column;
                align-items: center;
                gap: 10px;
                margin-top: 10px;
            }

            @media (max-width: 991px) {
                .buttons {
                    /*margin-left: 80px;*/
                }


            }

            @media (max-width: 991px) and (min-width: 768px) {
                .navbar-nav {
                    flex-direction: row;
                    justify-content: center;
                    gap: 20px;
                }

                .d-flex {
                    gap: 15px;
                }

                .pargraphhhh {
                    margin-left: 30px;
                }

                .application img {

                    margin: 30px;
                }

            }

            @media (max-width: 767px) {
                .navbar-nav {
                    flex-direction: column;
                    align-items: center;
                    gap: 10px;
                }

                .d-flex {
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;
                    gap: 10px;
                    margin-top: 10px;
                }

                /* Navbar toggle button */
                .navbar-toggler {
                    border: none;
                    background-color: transparent;
                }

                /* Hide nav-links on mobile until toggle is clicked */
                .navbar-collapse {
                    display: none;
                }

                .navbar-collapse.show {
                    display: block;
                }
            }





            @media only screen and (max-width: 600px) {

                /* General body adjustments */
                body {
                    font-size: 14px;
                    margin: 0;
                    padding: 0;
                    overflow-x: hidden;
                    /* Prevent horizontal scroll */
                }

                /* Navbar */
                .navbar {
                    display: flex;
                    flex-direction: column;
                    align-items: flex-start;
                    padding: 10px;
                    width: 100%;
                }

                .navbar-brand img {
                    width: 80px;
                    /* Adjust logo size */
                    height: auto;
                }

                .navbar-nav {
                    display: flex;
                    flex-direction: column;
                    width: 100%;

                }


                .card1 .card-institutions {
                    height: 500px;
                }

                .nav-item {
                    width: 100%;
                    text-align: center;
                    padding: 5px 0;
                }

                .d-flex {
                    text-align: center;
                    justify-content: center;
                }
            }

            @media only screen and (max-width: 600px) {

                /* Footer */
                .footer {
                    padding: 60px;
                    text-align: center;
                }

                .footer-links {
                    display: flex;
                    flex-direction: column;
                    gap: 10px;
                }

                .social-icons a {
                    display: inline-block;
                    margin: 0 5px;
                }

                .copyright {
                    margin-left: 80px;
                }

            }


            #firstcol li a:hover {
                text-decoration: none;
            }


    </style>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links and buttons -->
    <div class="collapse navbar-collapse" id="navbarNav">

    </div>






    <section class="head">

    </section>
    <div class="text">
        <h1>Be Seen by 100,000+ Students Every Month</h1>
        <p>Increase your global presence and the number of qualified students from a single, easy-to-use platform trusted by
            more than 1,500 institutions worldwide.</p>
        <button type="button" class="btn btn-primary" id="workWithUsBtn">Work With US</button>
    </div>
    <br><br>

    <section class="journey">
        <div class="journey-section">
            <h2>Your journey at a glance <span><i class="fa-solid fa-hand-point-down"></i></span></h2><br>
            <div class="journey-steps">
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></i></div>
                    <h3>Find a program</h3>
                    <p>Use our search to <a href="#">browse 81,000+ degrees</a> worldwide</p>
                </div>


                <div class="connector"><i class="fa-solid fa-arrow-right-long"></i></div>
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-graduation-cap"></i></div>
                    <h3>Get a scholarship</h3>
                    <p>We give out <a href="#">$32,000 in scholarships</a> every year - apply for one today!</p>
                </div>

                <i class="fa-solid fa-arrow-right-long"></i>
                <div class="connector"></div>
                <div class="step">
                    <div class="icon"><i class="fa-solid fa-phone"></i></div>
                    <h3>Talk to universities</h3>
                    <p>Sign up for our <a href="#">FREE virtual events</a> to speak to universities</p>
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
    <br>
    <br>

    <section class="application">
        <h1>An Easy-to-Use Platform Built to<br> Deliver Quality Applications and More</h1>

        <img src="images/RP_Laptop-1536x864.png">
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

    <section class="global">
        <h1>Global Presence for Global Recruitment</h1>
        <br>
        <div class="gmap">

            <div class="score">
                <p>
                <h3 style="font-size:30px;">1,000+</h3>Globally</p><br>
                <p>
                <h3>200+ </h3>South Asia</p><br>
                <p>
                <h3>25+ </h3>South and East Asia,<br>African and Letin<br>America</p>
            </div>

            <div>

                <img src="images/Map.webp" height="500px" width="700px">
            </div>



        </div>
    </section>




    <!--</section>-->

    <!--<div id="workWithUsForm" class="form">-->
    <!--    <div class="box-container">-->
    <!-- Left Side: Form -->
    <!--        <div class="form-container">-->
    <!--            <h2>Connect with EduX</h2>-->
    <!--            <form id="contactForm">-->
    <!--                <div class="form-group">-->
    <!--                    <label for="country">Select Country *</label>-->
    <!--                    <select id="country" required>-->
    <!--                        <option value="">Choose...</option>-->
    <!--                        <option value="Afghanistan">Afghanistan</option>-->
    <!--                        <option value="Albania">Albania</option>-->
    <!--                        <option value="Algeria">Algeria</option>-->
    <!--                        <option value="Andorra">Andorra</option>-->
    <!--                        <option value="Angola">Angola</option>-->
    <!--                        <option value="Argentina">Argentina</option>-->
    <!--                        <option value="Armenia">Armenia</option>-->
    <!--                        <option value="Australia">Australia</option>-->
    <!--                        <option value="Austria">Austria</option>-->
    <!--                        <option value="Azerbaijan">Azerbaijan</option>-->
    <!--                        <option value="Bahamas">Bahamas</option>-->
    <!--                        <option value="Bahrain">Bahrain</option>-->
    <!--                        <option value="Bangladesh">Bangladesh</option>-->
    <!--                        <option value="Barbados">Barbados</option>-->
    <!--                        <option value="Belarus">Belarus</option>-->
    <!--                        <option value="Belgium">Belgium</option>-->
    <!--                        <option value="Belize">Belize</option>-->
    <!--                        <option value="Benin">Benin</option>-->
    <!--                        <option value="Bhutan">Bhutan</option>-->
    <!--                        <option value="Bolivia">Bolivia</option>-->
    <!--                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>-->
    <!--                        <option value="Botswana">Botswana</option>-->
    <!--                        <option value="Brazil">Brazil</option>-->
    <!--                        <option value="Brunei">Brunei</option>-->
    <!--                        <option value="Bulgaria">Bulgaria</option>-->
    <!--                        <option value="Burkina Faso">Burkina Faso</option>-->
    <!--                        <option value="Burundi">Burundi</option>-->
    <!--                        <option value="Cambodia">Cambodia</option>-->
    <!--                        <option value="Cameroon">Cameroon</option>-->
    <!--                        <option value="Canada">Canada</option>-->
    <!--                        <option value="Cape Verde">Cape Verde</option>-->
    <!--                        <option value="Central African Republic">Central African Republic</option>-->
    <!--                        <option value="Chad">Chad</option>-->
    <!--                        <option value="Chile">Chile</option>-->
    <!--                        <option value="China">China</option>-->
    <!--                        <option value="Colombia">Colombia</option>-->
    <!--                        <option value="Comoros">Comoros</option>-->
    <!--                        <option value="Congo">Congo</option>-->
    <!--                        <option value="Costa Rica">Costa Rica</option>-->
    <!--                        <option value="Croatia">Croatia</option>-->
    <!--                        <option value="Cuba">Cuba</option>-->
    <!--                        <option value="Cyprus">Cyprus</option>-->
    <!--                        <option value="Czech Republic">Czech Republic</option>-->
    <!--                        <option value="Denmark">Denmark</option>-->
    <!--                        <option value="Djibouti">Djibouti</option>-->
    <!--                        <option value="Dominica">Dominica</option>-->
    <!--                        <option value="Dominican Republic">Dominican Republic</option>-->
    <!--                        <option value="Ecuador">Ecuador</option>-->
    <!--                        <option value="Egypt">Egypt</option>-->
    <!--                        <option value="El Salvador">El Salvador</option>-->
    <!--                        <option value="Estonia">Estonia</option>-->
    <!--                        <option value="Ethiopia">Ethiopia</option>-->
    <!--                        <option value="Fiji">Fiji</option>-->
    <!--                        <option value="Finland">Finland</option>-->
    <!--                        <option value="France">France</option>-->
    <!--                        <option value="Gabon">Gabon</option>-->
    <!--                        <option value="Gambia">Gambia</option>-->
    <!--                        <option value="Germany">Germany</option>-->
    <!--                        <option value="Ghana">Ghana</option>-->
    <!--                        <option value="Greece">Greece</option>-->
    <!--                        <option value="Guatemala">Guatemala</option>-->
    <!--                        <option value="Haiti">Haiti</option>-->
    <!--                        <option value="Honduras">Honduras</option>-->
    <!--                        <option value="Hungary">Hungary</option>-->
    <!--                        <option value="Iceland">Iceland</option>-->
    <!--                        <option value="India">India</option>-->
    <!--                        <option value="Indonesia">Indonesia</option>-->
    <!--                        <option value="Iran">Iran</option>-->
    <!--                        <option value="Iraq">Iraq</option>-->
    <!--                        <option value="Ireland">Ireland</option>-->
    <!--                        <option value="Israel">Israel</option>-->
    <!--                        <option value="Italy">Italy</option>-->
    <!--                        <option value="Jamaica">Jamaica</option>-->
    <!--                        <option value="Japan">Japan</option>-->
    <!--                        <option value="Jordan">Jordan</option>-->
    <!--                        <option value="Kazakhstan">Kazakhstan</option>-->
    <!--                        <option value="Kenya">Kenya</option>-->
    <!--                        <option value="Kuwait">Kuwait</option>-->
    <!--                        <option value="Laos">Laos</option>-->
    <!--                        <option value="Latvia">Latvia</option>-->
    <!--                        <option value="Lebanon">Lebanon</option>-->
    <!--                        <option value="Libya">Libya</option>-->
    <!--                        <option value="Lithuania">Lithuania</option>-->
    <!--                        <option value="Luxembourg">Luxembourg</option>-->
    <!--                        <option value="Madagascar">Madagascar</option>-->
    <!--                        <option value="Malaysia">Malaysia</option>-->
    <!--                        <option value="Maldives">Maldives</option>-->
    <!--                        <option value="Mexico">Mexico</option>-->
    <!--                        <option value="Monaco">Monaco</option>-->
    <!--                        <option value="Morocco">Morocco</option>-->
    <!--                        <option value="Nepal">Nepal</option>-->
    <!--                        <option value="Netherlands">Netherlands</option>-->
    <!--                        <option value="New Zealand">New Zealand</option>-->
    <!--                        <option value="Nigeria">Nigeria</option>-->
    <!--                        <option value="Norway">Norway</option>-->
    <!--                        <option value="Pakistan">Pakistan</option>-->
    <!--                        <option value="Peru">Peru</option>-->
    <!--                        <option value="Philippines">Philippines</option>-->
    <!--                        <option value="Poland">Poland</option>-->
    <!--                        <option value="Portugal">Portugal</option>-->
    <!--                        <option value="Qatar">Qatar</option>-->
    <!--                        <option value="Romania">Romania</option>-->
    <!--                        <option value="Russia">Russia</option>-->
    <!--                        <option value="Saudi Arabia">Saudi Arabia</option>-->
    <!--                        <option value="Singapore">Singapore</option>-->
    <!--                        <option value="South Africa">South Africa</option>-->
    <!--                        <option value="South Korea">South Korea</option>-->
    <!--                        <option value="Spain">Spain</option>-->
    <!--                        <option value="Sri Lanka">Sri Lanka</option>-->
    <!--                        <option value="Sweden">Sweden</option>-->
    <!--                        <option value="Switzerland">Switzerland</option>-->
    <!--                        <option value="Thailand">Thailand</option>-->
    <!--                        <option value="Turkey">Turkey</option>-->
    <!--                        <option value="UAE">United Arab Emirates</option>-->
    <!--                        <option value="UK">United Kingdom</option>-->
    <!--                        <option value="USA">United States</option>-->
    <!--                        <option value="Vietnam">Vietnam</option>-->
    <!--                        <option value="Zambia">Zambia</option>-->
    <!--                        <option value="Zimbabwe">Zimbabwe</option>-->
    <!--                    </select>-->
    <!--                    <span class="error" id="countryError">Please select a country.</span>-->
    <!--                </div>-->

    <!--                <div class="form-group">-->
    <!--                    <label for="school">School Name *</label>-->
    <!--                    <input type="text" id="school" required>-->
    <!--                    <span class="error" id="schoolError">Please enter your school name.</span>-->
    <!--                </div>-->

    <!--                <div class="form-group">-->
    <!--                    <label for="firstName">First Name *</label>-->
    <!--                    <input type="text" id="firstName" required>-->
    <!--                    <span class="error" id="firstNameError">Please enter your first name.</span>-->
    <!--                </div>-->

    <!--                <div class="form-group">-->
    <!--                    <label for="lastName">Last Name *</label>-->
    <!--                    <input type="text" id="lastName" required>-->
    <!--                    <span class="error" id="lastNameError">Please enter your last name.</span>-->
    <!--                </div>-->

    <!--                <div class="form-group">-->
    <!--                    <label for="email">Email *</label>-->
    <!--                    <input type="email" id="email" required>-->
    <!--                    <span class="error" id="emailError">Please enter a valid email.</span>-->
    <!--                </div>-->

    <!--                <div class="form-group">-->
    <!--                    <label for="title">Title *</label>-->
    <!--                    <input type="text" id="title" required>-->
    <!--                    <span class="error" id="titleError">Please enter your title.</span>-->
    <!--                </div>-->

    <!--                <div class="form-group">-->
    <!--                    <label for="phone">Phone Number *</label>-->
    <!--                    <input type="tel" id="phone" required>-->
    <!--                    <span class="error" id="phoneError">Please enter a valid phone number.</span>-->
    <!--                </div>-->

    <!--                <div class="checkbox-group">-->
    <!--                    <input type="checkbox" id="checkbox1" required>-->
    <!--                    <label for="checkbox1">I agree to the privacy policy *</label>-->
    <!--                </div>-->
    <!--                <span class="error" id="checkboxError1">You must agree to proceed.</span>-->



    <!--                <button type="submit" class="btn-submit">Submit</button>-->
    <!--            </form>-->
    <!--        </div>-->

    <!-- Right Side: Image -->
    <!--        <div class="image-container-institution">-->
    <!--            <img src="images/School-Footer_Illustration.webp" alt="EduX">-->
    <!--        </div>-->
    <!--    </div>-->

    <!-- Thank You Modal -->
    <!--    <div id="thankYouModal" class="modal">-->
    <!--        <div class="modal-content">-->
    <!--            <span class="close-btn" onclick="closeModal()">&times;</span>-->
    <!--            <p>Thank you for connecting with EduX! We will be with you very soon.</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
