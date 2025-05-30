<style>
    #navbarNav {
        margin-top: 8.5px;
    }

    .nav-link i {
        font-size: medium;
    }

    .d-flex {
        gap: 5px;
    }

    .nav-link.active,
    .dropdown-item.active,
    .lang-option.active,
    #loginn.active {
        color: #ad0039;
        font-weight: bold;
        border-bottom: 3px solid #ad0039;
    }

    .lang-option.active {
        padding: 5px;
    }

    .language-option {
        display: flex;
        align-items: center;
        font-weight: 600;
        font-size: 0.95rem;
        margin-left: 60px;
    }

    .language-switcher {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .lang-option {
        color: #bb0e45;
        text-decoration: none;
        padding: 4px 8px;
        border-radius: 4px;
        transition: all 0.2s ease;
    }

    .lang-option:hover {
        background-color: #f2f2f2;
        color: #111;
    }

    .lang-option.active {
        background: linear-gradient(to right, #bb0e45, #ad0039);
        color: #fff;
        font-weight: 700;
    }

    .lang-divider {
        color: #aaa;
    }

    @media (max-width: 768px) {
        .language-option {
            margin-left: 0;
            margin-top: 0;
        }
    }
</style>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="{{ '/' }}">
            <img src="{{ asset('images/edu-x white.png') }}" alt="Edu-X Logo" height="70" width="70">
            <div>Edu-X Services</div>
        </a>

        <!-- Toggle button for mobile screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links and buttons -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('student') ? 'active' : '' }}"
                        href="{{ route('student') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('institutions') ? 'active' : '' }}"
                        href="{{ route('institutions') }}">Parents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('search') ? 'active' : '' }}" href="{{ route('search') }}">Program &
                        Pathways</a>
                </li>

                <!-- Hover Dropdown -->
                <li class="nav-item dropdown-hover">
                    <a class="nav-link {{ request()->is('blogs-pages') || request()->is('youngleaders') || request()->is('events') || request()->is('contactus') ? 'active' : '' }}"
                        href="#">
                        Resource Center <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ request()->is('blogs-pages') ? 'active' : '' }}"
                                href="/blogs-pages">Edu-X Blog</a></li>
                        <li><a class="dropdown-item {{ request()->is('youngleaders') ? 'active' : '' }}" href="/youngleaders">Edu-X
                                Young Leaders</a></li>
                        <li><a class="dropdown-item {{ request()->is('events') ? 'active' : '' }}"
                                href="/events">Parent Resources</a></li>
                        <li><a class="dropdown-item {{ request()->is('contactus') ? 'active' : '' }}"
                                href="/contactus">Contact us</a></li>
                    </ul>
                </li>
                <div class="language-option">
                    <div class="language-switcher">
                        <a href="{{ route('change.lang', 'en') }}"
                            class="lang-option {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                        <span class="lang-divider">|</span>
                        <a href="{{ route('change.lang', 'fr') }}"
                            class="lang-option {{ app()->getLocale() === 'fr' ? 'active' : '' }}">FR</a>
                    </div>
                </div>
            </ul>



            <div class="d-flex">
                <a href="{{ route('student-login') }}" id="loginn"
                    class="{{ Route::is('student-login') ? 'active' : '' }}">Login</a>
                <a href="{{ route('student-register') }}"
                    class="btn-custom {{ Route::is('student-register') ? 'active' : '' }}">Register</a>
            </div>
        </div>

    </div>
</nav>
<div id="google_translate_element"></div>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,fr',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet">
<script>
    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const isExpanded = navbarCollapse.style.display === 'flex';
        navbarCollapse.style.display = isExpanded ? 'none' : 'flex';
    });
</script>
