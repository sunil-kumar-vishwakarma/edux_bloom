@extends('frontent.layouts.app')
@section('title', 'EduX | Student Registration')
@section('content')
    <!-- <link
                  rel="stylesheet"
                  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
                <link
                  rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" /> -->

    <style>
       



      


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

        .container1 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .footer-column .line ul li a {
            font-weight: 550;
            font-size: larger;
        }




        .footer-column .line h3:hover,
        .footer-column .line ul li a:hover::after {

            position: absolute;
            left: 0;
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



        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            font-weight: bold;
            margin-left: 30px;
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

        .social-icons a {
            color: white;
            font-size: 24px;
            text-decoration: none;
            transition: color 0.3s color 0.3s;
            padding: 0px 6px;
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

        .footer .footer-column h2,
        .footer .footer-column h3 {
            margin-left: 42px;
        }



        .container1 {
            padding-left: 15px;
            /* Add some padding to left and right of container */
            padding-right: 15px;
        }





        body,
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }


        .card1-login {
            display: flex;
            justify-content: flex-end;
            justify-content: start;
            margin-left: 100px;
            margin-top: -45%;
            margin-bottom: 50px;
        }

        .card1-login .card-login {
            width: 450px;
            padding: 20px;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;


        }

        .card1-login button {
            color: white;
            border: none;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: lighter;

        }


        .login-container {
            display: flex;
            justify-content: space-between;
            height: 150vh;
        }

        .card-login {
            width: 40%;
            background-color: white;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .card-login h2 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .card-login input {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .card-login button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .card-login .social-buttons button {
            width: 100%;
            margin-bottom: 10px;
            background-color: #f5f5f5;
            color: #333;
        }

        .card-login .social-buttons i {
            margin-right: 10px;
        }

        .illustration {
            width: 60%;
            background-image: url('images/register.svg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 600px;
            height: 700px;
            margin-left: 50%;
        }

        .social-buttons button {
            border-radius: 10px;
            border: #240606 solid;
        }

        .card-login h2 {
            font-size: 25px;
            font-weight: bold;
            margin-left: 20px;
        }

        .checkbox1 input {
            transform: translateX(-63px);
        }

        .checkbox1 label {
            transform: translateY(-38px);
            margin-left: 18px;
        }

        .anchr small a {
            color: rgb(110, 108, 108);
            font-size: 16px;
            display: list-item;
            list-style: none;
        }

        .registr h3 {
            font-size: 18px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }


        .registr a {
            color: blue;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        .tc a {
            font-size: 15px;
        }


       


        @media (max-width: 576px) {

          

            /* Remove background image on mobile */
            .imag {
                display: none;
            }

            /* Card Styling */
            .card1-login .card-login {
                width: 100%;
                margin-right: 0;
                margin-top: 0;
            }

            .content {
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            /* Buttons adjustments */
            .buttons {
                flex-direction: column;
                gap: 10px;
            }

            .account button {
                width: 100%;
                margin-left: 0;
                margin-top: 15px;
                font-size: 14px;
                /* Adjust font size for smaller screens */
            }

            /* Input Icon (Eye button inside password field) */
            .input-icon .eye-icon {
                right: 10px;
                top: 50%;
                margin-left: 70%;
                transform: translateY(-50%);
            }

            .input-icon {
                position: relative;
                width: 100%;
                /* Ensure the input container takes full width */
            }

            .input-icon input {
                width: 100%;
                /* Make input field take full width */
                padding: 10px 40px;
                /* Add padding to avoid input text sticking to edges */
            }

            #password-input {
                max-width: 100%;
            }

            /* Footer adjustments */
            .footer-row {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-column {
                width: 100%;
                max-width: none;
                margin-bottom: 20px;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 16px;
                text-align: center;
            }

            .footer-column ul li a {
                font-size: 13px;
            }

            .footer {
                max-width: 100%;
            }

            .container1 {
                margin-left: -30px;
            }

            .copyright {
                margin-left: 35px;
            }
        }





        @media only screen and (max-width: 600px) {

            .styled-logo {
                height: 50px;
                /* Smaller height for tablets */
            }

           

            /* Footer */
            .footer {
                padding: 20px;
                text-align: center;
            }

            .footer-row {
                flex-direction: column;
                align-items: center;
            }

            .footer-column {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .footer-column h2,
            .footer-column h3 {
                font-size: 16px;
                margin-left: 0;
            }

            .footer-column ul li {
                font-size: 14px;
            }

            .copyright {
                margin: 20px auto;
                text-align: center;
                margin-left: -1px;
            }
        }


        /* Adjust card and illustration for smaller screens */
        @media (max-width: 768px) {

         

            .illustration {
                display: none;
                /* Hide illustration on smaller screens */
            }

            .card1-login {
                margin: 0 auto;
                width: 100%;
                padding: 20px;
            }

            .card-login {
                width: 100%;
            }

            .login-container {
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: auto;
            }
        }



        @media (max-width: 767px) {

         
            /* Remove background image on mobile */
            .imag {
                display: none;
            }

            /* Card Styling */
            .card1-login .card-login {
                width: 100%;
                margin-right: 0;
                margin-top: 0;
            }

            .content {
                flex-direction: column;
                align-items: center;
                padding: 15px;
            }

            /* Buttons adjustments */
            .buttons {
                flex-direction: column;
                gap: 15px;
            }

            .account button {
                width: 100%;
                margin-left: 0;
                margin-top: 15px;
                font-size: 15px;
                /* Adjust font size for slightly bigger mobile screens */
            }

            /* Input Icon (Eye button inside password field) */
            .input-icon .eye-icon {
                right: 10px;
                top: 50%;
                margin-left: 75%;
                transform: translateY(-50%);
            }

            .input-icon {
                position: relative;
                width: 100%;
                /* Ensure the input container takes full width */
            }

            .input-icon input {
                width: 100%;
                /* Ensure input field is 100% width */
                padding: 10px 40px;
            }

            #password-input {
                width: 100%;
            }

            /* Footer adjustments */
            .footer-row {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer-column {
                width: 100%;
                max-width: none;
                margin-bottom: 20px;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 17px;
                text-align: center;
            }

            .footer-column ul li a {
                font-size: 14px;
            }

            .footer {
                max-width: 100%;
            }

            .container1 {
                margin-left: -40px;
            }

            .copyright {
                margin-left: 40px;
            }
        }



        /* Footer Adjustments */
        @media (max-width: 768px) {

            

            .container-fluid {
                text-align: center;
                padding-left: -20%;
            }

            /* Remove background image on mobile */
            .imag {
                display: none;
            }



         


            .footer-row {
                flex-direction: column;
                align-items: center;
            }

            .footer-column {
                text-align: center;
                margin-bottom: 20px;
            }

            .footer .copyright {
                margin-left: 0;
                text-align: center;
            }
        }

        /* Extra small devices (phones, <576px) */
        @media (max-width: 576px) {
            

            .card-login {
                padding: 10px;
            }

            .card-login h2 {
                font-size: 20px;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 16px;
            }

            .footer ul li a {
                font-size: 14px;
            }

            .social-icons a {
                font-size: 20px;
            }
        }


        @media (max-width: 768px) {

          

            /* Footer adjustments */
            .footer-row {
                flex-direction: column;
                align-items: center;
            }

            .footer-column {
                text-align: center;
                margin-bottom: 20px;
            }

            .footer .copyright {
                text-align: center;
                margin-left: 128px;
            }
        }

 
           



        /* Tablet screens (768px - 1024px) */
        @media (min-width: 768px) and (max-width: 1024px) {

          

            .login-signup {
                margin-left: 360px;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            /* Buttons - Column Layout */
            .buttons {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 15px;
                width: 100%;
            }

            .account button {
                width: 90%;
                font-size: 16px;
            }

            /* Background Image */
            .imag {
                display: block;
                background-size: cover;
                background-position: center;
                width: 100%;
            }

            /* Content Layout */
            .content {
                flex-direction: column;
                align-items: center;
                padding: 20px;
                width: 100%;
            }

            .card1-login .card-login {
                width: 90%;
                margin: 0 auto;
            }

            /* Footer Fix - All Columns Stay in One Line */
            .footer-row {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
                flex-wrap: nowrap;
                /* Prevent wrapping */
                width: 100%;
                padding: 20px;
            }

            .footer-column {
                width: 25%;
                /* Adjust width to fit all columns in one row */
                text-align: center;
            }

            .footer-column h3,
            .footer-column h2 {
                font-size: 18px;
            }

            .footer-column ul li a {
                font-size: 15px;
            }

            .footer .copyright {
                text-align: center;
                width: 100%;
            }
        }
    </style>
    <br><br><br><br>

    <!-- nav-end -->

    <div class="illustration"></div>

    <div class="card1-login">
        <div class="login-container">
            <div class="card-login">
                <img src="images/edu-x white.png" alt="Edu-x Logo" style="height: 70px; width: 75px; margin-left: 21px" />
                <h2>Log In</h2>
                <div class="card-body">
                    <form id="loginForm">
                        <input type="email" id="email" placeholder="Email" required />
                        <div id="emailError" style="color: red; font-size: 12px;"></div>

                        <input type="password" id="password" placeholder="Password" required />
                        <div id="passwordError" style="color: red; font-size: 12px;"></div>



                        <button type="button" id="loginButton">Log In</button>
                    </form>

                    <div style="width: 100%; text-align: center; margin: 20px 0">
                        <span style="background: white; padding: 0 10px">OR</span>
                    </div>

                    <div class="social-buttons">
                        <button><i class="fab fa-google"></i> Log In with Google</button>
                        <button><i class="fab fa-apple"></i> Log In with Apple</button>
                        <button>
                            <i class="fab fa-facebook"></i> Log In with Facebook
                        </button>
                    </div>
                    <br />

                    <div class="anchr">
                        <small><a href="forgotpassword.html">Forgot password?</a></small>
                        <small class="a2"><a href="#">Unlock account?</a></small>
                    </div>
                    <br /><br />

                    <div class="registr">
                        <h3>Don’t have an account?</h3>
                        <br />
                        <a href="/student-register">Register as a Student</a><br /><br />
                        <a href="partner_registration.html" class="a3">Register as a Recruitment Partner</a>
                    </div>
                    <br />

                    <div class="tc">
                        <a href="/privacy/policy">Privacy & Cookies Policy</a><br />
                        <a href="/term-and-condition">Terms & Conditions</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--</div>-->
    <script>
        document.getElementById('loginButton').addEventListener('click', async function () {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Clear previous errors
            document.getElementById('emailError').textContent = '';
            document.getElementById('passwordError').textContent = '';

            try {
                const response = await fetch('/api/student/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        email,
                        password
                    })
                });

                const data = await response.json();

                if (response.ok && data.status) {
                    alert(data.message);
                    window.location.href = '/'; // Redirect to home page
                } else {
                    if (data.errors) {
                        if (data.errors.email) {
                            document.getElementById('emailError').textContent = data.errors.email[0];
                        }
                        if (data.errors.password) {
                            document.getElementById('passwordError').textContent = data.errors.password[0];
                        }
                    } else {
                        alert(data.message || 'Login failed');
                    }
                }
            } catch (error) {
                alert("Something went wrong!");
                console.error(error);
            }
        });
    </script>


    <script>
        //   function toggleDropdown(selectedSummary) {
        //     // Close all other details elements
        //     document.querySelectorAll('.dropdown-container details').forEach(details => {
        //       if (details.querySelector('summary') !== selectedSummary) {
        //         details.removeAttribute('open');
        //       }
        //     });
        //   }

        const toggleButton = document.querySelector(".navbar-toggler");
        const navbarCollapse = document.querySelector(".navbar-collapse");

        toggleButton.addEventListener("click", function() {
            if (navbarCollapse.classList.contains("collapse")) {
                navbarCollapse.classList.remove("collapse");
                navbarCollapse.classList.add("show");
            } else {
                navbarCollapse.classList.remove("show");
                navbarCollapse.classList.add("collapse");
            }

        });



        document.getElementById("loginButton").addEventListener("click", function() {
            // Get input values
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            // Error message containers
            const emailError = document.getElementById("emailError");
            const passwordError = document.getElementById("passwordError");

            // Reset error messages
            emailError.textContent = "";
            passwordError.textContent = "";

            let isValid = true;

            // Validate email
            if (!email) {
                emailError.textContent = "Email is required.";
                isValid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                emailError.textContent = "Enter a valid email address.";
                isValid = false;
            }

            // Validate password
            const passwordCriteria = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                specialChar: /[!@#$%^&*(),.?":{}|<>]/.test(password),
            };

            if (!password) {
                passwordError.textContent = "Password is required.";
                isValid = false;
            } else {
                const missingCriteria = [];
                if (!passwordCriteria.length) {
                    missingCriteria.push("at least 8 characters");
                }
                if (!passwordCriteria.uppercase) {
                    missingCriteria.push("one uppercase letter");
                }
                if (!passwordCriteria.specialChar) {
                    missingCriteria.push("one special character");
                }

                if (missingCriteria.length > 0) {
                    passwordError.textContent = `Password must have ${missingCriteria.join(
          ", "
        )}.`;
                    isValid = false;
                }
            }

            // If validation passes, redirect to dashboard
            if (isValid) {
                window.location.href = "userdashboard.html";
            }
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    </body>

    </html>
