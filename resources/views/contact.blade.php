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
                max-width: 1200px;
                margin: auto;
                margin-top: 10%;
                padding: 40px 20px;
            }

            .container1 h1 {
                font-size: 36px;
                margin-bottom: 10px;
                color: black;
                text-align: center;
            }

            .contact-data {
                font-size: 16px;
                text-align: center;
                max-width: 700px;
                margin: 0 auto 40px auto;
                color: #555;
            }

            .card-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
                gap: 20px;
                margin-bottom: 40px;
            }

            .contact-card {
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
                text-align: center;
                position: relative;
                padding: 20px;
                transition: transform 0.3s ease;
            }

            .contact-card:hover {
                transform: translateY(-5px);
            }

            .mv-icon-circle {
                width: 70px;
                height: 70px;
                /* background: linear-gradient(135deg, #00c6ff, #0072ff); */
                background: linear-gradient(90deg, #0644a6, #2764c5);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1.5rem auto;
                font-size: 28px;
                color: white;
                box-shadow: 0 5px 15px rgba(0, 114, 255, 0.4);
                line-height: 0;
                /* ADD THIS LINE */
            }


            .contact-card h4 {
                font-size: 18px;
                margin-bottom: 10px;
                /* color: #b92151; */
                color: black;
            }

            .contact-card a {
                color: #0644a6;
                text-decoration: none;
                font-weight: 500;
            }

            .contact-card hr {
                margin: 15px 0;
                border: none;
                border-top: 1px solid #eee;
            }

            .highlight {
                font-weight: bold;
            }

            .txt {
                font-size: 15px;
                color: #666;
                line-height: 1.6;
                text-align: justify;
                margin-bottom: 40px;
            }

            .social-icons {
                text-align: center;
                margin-bottom: 30px;
            }

            .social-icons a {
                font-size: 20px;
                margin: 0 10px;
                color: #555;
                transition: color 0.3s ease;
            }

            .social-icons a:hover {
                color: #b92151;
            }

            iframe {
                width: 100%;
                height: 450px;
                border: none;
                border-radius: 10px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            }

            @media (max-width: 600px) {
                .container1 {
                    margin-top: 20%;
                }

                .container1 h1 {
                    font-size: 28px;
                }

                .contact-data {
                    font-size: 14px;
                }

                .txt {
                    font-size: 14px;
                }
            }

            @media (max-width: 1024px) {
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.2130352260574!2d75.76998531045737!3d22.75747397927435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396301c61b0179b7%3A0x3414df2ba88c47cd!2sPitra%20Parvat!5e0!3m2!1sen!2sin!4v1731592751580!5m2!1sen!2sin"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </body>

    </html>

@endsection
