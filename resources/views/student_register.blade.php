@extends('frontent.layouts.app')
@section('title', 'EduX | Student Registration')
@section('content')

    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">

    <div class="page">
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

                        {{-- Backend success/error alerts --}}
                        @include('includes.alerts')

                        {{-- JS dynamic alert container --}}
                        <div id="js-alert-container"></div>

                        <div class="buttons">
                            <button>
                                <a href="#" aria-label="Facebook" target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                Facebook
                            </button>
                            <button>
                                <a href="#" aria-label="Google" target="_blank" id="google">
                                    <i class="fab fa-google"></i>
                                </a>
                                Google
                            </button>
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
                                <label for="tc">I agree to the <a href="/term-and-condition">Terms and Conditions</a></label>
                            </div>

                            <div class="account">
                                <button type="submit" class="btn btn12-primary" id="btn1">Create Account</button>
                            </div>
                        </form>

                        <div id="login">
                            <p>Already have an account? <a href="/student-login">Login</a></p>
                        </div>

                        <small>
                            *If you are a minor in your jurisdiction, your parent or legal guardian must agree to the above
                            terms.
                        </small>

                        <div class="register">
                            <a href="/privacy/policy">Privacy & Cookies Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript alert function -->
    <script>
        function showJsAlert(type, message) {
            const container = document.getElementById('js-alert-container');
            if (!container) return;

            container.innerHTML = '';

            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type === 'error' ? 'danger' : 'success'}`;
            alertDiv.innerHTML = `
                <i class="fas ${type === 'error' ? 'fa-times-circle' : 'fa-check-circle'}"></i>
                ${message}
            `;

            alertDiv.style.position = 'fixed';
            alertDiv.style.top = '20px';
            alertDiv.style.left = '40%';
            alertDiv.style.transform = 'translateX(-50%)';
            alertDiv.style.padding = '12px 25px';
            alertDiv.style.fontSize = '18px';
            alertDiv.style.fontFamily = "'Roboto', sans-serif";
            alertDiv.style.borderRadius = '6px';
            alertDiv.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
            alertDiv.style.zIndex = '1000';
            alertDiv.style.backgroundColor = type === 'error' ? '#b92151' : '#28a745';
            alertDiv.style.color = 'white';
            alertDiv.style.animation = 'slideIn 0.6s ease-out forwards';

            container.appendChild(alertDiv);

            setTimeout(() => {
                alertDiv.style.animation = 'fadeOut 0.6s ease forwards';
                setTimeout(() => {
                    alertDiv.remove();
                }, 600);
            }, 3000);
        }
    </script>

    <!-- Register form submission -->
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
                    showJsAlert('success', "Student Registration successful !");
                    form.reset();
                    setTimeout(() => {
                        window.location.href = '/userdashboard';
                    }, 2000);
                } else {
                    const errorMsg = data.errors
                        ? Object.values(data.errors).flat().join("<br>")
                        : data.message || "Student Registration failed";
                    showJsAlert('error', errorMsg);
                }
            } catch (error) {
                showJsAlert('error', "Something went wrong!");
                console.error(error);
            }
        });

        // Toggle password visibility
        document.getElementById("toggle-password").addEventListener("click", function() {
            const passwordInput = document.getElementById("password-input");
            const icon = this;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        });
    </script>

@endsection
