<style>
    .notification-dropdown {
        display: block;
        position: absolute;
        right: 50px;
        top: 40px;
        background: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        width: 320px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        z-index: 100;
        opacity: 0;
        transform: translateY(-20px);
        pointer-events: none;
        transition: all 0.3s ease-in-out;
    }

    .notification-dropdown.active {
        opacity: 1;
        transform: translateY(0);
        pointer-events: auto;
    }

    .notification-dropdown h4 {
        padding: 14px 20px;
        margin: 0;
        border-bottom: 1px solid #eee;
        font-size: 1rem;
        font-weight: 600;
        background: #f9f9f9;
        color: #333;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .notification-dropdown ul {
        list-style: none;
        margin: 0;
        padding: 0;
        max-height: 260px;
        overflow-y: auto;
    }

    .notification-dropdown ul li {
        padding: 14px 20px;
        border-bottom: 1px solid #f1f1f1;
        font-size: 0.92rem;
        color: #444;
        transition: background 0.2s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .notification-dropdown ul li:hover {
        background: #f5f7fa;
    }

    .notification-icon {
        position: relative;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .notification-icon:hover {
        transform: scale(1.05);
    }

    .notification-badge {
        position: absolute;
        top: -6px;
        right: -6px;
        background-color: #bb0e45;
        color: white;
        font-size: 0.7rem;
        padding: 3px 6px;
        border-radius: 50%;
        font-weight: bold;
        box-shadow: 0 0 0 2px #fff;
    }
</style>


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
            <span class="notification-badge">3</span>
        </div>

        <!-- Notification Dropdown -->
        <div class="notification-dropdown" id="notificationDropdown">
            <h4>Notifications</h4>
            <ul>
                <li>New user registered</li>
                <li>New order placed</li>
                <li>Your profile was viewed</li>
                <li>Payment received</li>
                <li>System update available</li>
            </ul>
        </div>

        <!-- Profile Icon -->
        <i class="fa-solid fa-user-circle profile-icon" id="profileIcon"></i>

        <!-- Profile Dropdown -->
        <div class="dropdown" id="profileDropdown">
            <h3>Account</h3>
            <p>{{ Auth::user()->name ?? 'Vishnu Rajput' }}</p>
            <p>{{ Auth::user()->email ?? 'vishnurajput847@gmail.com' }}</p>
            <hr />
            {{-- <a href="{{ route('userprofile') }}"><i class="fa-solid fa-user"></i> My Profile</a> --}}
            {{-- <hr /> --}}
            <a href="{{ route('logout') }}"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
        </div>
    </div>
</div>
<script>
    const notificationIcon = document.getElementById('notificationIcon');
    const notificationDropdown = document.getElementById('notificationDropdown');

    document.addEventListener('click', function (e) {
        // Toggle dropdown when icon is clicked
        if (notificationIcon.contains(e.target)) {
            notificationDropdown.classList.toggle('active');
        } else {
            notificationDropdown.classList.remove('active');
        }
    });
</script>
