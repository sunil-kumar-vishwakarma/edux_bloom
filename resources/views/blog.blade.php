@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')


    <style>
        * {
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
            /* Prevent horizontal scroll */
            margin: 0;
            /* Remove any default margins */
            padding: 0;
            /* Remove any default padding */
        }

        .container {
            max-width: 100%;
            /* Ensure the container doesn't exceed the viewport width */
            margin: 0 auto;
            /* Center the content */
            padding: 0;
            /* Remove any extra padding */
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

#blogs-cards{
    display: flex;
    flex-wrap: wrap; 
    gap: 30px;
}

        .background-img {
            transform: translateY(100px);
            background-image: url('images/blog.webp');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 100%;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
            max-width: 100%;
        }

        .background-content h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .background-content p {
            font-size: 1.2em;
            max-width: 600px;
            line-height: 1.6;
            text-align: justify;
        }

        /* Abroad Section */
        .abroad {
            padding: 20px;
            text-align: center;
            margin-left: -20%;
        }

        .abroad p {
            max-width: 450px;
            color: white;
            font-size: 19px;
        }

        .abroad h1 {
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            margin: 0 auto;
        }

        .abroad button {
            background-color: white;
            color: blue;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 7px;
        }

        /* Service Section */
        .service {
            text-align: center;
        }

        .service h1 {
            font-size: 40px;
            font-weight: bold;
        }

        .service p {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
        }


        /* Image Card Fixes */
        .image-card {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .image-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-card:nth-child(1) {
            z-index: 3;
            transform: translateX(-50%);
        }

        .image-card:nth-child(2) {
            z-index: 2;
            transform: translateX(0%) translateY(20px);
        }

        .image-card:nth-child(3) {
            z-index: 1;
            transform: translateX(50%) translateY(40px);
        }



        /* Card Adjustments */
        .card18 {
            margin-left: 140px;
            margin-top: 400px;
        }

        #c1 {
            margin-left: 0px;
        }

        #c2 {
            margin-left: 0px;
        }



        ul {
            margin-top: 20px;
            color: black;
            list-style: disc;
            margin-left: 22px;
        }

        ul li::marker {
            color: blue;
            font-size: 1em;
        }


        .card18 .card-blog {
            height: 450px;
        }

        #lftt {
            margin-left: 61px;
        }


        .footer .footer-column h2,
        .footer .footer-column h3 {
            margin-left: 65px;
        }


        /* Mobile devices (portrait and landscape) */
        @media (max-width: 768px) {

            /* Navbar adjustments */
            .navbar {
                padding: 10px;
            }

            .navbar-brand img {
                height: 50px;
                width: 50px;
            }

            .navbar-nav {
                text-align: center;
                width: 100%;
            }

            .navbar-nav .nav-item {
                padding: 10px 0;
            }

            .dropdown-container {
                position: relative;
            }

            .dropdown-btn {
                width: 100%;
                text-align: center;
                padding: 10px;
            }

            .dropdown-menu {
                position: absolute;
                background-color: white;
                border-radius: 5px;
                width: 100%;
                top: 100%;
                left: 0;
                display: none;
                /* Ensures dropdown is hidden initially */
            }

            .dropdown-menu li {
                padding: 10px;
                text-align: center;
            }

            .background-img {
                height: 300px;
                /* Shortened background image height */
                transform: translateY(100px);
            }

            .background-content h1 {
                font-size: 1.8em;
                /* Reduced font size */
            }

            .background-content p {
                font-size: 1.1em;
                max-width: 80%;
            }

            .abroad {
                padding-left: 110px;
            }

            .abroad h1 {
                font-size: 1.8em;
                /* Reduced heading font size */
            }

            .abroad p {
                font-size: 1em;
                margin: 0 auto;
                max-width: 80%;
            }

            .service h1 {
                font-size: 2.2em;
                /* Adjust title font size */
            }

            .card18 {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 40px;
                /* Spacing between cards */
                margin-left: 390px;
                margin-top: 111px;
            }

            #c1 {
                margin-left: 0px;
            }

            /* #c2{
             transform: translateX(-163px);
          } */

            .card18 .col {
                flex: 0 0 100%;
                /* Make cards take full width on mobile */
                display: flex;
                justify-content: center;
                /* Center the cards horizontally */
                margin-bottom: 20px;
            }

            .card18 .card-blog {
                width: 100%;
                /* Make card take full width inside its container */
                max-width: 300px;
                /* Limit card width */
                margin: 0 auto;
                /* Center the card itself */
            }

            .card18 .card-img-top {
                height: 200px;
                object-fit: cover;
            }

            .card18 .card-body-blog {
                padding: 15px;
                text-align: center;
                /* Center text inside card body */
            }

            .card18 .card-body-blog p {
                font-size: 1rem;
                line-height: 1.4;
                white-space: nowrap;
                /* Prevent text from breaking into multiple lines */
                text-overflow: ellipsis;
                overflow: hidden;
            }

            .card18 .card-body-blog h6 {
                font-size: 1rem;
                color: #333;
                /* Ensure date text is readable */
                white-space: nowrap;
                /* Keep the date in a single line */
                overflow: hidden;
                text-overflow: ellipsis;
            }

            .image-card {
                width: 100%;
                height: 180px;
                /* Adjust card size for mobile screens */
            }

            .footer-column {
                margin-bottom: 20px;
                /* Space out the footer columns */
            }

            .footer-column ul {
                padding-left: 0;
            }

            .footer-column ul li {
                text-align: center;
                padding: 5px 0;
            }

            /* Adjust footer text */
            .footer .container1 {
                padding: 0 10px;
            }

            /*.footer .footer-column h2, .footer .footer-column h3{*/
            /*   transform:translateX(35px);*/
            /*}*/


            .footer .footer-column p {
                text-align: center
            }


            .footer-column .navbar-brand img {
                margin-left: 100px;
            }


            .copyright p {
                text-align: center;
                max-width: 300px;
                margin-left: -41px;
            }

            /* Card Text */
            .card-text a {
                font-size: 12px;
                max-width: 300px;
            }

            .card-body-blog h6 {
                font-size: 1rem;
            }

            /* Adjust the width of card image */
            .card-img-top {
                width: 100%;
            }
        }

        /* Larger mobile devices (landscape) */
        @media (max-width: 991px) {

            /* Reduce font size and adjust layout */
            .background-img {
                height: 350px;
            }

            .background-content h1 {
                font-size: 2.2em;
            }

            .abroad h1 {
                font-size: 2em;
            }

            .abroad p {
                font-size: 1.1em;
            }

            .service h1 {
                font-size: 2.8em;
            }

            .card18 .row {
                display: flex;
                /* Align the cards horizontally */
                justify-content: space-between;
                flex-wrap: wrap;
                /* Wrap cards to the next line when needed */
                padding: 0 10px;
                width: 500px;
                margin-left: 20px;
            }

            .card18 .col {
                flex: 0 0 48%;
                margin-bottom: 20px;
            }

            .card18 .card-blog {
                width: 100%;
                /* Ensure cards take full width of their column */
                margin: 0 auto;
            }

            .card18 .card-img-top {
                height: 200px;
                object-fit: cover;
            }

            .card18 .card-body-blog {
                padding: 15px;
            }

            .card18 .card-body-blog p {
                font-size: 1rem;
            }

            .card18 .card-body-blog h6 {
                font-size: 1rem;
            }

            .image-card {
                width: 100%;
                height: 220px;
            }

            .footer-column ul li {
                padding: 8px 0;
            }

            .footer-row {}

        }


        /* Tablet devices */
        @media (max-width: 1024px) {

            /* Navbar adjustments */
            .navbar {
                padding: 15px;
            }

            .navbar-brand img {
                height: 60px;
                /* Adjust logo size for tablet */
                width: 60px;
            }

            .navbar-nav {
                text-align: center;
                width: 100%;
            }

            .navbar-nav .nav-item {
                padding: 10px 0;
            }

            .dropdown-btn {
                width: 100%;
                text-align: center;
                padding: 12px;
            }

            .dropdown-menu {
                position: absolute;
                background-color: white;
                border-radius: 5px;
                width: 100%;
                top: 100%;
                left: 0;
                display: none;
                /* Ensure dropdown is hidden initially */
            }

            .background-img {
                height: 400px;
                /* Adjust background image height for tablets */
                transform: translateY(50px);
            }

            .background-content h1 {
                font-size: 2.2em;
            }

            .background-content p {
                font-size: 1.2em;
                max-width: 80%;
            }

            .abroad h1 {
                font-size: 2.2em;
            }

            .abroad p {
                font-size: 1.2em;
                max-width: 85%;
                margin: 0 auto;
            }

            .service h1 {
                font-size: 2.8em;
                /* Adjust font size for service section */
            }

            /* Card layout adjustments */
            .card18 {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                gap: 40px;
                /* Reduced gap between cards */
                margin-top: 66px;
                margin-left: 55px;
            }

            /* Style for the first two cards */
            .card18 .col {
                flex: 0 0 45%;
                /* Take up 48% width for the first two cards */
                margin-bottom: 20px;
            }

            /* Style for the third card */
            .card18 .col-third {
                flex: 0 0 100%;
                /* Make it full width */
                display: flex;
                justify-content: center;
                margin-top: 20px;
                /* Add margin to separate it from the first two */
            }

            .card18 .card-blog {
                width: 168%;
                margin: 0px -8px;
                border: 1px solid #ddd;
                /* Add a subtle border around the cards */
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                /* Subtle shadow for depth */
            }

            .card18 .card-img-top {
                height: 200px;
                /* Adjust card image size */
                object-fit: cover;
                border-top-left-radius: 8px;
                border-top-right-radius: 8px;
            }

            .card18 .card-body-blog {
                padding: 15px;
            }

            .card18 .card-body-blog p {
                font-size: 1rem;
                line-height: 1.5;
                color: #555;
                /* Slightly darker text for better readability */
            }

            .card18 .card-body-blog h6 {
                font-size: 1.1rem;
                color: #333;
                font-weight: bold;
            }

            /* Image card size adjustments */
            .image-card {
                width: 100%;
                height: 220px;
                object-fit: cover;
                border-radius: 8px;
            }

            .footer-column ul li {
                padding: 10px 0;
            }

            .footer-column .navbar-brand img {
                margin-left: 80px;
            }

            .copyright p {
                text-align: center;
                margin-left: 0;
            }
        }

        .card18 .card-blog {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin-bottom: 20px;
            transition: all .3sease-in-out;
            margin-top: -300px;
            height: 550px;
            width: 350px;
            padding-right: 10px;
        }

        .card18 .card-blog img {
            width: 260px;
            height: 130px;
        }

        /*.card18 img:hover {*/
        /*    -webkit-transform: scale(1.2);*/
        /*    transform: scale(1.2);*/
        /*    width: 88%;*/
        /*    object-fit: contain;*/
        /*}*/

        .card18 img {
            overflow: hidden;
            width: 85%;
            -webkit-transition: .3slinear;
            transition: all .3slinear;
            border: none;
            border-radius: 0;
            box-shadow: none;
            height: 100px;
        }

        .card-img-top {
            display: flex;
            width: 250px;
            height: 230px;
            object-fit: cover;
            border-radius: 50%;
            margin: 10px auto;
            border: 5px solid #fff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-body-blog {
            text-align: center;
        }

        .card-body-blog {
            flex: 1 1 auto;
            padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
            color: var(--bs-card-color);
        }


        .card-blog {
            --bs-card-spacer-y: 1rem;
            --bs-card-spacer-x: 1rem;
            --bs-card-title-spacer-y: 0.5rem;
            --bs-card-title-color: ;
            --bs-card-subtitle-color: ;
            --bs-card-border-width: var(--bs-border-width);
            --bs-card-border-color: var(--bs-border-color-translucent);
            --bs-card-border-radius: var(--bs-border-radius);
            --bs-card-box-shadow: ;
            --bs-card-inner-border-radius: calc(var(--bs-border-radius) -(var(--bs-border-width)));
            /* --bs-card-cap-padding-y: 0.5rem; */
            --bs-card-cap-padding-x: 1rem;
            --bs-card-cap-bg: rgba(var(--bs-body-color-rgb), 0.03);
            --bs-card-cap-color: ;
            --bs-card-height: ;
            --bs-card-color: ;
            --bs-card-bg: var(--bs-body-bg);
            --bs-card-img-overlay-padding: 1rem;
            /* --bs-card-group-margin: 0.75rem; */
            /* position: relative; */
            /* display: flex
        ; */
            /* flex-direction: column; */
            /* min-width: 0; */
            /* height: var(--bs-card-height); */
            /* color: var(--bs-body-color); */
            /* word-wrap: break-word; */
            /* background-color: var(--bs-card-bg); */
            /* background-clip: border-box; */
            /* border: var(--bs-card-border-width) solid var(--bs-card-border-color); */
            /* border-radius: var(--bs-card-border-radius); */
        }
        
        
        @media screen and (min-width: 1025px) {
    .card18 {
        margin-left: 50px;
        margin-top: 400px;
    }
}
    </style>



    <!-- <div class="container"> -->
    <div class="background-img">
        <div class="abroad">
            <h1>Edu-X Blog</h1>
            <br />
            <p>
                Tips, advice, and updates to help you across every step of the study abroad journey.
            </p><br>

        </div>
    </div>

    <div class="service" id="services">
        <h1>Recent Articles</h1><br>
    </div>


    <div class="card18">
        <div class="row-cols-1 row-cols-md-3 g-4" id=blogs-cards>
            @foreach ($blogs as $blog)
                <div class="col" style="flex: 1 0 30%; max-width: 30%;">
                    <div class="card-blog" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden;">
                        <img src="{{ asset('public/storage/' . $blog->image) }}" class="card-img-top" alt="Blog Image" style="width: 100%; height: 200px; object-fit: cover;">
                        <div class="card-body-blog" style="padding: 15px;">
                            <p style="font-weight: 500; color: black; "> {{ \Carbon\Carbon::parse($blog->published_date)->format('F d, Y') }}</p>
                            <br>
                            <h5 style="font-weight: bold; color: black; ">{{ $blog->title }}</h5>
                            <br>
                            {{-- <p style="color: #555;"><strong>Category:</strong> {{ $blog->category }}</p> --}}

                            <p>{{ Str::limit($blog->description, 250, '...') }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <!-- </div> -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
