<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
</head>

<body>
   @include('frontent_partials.userdash_sidebar')

    <!-- Main Content -->
    <div class="main-content">
        @include('frontent_partials.userdash_nav')

        <div class="content">
            <div class="css-t71jlo">
                <img src="{{ asset('images/prof.svg') }}" alt="" />
                <h1 class="css-1m9zmke">My Progress</h1>
            </div>

            <div class="css-nh1rq9">
                <img src="{{ asset('images/250bd1a1701e4393407a4783b2e502bf.svg') }}" alt="Progress tracker"
                    width="100%" />
            </div>

            <br />
            <div class="button1" onclick="toggleContent1()">
                <h3>Before Applying</h3>
                <i class="fa-solid fa-chevron-down"></i>
            </div>

            <div id="toggle-content1">
                <div class="before">
                    <p>Complete your profile before starting your application.</p>
                    <br />
                    <div class="button">
                        <a href="{{ route('userprofile') }}">Complete Profile</a>
                        <svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg"
                            aria-label="Incomplete">
                            <path
                                d="M12.705 4.705a.997.997 0 00-1.41 1.41L16.17 11H5a1 1 0 100 2h11.17l-4.876 4.885a.997.997 0 001.411 1.41L20 12l-7.295-7.295z"
                                fill="white"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="dropdown-container">
                <div class="toggle-button" onclick="toggleContent()">
                    <h3>Start Applying</h3>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div id="toggle-content" class="hidden">
                    <a href="{{ route('search') }}"><button class="program">Find A Program</button></a>
                    <div class="content2">
                        <h2>Finalize Your Application</h2>
                        <h2>Review and Submission</h2>
                        <h2>Get Result</h2>
                        <h2>Finalize Visa & Admission</h2>
                        <h2>Ready to Enroll</h2>
                        <h2>Enrollment Confirmed</h2>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; 2024 Edu-X.com</p>
            <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
            <a href="{{ route('term.and.condition') }}">Terms & Conditions</a>
            <a href="{{ route('user_myapplication') }}">My Application</a>
            <a href="{{ route('blogs-pages') }}">Blog</a>
        </footer>
    </div>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const profileIcon = document.getElementById('profileIcon');
            const profileDropdown = document.getElementById('profileDropdown');

            profileIcon.addEventListener('click', () => {
                // Toggle dropdown visibility
                profileDropdown.style.display =
                    profileDropdown.style.display === 'block' ? 'none' : 'block';
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', (event) => {
                if (!profileIcon.contains(event.target) && !profileDropdown.contains(event.target)) {
                    profileDropdown.style.display = 'none';
                }
            });
        });

        function toggleContent() {
            const content = document.getElementById('toggle-content');
            content.classList.toggle('hidden');
        }


        function toggleContent1() {
            const content = document.getElementById('toggle-content1');
            // Toggle the display property between 'none' and 'block'
            content.style.display = content.style.display === 'none' || !content.style.display ?
                'block' :
                'none';
        }
    </script>
</body>

</html>
