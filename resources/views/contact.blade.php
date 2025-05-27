@extends('frontent.layouts.app')
@section('title', 'EduX | Student')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
        <style>
            body {
                margin: 0;
                font-family: 'Segoe UI', sans-serif;
                background: #f7f9fc;
                color: #333;
            }

            .container1 {
                max-width: 75rem;
                margin: auto;
                margin-top: 10%;
                padding: 2.5rem 1.25rem;
            }

            .container1 h1 {
                font-size: 2.25rem;
                margin-bottom: .625rem;
                color: black;
                text-align: center;
            }

            .contact-data {
                font-size: 1rem;
                text-align: center;
                max-width: 43.75rem;
                margin: 0 auto 2.5rem auto;
                color: #555;
            }

            .card-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(16.25rem, 1fr));
                gap: 1.25rem;
                margin-bottom: 2.5rem;
            }

            .contact-card {
                background: #fff;
                border-radius: .625rem;
                box-shadow: 0 .25rem .75rem rgba(0, 0, 0, 0.05);
                text-align: center;
                position: relative;
                padding: 1.25rem;
                transition: transform 0.3s ease;
            }

            .contact-card:hover {
                transform: translateY(-0.3125rem);
            }

            .mv-icon-circle {
                width: 4.375rem;
                height: 4.375rem;
                background: linear-gradient(135deg, #bb0e45, #ad0039);
                /* background: linear-gradient(90deg, #0644a6, #2764c5); */
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 24px auto;
                font-size: 1.75rem;
                color: white;
                box-shadow: 0 .3125rem .9375rem #f13775;
                line-height: 0;
                /* ADD THIS LINE */
            }


            .contact-card h4 {
                font-size: 1.125rem;
                margin-bottom: .625rem;
                /* color: #b92151; */
                color: black;
            }

            .contact-card a {
                color: #0644a6;
                text-decoration: none;
                font-weight: 500;
            }

            .contact-card hr {
                margin: .9375rem 0;
                border: none;
                border-top: .0625rem solid #eee;
            }

            .highlight {
                font-weight: bold;
            }

            .txt {
                font-size: .9375rem;
                color: #666;
                line-height: 1.6;
                text-align: justify;
                margin-bottom: 2.5rem;
            }

            .social-icons {
                text-align: center;
                margin-bottom: 1.875rem;
            }

            .social-icons a {
                font-size: 1.25rem;
                margin: 0 .625rem;
                color: #555;
                transition: color 0.3s ease;
            }

            .social-icons a:hover {
                color: #ad0039;
            }

            iframe {
                width: 100%;
                height: 28.125rem;
                border: none;
                border-radius: .625rem;
                box-shadow: 0 .25rem .75rem rgba(0, 0, 0, 0.05);
            }

            @media (max-width: 37.5rem) {
                .container1 {
                    margin-top: 20%;
                }

                .container1 h1 {
                    font-size: 1.75rem;
                }

                .contact-data {
                    font-size: .875rem;
                }

                .txt {
                    font-size: .875rem;
                }
            }

            @media (max-width: 64rem) {
                .container1 {
                    margin-top: 20%;
                }
            }
        </style>
    </head>

    <body>

        <div class="container1">
            <h1>Contact Us</h1>
            <p class="contact-data">
                Our dedicated team is always ready to support you. Whether you have a question, need guidance, or just want
                to say hello, feel free to connect with us anytime.
            </p>

            <div class="card-container">
                <div class="contact-card">
                    <div class="mv-icon-circle"><i class="fas fa-envelope"></i></div>
                    <h4>Email</h4>
                    <a href="mailto:help@Edu-X.com">help@Edu-X.com</a>
                    <hr />
                    <p>Please email us with your inquiries.</p>
                </div>

                <div class="contact-card">
                    <div class="mv-icon-circle"><i class="fas fa-comments"></i></div>
                    <h4>Live Chat<br><small>[For registered users only]</small></h4>
                    <a href="/student-login">Login</a>
                    <hr />
                    <p>Available 24/7</p>
                </div>

                <div class="contact-card">
                    <div class="mv-icon-circle"><i class="fas fa-globe fa-fw"></i></div>
                    <h4>Canada</h4>
                    <p class="highlight">Toll Free: <a href="tel:18449727759">1-844-972-7759</a></p>
                    <hr />
                    <p>Monday–Friday<br>9 AM–5:30 PM EST</p>
                </div>

                <div class="contact-card">
                    <div class="mv-icon-circle"><i class="fas fa-phone-alt"></i></div>
                    <h4>India</h4>
                    <p class="highlight">Toll Free: <a href="tel:18002083444">1-800-208-3444</a></p>
                    <hr />
                    <p>Available 24/7</p>
                </div>
            </div>

            <p class="txt">
                At Edu-X, we believe in delivering exceptional support and service. Whether you're exploring new educational
                opportunities or need help with an existing application, our team is here to provide prompt, reliable
                assistance. Reach out through any of our channels — we're just one message away!
            </p>

            <div class="social-icons">
                <a href="#" aria-label="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="#" aria-label="Facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="TikTok" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="#" aria-label="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4828259742403!2d-17.443674225074346!3d14.685266285811174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17324374a4171%3A0x53f6bf2f0180a813!2zQ2l0w6kgZGUgbOKAmcOJbWVyZ2VuY2U!5e0!3m2!1sen!2sin!4v1748340925727!5m2!1sen!2sin"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

                <br>
                <br>
                <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.1573880088945!2d-83.9760015173296!3d33.601220604563785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f44a5443459dfb%3A0x161c25d6b507f4fd!2s3337%20Salem%20Cove%20Dr%2C%20Conyers%2C%20GA%2030013%2C%20USA!5e0!3m2!1sen!2sin!4v1748340547066!5m2!1sen!2sin"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </body>

    </html>

@endsection
