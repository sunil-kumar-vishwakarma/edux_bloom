@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')


    <style>
        /* Global styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .containerrrr {
            margin-top: 5%;
        }

        /* Background Header Section */
        .background-img {
            position: relative;
            overflow: hidden;
            padding: 150px 40px;
            text-align: center;
            color: white;
            z-index: 1;
        }

        .background-img::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('images/blog-page.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            filter: blur(3px);
            z-index: -1;
        }


        .abroad h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .abroad p {
            font-size: 1.2rem;
            max-width: 750px;
            margin: 0 auto;
            line-height: 1.6;
            margin-top: -10px;
        }

        /* Section Title */
        .service {
            text-align: center;
            margin: 50px 0 30px;
            padding: 0 40px;
        }

        .service h1 {
            font-size: 2.5rem;
            color: #222;
        }

        /* Cards Section Wrapper */
        .card18 {
            padding: 0 40px 60px;
            display: flex;
            justify-content: center;
        }

        /* Blog Cards Grid */
        #blogs-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            width: 100%;
            max-width: 1200px;
        }

        /* Individual Card */
        .card-blog {
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 12px;
            overflow: hidden;
            height: 100%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .card-blog:hover {
            transform: translateY(-5px);
        }

        /* Card Image */
        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Card Content */
        .card-body-blog {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            height: 100%;
        }

        .card-body-blog>p:first-child {
            font-weight: 500;
            color: #333;
            margin-bottom: 10px;
            font-size: 0.95rem;
        }

        .card-body-blog h5 {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 15px;
            color: #111;
        }

        .card-body-blog p {
            color: #555;
            font-size: 1rem;
            line-height: 1.5;
            flex-grow: 1;
        }

        /* Responsive Adjustments for Tablets */
        @media (max-width: 768px) {
            .containerrrr {
                margin-top: 15%;
            }

            .abroad h1 {
                font-size: 2.2rem;
            }

            .abroad p {
                font-size: 1rem;
            }

            .service h1 {
                font-size: 2rem;
            }

            .card18 {
                padding: 0 20px 40px;
            }

            .service {
                padding: 0 20px;
            }

            .background-img {
                padding: 60px 20px;
            }
        }

        @media (max-width: 1024px) {
            .containerrrr {
                margin-top: 15%;
            }
        }

        /* Smaller font and card size for screens under 1600px */
        @media (max-width: 1599px) {

            .abroad h1 {
                font-size: 2.5rem;
            }

            .abroad p {
                font-size: 1rem;
            }

            .service h1 {
                font-size: 2rem;
            }

            #blogs-cards {
                gap: 20px;
            }

            .card-img-top {
                height: 180px;
            }

            .card-body-blog {
                padding: 15px;
            }

            .card-body-blog h5 {
                font-size: 1.1rem;
            }

            .card-body-blog p,
            .card-body-blog>p:first-child {
                font-size: 0.9rem;
            }
        }
    </style>


    <div class="containerrrr">
        <div class="background-img">
            <div class="abroad">
                <h1>Edu-X Blog</h1>
                <p>
                    Tips, advice, and updates to help you across every step of the study abroad journey.
                </p><br>

            </div>
        </div>

        <div class="service" id="services">
            <h1>Recent Articles</h1><br>
        </div>


        <div class="card18">
            <div id=blogs-cards>
                @foreach ($blogs as $blog)
                    <div class="col">
                        <div class="card-blog">
                            <img src="{{ asset('public/storage/' . $blog->image) }}" class="card-img-top" alt="Blog Image">
                            <div class="card-body-blog">
                                {{ \Carbon\Carbon::parse($blog->published_date)->format('F d, Y') }}</p>
                                <br>
                                <h5>{{ $blog->title }}</h5>
                                <br>
                                {{-- <p><strong>Category:</strong> {{ $blog->category }}</p> --}}

                                <p>{{ Str::limit($blog->description, 250, '...') }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
