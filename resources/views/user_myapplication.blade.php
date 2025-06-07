<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/user.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<style>
    html,
    body {
        font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        /* Use a clean, modern font for all elements */
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .sidebar {
        background-color: white;
        color: rgb(96, 106, 132);
        width: 80px;
        min-height: 100vh;
        transition: width 0.3s ease, background-color 0.3s ease, color 0.3s ease;
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        border-right: 2px solid #e0e0e0;
        /* Adds a subtle right border */
        /* Alternatively, use box-shadow for a softer line */
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
    }


    .sidebar:hover {
        width: 250px;
    }

    .logo {
        display: flex;
        align-items: center;
        padding: 20px;
        padding-top: 30px;
        transition: padding 0.3s ease;

        /* Smooth padding adjustment */
    }

    .logo i {
        font-size: 24px;
        transition: font-size 0.3s ease;
        cursor: pointer;
        /* Smooth icon size adjustment if needed */
    }

    .logo-text {
        font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        margin-left: 10px;
        margin-top: 2px;
        font-size: 24px;
        font-weight: bold;
        opacity: 0;
        /* Hide initially */
        white-space: nowrap;
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* Smooth text appearance */
        transform: translateX(-10px);
        /* Start slightly to the left */
    }

    .sidebar:hover .logo-text {
        opacity: 1;
        /* Make visible on hover */
        transform: translateX(0);
        /* Slide into place */
        cursor: pointer;
    }

    .menu {
        list-style: none;
        padding: 10px;
        padding-top: 0;
        transition: padding 0.3s ease;
    }

    .menu li {
        margin: 20px 0;
    }

    .menu a {
        text-decoration: none;
        color: rgb(96, 106, 132);
        display: flex;
        align-items: center;
        padding: 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    /* Active Menu Item */
    .menu a.active {
        background-color: rgb(208, 228, 255);
        color: rgb(0, 51, 132);
        border-radius: 5px;
    }

    .menu a.active i,
    .menu a.active .menu-text {
        font-weight: bold;
    }


    .menu a:hover {
        background-color: rgba(96, 106, 132, 0.1);
        /* Subtle hover background */
        border-radius: 5px;
    }

    .menu i {
        font-size: 20px;
        margin-right: 10px;
        transition: font-size 0.3s ease, margin-right 0.3s ease;
        /* Smooth icon transition */
    }

    .menu-text {
        font-family: Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        opacity: 0;
        margin: 0;
        /* Hide initially */
        white-space: nowrap;
        transition: opacity 0.3s ease, transform 0.3s ease;
        /* Smooth text transition */
        transform: translateX(-10px);
        /* Slide in effect */
    }

    .sidebar:hover .menu-text {
        opacity: 1;
        /* Show text */
        transform: translateX(0);
        /* Reset transform */
    }

    /* main content */
    /* General Content Area */
    .main-content {
        padding: 20px;
        margin-left: 80px;
        /* Matches sidebar default width */
        transition: margin-left 0.3s ease;
    }

    .sidebar:hover+.main-content {
        margin-left: 80px;
        /* Aligns with expanded sidebar */
    }

    /* Topbar Styling */
    /* Topbar */
    .topbar {
        background-color: #ffffff;
        padding: 15px 20px;
        margin-top: -10px;
        border-bottom: 1px solid #e0e0e0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .profile-menu {
        position: relative;
    }

    .notification-icon {
        display: inline-flex;
        font-size: 10px;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        /* Space between notification and profile icons */
        cursor: pointer;
        width: 24px;
        height: 24px;
    }

    .notification-icon svg {
        fill: #333;
        /* Icon color */
        width: 24px;
        height: 24px;
        transition: transform 0.3s ease;
    }

    .notification-icon:hover svg {
        transform: scale(1.1);
        /* Hover effect */
    }



    .profile-icon {
        font-size: 28px;
        color: #333;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .profile-icon:hover {
        transform: scale(1.1);
    }

    /* Dropdown Styling */
    .dropdown {
        position: absolute;
        top: 50px;
        /* Position dropdown below the icon */
        right: 0;
        background-color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        border-radius: 8px;
        padding: 15px;
        width: 250px;
        display: none;
        /* Initially hidden */
        z-index: 1000;
        text-align: left;
    }

    .dropdown h3 {
        margin: 0;
        font-size: 16px;
        color: #333;
        font-weight: bold;
        margin-bottom: 8px;
    }

    .dropdown p {
        margin: 10px 0;
        font-size: 14px;
        color: #555;
    }

    .dropdown a {
        display: block;
        margin: 15px 0;
        font-size: 14px;
        color: #555;
        text-decoration: none;
        font-weight: 500;
    }

    .dropdown a:hover {
        text-decoration: underline;
    }

    .dropdown hr {
        border: none;
        border-top: 1px solid #ddd;
        margin: 10px 0;
    }


    .topbar h1 {
        font-size: 24px;
        color: #333;
        margin: 0;
    }

    /* My Progress Section */
    .content {
        margin-top: 20px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        /* box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); */
        text-align: center;
    }

    .content .btn {
        width: 100%;
        height: 40px;
        font-size: 17px;
        font-weight: bold;
        text-align: left;
        border-radius: 10px;
        border: none;
        padding-left: 15px;
    }

    .heading {
        display: flex;
        align-items: left;
        justify-content: space-evenly;
        margin-left: -300px;
        margin-top: 20px;
    }

    .heading1 ul,
    .heading2 ul {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
    }

    .heading ul li {
        list-style: none;
        font-size: 16px;
        opacity: .7;
    }

    .applicat {
        transform: translateY(10px);
        text-align: left;
        margin-left: 105px;
    }

    .more-programs {
        text-align: right;
    }

    .more-programs button[type="button"] {
        width: 250px;
        gap: 50px;
        padding: 5px 25px;
        height: 50px;
        border: .2px solid rgb(146, 146, 214);
    }







    /* Footer Section */
    footer {
        margin-top: 40px;
        text-align: center;
        font-size: 14px;
        color: #777;
        padding: 20px;
        /* background-color: #f8f9fc; */
        border-top: 1px solid #e0e0e0;
    }

    footer a {
        color: #0d6efd;
        margin: 0 10px;
        text-decoration: none;
        font-size: 14px;
    }

    footer a:hover {
        text-decoration: underline;
    }


    .paid-application button {
        cursor: text;
    }

    /* Responsive Design */
    @media screen and (max-width: 1024px) {
        .heading {
            flex-direction: column;
            align-items: center;
        }

        .heading1,
        .heading2 {
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
        }

        .heading1 ul,
        .heading2 ul {
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }
    }

    @media screen and (max-width: 768px) {
        .btn {
            font-size: 14px;
            padding: 10px 15px;
        }

        .heading1 ul li,
        .heading2 ul li {
            font-size: 14px;
        }

        .more-programs {
            flex-direction: column;
            margin-left: -25px;
        }

        .applicat {
            font-size: 14px;
            margin-left: 45px;
            width: 100%;
        }
    }

    @media screen and (max-width: 480px) {
        .btn {
            font-size: 13px;
            padding: 8px 12px;
        }

        .heading1 ul,
        .heading2 ul {
            flex-direction: column;
            align-items: center;
            width: 150%;
            margin-top: 15px;
        }

        .heading1 ul li,
        .heading2 ul li {
            font-size: 12px;
        }

        .applicat {
            font-size: 12px;
            width: 123%;
            margin-left: 0px;
        }
    }
</style>

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
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
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
                    <p>Vishnu Rajput</p>
                    <p>vishnurajput847@gmail.com</p>
                    <hr />
                    {{-- <a href="#"> <i class="fa-solid fa-user"></i> My Profile </a>
                    <a href="#"> <i class="fa-solid fa-cog"></i> Account Settings </a>
                    <a href="#">
                        <i class="fa-solid fa-bell"></i> Notification Settings
                    </a>
                    <hr /> --}}
                    <a href="#">
                        <i class="fa-solid fa-right-from-bracket"></i> Log Out
                    </a>
                </div>
            </div>
        </div>

        <table class="employer-table">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Program Name</th>
                    <th>Start Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Science</td>
                    <td>01 Jan, 2025</td>
                    <td>
                        <button class="btn-unpaid">Unpaid</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>MBA</td>
                    <td>01 Jan, 2025</td>
                    <td>
                        <button class="btn-paid">Paid</button>
                    </td>
                </tr>

                <!-- Add more static rows if needed -->
            </tbody>
        </table>


        <footer>
            <p>&copy; 2024 Edu-X.com</p>
            <a href="{{ route('privacy.policy') }}">Privacy Policy</a>
            <a href="{{ route('term.and.condition') }}">Terms & Conditions</a>
            <a href="{{ route('user_myapplication') }}">My Application</a>
            <a href="{{ route('blogs-pages') }}">Blog</a>
        </footer>
    </div>
</body>

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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
