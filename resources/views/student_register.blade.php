@extends('frontent.layouts.app')
@section('title', 'EduX | Student Registration')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Segoe UI', sans-serif;
        }

        .page {
            display: flex;
            min-height: 100vh;
            overflow: hidden;
            margin-top: 5%;
        }

        /* Left fixed image */
        .imag {
            width: 500px;
            flex-shrink: 0;
            display: block;
        }

        .imag img {
            position: sticky;
            top: 0;
            height: 100vh;
            width: 100%;
            object-fit: cover;
        }

        /* Form content */
        .conten {
            flex: 1;
            overflow-y: auto;
            padding: 40px;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Hide image on tablets & mobiles */
        @media screen and (max-width: 991px) {
            .page {
                margin-top: 5%;
            }

            .imag {
                display: none;
            }

            .conten {
                padding: 20px;
            }
        }


        .card1-student {
            max-width: 450px;
            width: 100%;
        }

        .card-student {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        .txt {
            font-size: 15px;
            color: #444;
            margin-bottom: 12px;
            display: block;
        }

        .buttons {
            display: flex;
            gap: .625rem;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .buttons button {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px;
            background-color: #f3f3f3;
            border: 1px solid #ccc;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .buttons button:hover {
            background-color: #e3e3e3;
        }

        .input-icon {
            position: relative;
            margin-bottom: 18px;
            width: 100%;
        }

        .input-icon i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 15px;
        }

        /* Lock icon on left */
        .lock-icon,
        .fa-user,
        .fa-envelope {
            left: 12px;
        }

        /* Eye icon on right */
        .eye-icon {
            right: 12px;
            left: auto;
            /* reset left */
            cursor: pointer;
            font-size: 16px;
        }


        .input-icon input {
            width: 100%;
            padding: 12px 12px 12px 40px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .checkbox {
            margin: 15px 0;
            font-size: 15px;
        }

        .checkbox input {
            margin-right: 10px;
        }

        .checkbox a {
            text-decoration: none;
            color: #0644a6;
        }

        .btn-primary {
            background-color: #b92151;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #a01c46;
        }

        #login p {
            margin-top: 18px;
            font-size: 14px;
            color: #333;
        }

        #login a {
            color: #0644a6;
            text-decoration: none;
            font-weight: 600;
        }

        .register a {
            font-size: 14px;
            color: #0644a6;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }

        small {
            font-size: 12px;
            color: #555;
        }

        .input-icon {
            position: relative;
            margin-bottom: 18px;
            width: 100%;
            /* full width */
            max-width: none;
            /* remove any max-width limitation */
        }

        .input-icon input {
            width: 100%;
            padding: 12px 45px 12px 40px;
            /* left padding for lock icon, right padding for eye icon */
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .input-icon.password {
            position: relative;
            width: 100%;
            /* full width */
        }

        .input-icon.password input {
            width: 100%;
            padding-left: 40px;
            /* space for lock icon */
            padding-right: 40px;
            /* space for eye icon */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            height: 40px;
        }


        .eye-icon:hover {
            color: #333;
        }


        /* ========== RESPONSIVE STYLES ========== */
        @media (max-width: 991px) {
            .page {
                margin-top: 5%;
            }

            .imag {
                display: none;
            }

            .conten {
                justify-content: center;
                padding: 30px 20px;
                padding-left: 20px;
            }

            .card-student {
                padding: 30px 20px;
            }
        }

        @media (max-width: 480px) {
            .page {
                margin-top: 20%;
            }

            .card-student {
                padding: 25px 15px;
            }

            .buttons {
                flex-direction: column;
                gap: 10px;
            }

            .btn-primary {
                font-size: 15px;
            }
        }
    </style>
    <div class="page">

        {{-- <br><br><br><br> --}}
        <!-- Left side image -->
        <div class="imag">
            <img src="https://i.ibb.co/9HR2LXNs/6310507.jpg" alt="Register Image" />
        </div>

        <!-- Right side card -->
        <div class="conten">
            <div class="card1-student">
                <div class="card-student">
                    <small class="txt">Sign up with</small>
                    <div class="card-body-student">
                        <div class="buttons">
                            <button> <a href="#" aria-label="Facebook" target="_blank"><i
                                        class="fab fa-facebook"></i></a>Facebook</button>
                            <button> <a href="#" aria-label="Google" target="_blank" id="google"><i
                                        class="fa-brands fa-google"></i></a>Google</button>
                        </div>

                        <small class="txt">Or Sign up with email</small>

                        <form id="student-register-form">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                                <input type="text" name="name" placeholder="Your Name" required>
                            </div>

                            <div class="input-icon">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="input-icon password">
                                <i class="fas fa-lock lock-icon"></i>
                                <input type="password" name="password" id="password-input" placeholder="Your Password" required>
                                <i class="fas fa-eye eye-icon" id="toggle-password"></i>
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" name="tc" id="tc" required>
                                <label for="tc">I agree to the <a href="/term-and-condition">Terms and
                                        Conditions</a></label>
                            </div>

                            <div class="account">
                                <button type="submit" class="btn btn-primary" id="btn1">Create Account</button>
                            </div>
                        </form>

                        <div id="login">
                            <p>Already have an account? <a href="/student-login"> Login</a></p>
                        </div>
                        <small>*If you are a minor in your jurisdiction, your parent or legal guardian must agree to the
                            above
                            terms.</small><br>

                        <div class="register">
                            <a href="/privacy/policy">Privacy & Cookies Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('student-register-form').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = {
                name: form.name.value,
                email: form.email.value,
                password: form.password.value,
                tc: form.tc.checked
            };

            try {
                const response = await fetch('/api/student/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(formData)
                });

                const data = await response.json();
                if (response.ok) {
                    alert("Registration successful!");
                    form.reset();
                    window.location.href = '/'; // Redirect to homepage after success
                } else {
                    if (data.errors) {
                        alert("Error: " + JSON.stringify(data.errors));
                    } else {
                        alert("Error: " + data.message);
                    }
                }
            } catch (error) {
                alert("Something went wrong!");
                console.error(error);
            }
        });
    </script>

    <script>
        document.getElementById("toggle-password").addEventListener("click", function() {
            const passwordInput = document.getElementById("password-input");
            const icon = this;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        });
    </script>



@endsection




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
