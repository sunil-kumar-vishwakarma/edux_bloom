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
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <a href="{{ route('userdashboard') }}"
                style="text-decoration: none; color: inherit; display: flex; align-items: center;">
                <i class="fa-solid fa-graduation-cap"></i>
                <span class="logo-text">Edu-X</span>
            </a>
        </div>

        <ul class="menu">
            <li>
                <a href="{{ route('userdashboard') }}"
                    class="{{ request()->routeIs('userdashboard') ? 'active' : '' }}">
                    <i class="fa-solid fa-house"></i>
                    <span class="menu-text">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('search') }}" class="{{ request()->routeIs('search') ? 'active' : '' }}">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span class="menu-text">Programs & Schools</span>
                </a>
            </li>
            <li>
                <a href="{{ route('userprofile') }}" class="{{ request()->routeIs('userprofile') ? 'active' : '' }}">
                    <i class="fa-solid fa-user-circle"></i>
                    <span class="menu-text">Profile</span>
                </a>
            </li>
            <li>
                <a href="{{ route('user_myapplication') }}"
                    class="{{ request()->routeIs('user_myapplication') ? 'active' : '' }}">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span class="menu-text">My Applications</span>
                </a>
            </li>
            <li>
                <a href="{{ route('userpayments') }}"
                    class="{{ request()->routeIs('userpayments') ? 'active' : '' }}">
                    <i class="fa-solid fa-wallet"></i>
                    <span class="menu-text">Payments</span>
                </a>
            </li>
        </ul>

    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="topbar">
            <h1>Dashboard</h1>
            <div class="profile-menu">
                <!-- Notification Icon -->
                <div id="notificationIcon" class="notification-icon">
                    <svg class="MuiSvgIcon-root" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z">
                        </path>
                    </svg>
                </div>

                <!-- Profile Icon -->
                <i class="fa-solid fa-user-circle profile-icon" id="profileIcon"></i>

                <!-- Dropdown -->
                <div class="dropdown" id="profileDropdown">
                    <h3>Account</h3>
                    <p>{{ Auth::user()->name ?? 'Vishnu Rajput' }}</p>
                    <p>{{ Auth::user()->email ?? 'vishnurajput847@gmail.com' }}</p>
                    <hr />
                    {{-- <a href="#"><i class="fa-solid fa-user"></i> My Profile</a>
            <a href="#"><i class="fa-solid fa-cog"></i> Account Settings</a>
            <a href="#"><i class="fa-solid fa-bell"></i> Notification Settings</a>
            <hr /> --}}
                    <a href="{{ route('logout_user') }}"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                </div>
            </div>
        </div>


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
