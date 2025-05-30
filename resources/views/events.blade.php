@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/events.css') }}">
    <div class="mainnn">
        <div class="background">
            <div class="background-content">
                <h1>Edux Events</h1>
                <p>
                    Edu-X events offer crucial professional development and networking
                    opportunities, access to the latest industry insights, and so much
                    more. We also feature at other industry-leading events, meeting
                    and working with current and prospective partners across the
                    globe. Join us at an upcoming event to help define the future of
                    international education.
                </p>
            </div>
        </div><br><br><br>

        <div class="blue4">
            <div class="content1">
                <div>
                    <h1>Webinars by Edu-X</h1>
                    <p>
                        Receive expert advice, data insights, application tips, and much more, in Edu-X’s
                        live webinars. These are exclusively offered to empower our Recruitment Partners’
                        success.
                    </p>
                </div>

                <div class="btn175">
                    <a href="/webinar"><button>See Our Upcoming Webinar</button></a>
                </div>
            </div>
        </div><br><br><br>



        <div class="carousel">
            <div class="carousel-track">
                <img src="images/gallary1.jpg" alt="Image 1">
                <img src="images/gallary2.jpg" alt="Image 2">
                <img src="images/gallary3.jpg" alt="Image 3">
                <img src="images/gallary4.jpg" alt="Image 4">
                <img src="images/gallary5.jpg" alt="Image 5">
                <img src="images/gallary6.jpg" alt="Image 6">
                <img src="images/gallary7.jpg" alt="Image 7">
                <img src="images/gallary8.jpg" alt="Image 8">
                <img src="images/gallary9.jpg" alt="Image 9">
                <img src="images/gallary10.jpg" alt="Image 10">
                <img src="images/gallary11.jpg" alt="Image 11">
                <img src="images/gallary12.jpg" alt="Image 12">
                <img src="images/gallary13.jpg" alt="Image 13">
                <img src="images/gallary14.jpg" alt="Image 14">
                <img src="images/gallary15.jpg" alt="Image 15">

            </div>
        </div><br>


        <br><br>
        <div class="blue2">
            <div class="why-edux">
                <div>
                    <h1>Why Choose Edu-X?</h1>
                    <p>
                        Edu-X is more than an application platform. We empower people around the world to study abroad and
                        access the best education.
                    </p>

                    <br>
                    <a href="/webinar">
                        <button class="btn-second1">
                            <i class="fas fa-arrow-right" style="margin-right: 8px;"></i> Learn More About Us
                        </button>
                    </a>

                </div>
                <span class="imge">
                    {{-- <img src="images/img1.webp"> --}}
                </span>

                <span class="imge">
                    {{-- <img src="images/img2.webp" style="margin-top: 50px; height: 250px; width: 150px;"> --}}
                </span>
            </div>
        </div>




    </div>
    <br><br>


    <style>
        .content1 h1 {
            font-size: 30px;
            font-weight: bold;
        }
    </style>
