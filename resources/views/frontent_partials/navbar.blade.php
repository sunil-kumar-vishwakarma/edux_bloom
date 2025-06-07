<style>
    .logo-border {
        border: 5px solid #0056b3;
        border-radius: 50% !important;
        padding: 6px;
        background-color: white;

    }

    #navbarNav {
        /* margin-top: 8.5px; */
        margin-top: -2px;
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
            <img src="{{ asset('images/edu-x white.png') }}" alt="Edu-X Logo" height="70" width="70"
                class="logo-border">
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
                        <li><a class="dropdown-item {{ request()->is('youngleaders') ? 'active' : '' }}"
                                href="/youngleaders">Edu-X
                                Young Leaders</a></li>
                        <li><a class="dropdown-item {{ request()->is('events') ? 'active' : '' }}"
                                href="/events">Parent Resources</a></li>
                        <li><a class="dropdown-item {{ request()->is('contactus') ? 'active' : '' }}"
                                href="/contactus">Contact us</a></li>
                    </ul>
                </li>
                <div class="language-option">
                    <!-- <div class="language-switcher">
                        <a href="{{ route('change.lang', 'en') }}"
                            class="lang-option {{ app()->getLocale() === 'en' ? 'active' : '' }}">EN</a>
                        <span class="lang-divider">|</span>
                        <a href="{{ route('change.lang', 'fr') }}"
                            class="lang-option {{ app()->getLocale() === 'fr' ? 'active' : '' }}">FR</a>
                    </div> -->

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <div id="google_translate_element"></div>
                        </li>
                    </ul>

                    <!-- <div class="language-switcher">
                        <a href="javascript:void(0)" onclick="doGTranslate('en|en')" class="lang-option">EN</a>
                        <span class="lang-divider">|</span>
                        <a href="javascript:void(0)" onclick="doGTranslate('en|fr')" class="lang-option">FR</a>
                    </div>

                    <div id="google_translate_element" style="display:none;"></div> -->


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

<!-- Google Translate Init Script -->
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            // pageLanguage: 'en',
            includedLanguages: 'en,fr',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, 'google_translate_element');
    }

    function doGTranslate(langPair) {
        if (langPair.value) langPair = langPair.value;
        var lang = langPair.split('|')[1];
        var select = document.querySelector("select.goog-te-combo");

        if (select) {
            select.value = lang;
            select.dispatchEvent(new Event('change'));
        } else {
            setTimeout(function() {
                doGTranslate(langPair);
            }, 500);
        }
    }
</script>

<!-- Google Translate API Script -->
<!-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> -->
</script>


<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
<!-- <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
    rel="stylesheet"> -->
<script>
    document.querySelector('.navbar-toggler').addEventListener('click', function() {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const isExpanded = navbarCollapse.style.display === 'flex';
        navbarCollapse.style.display = isExpanded ? 'none' : 'flex';
    });
</script>
<style>
    body {
        top: 0px !important;
        margin-top: 0px !important;
        position: relative !important;
    }

    /* Translate Widget Styling */
    #google_translate_element {
        /* margin-left: 20px; */
        font-family: "Open Sans", Sans-serif;
        background: #ffffff;
        border-radius: 6px;
        padding: 7px 15px;
        font-size: 16px;
        border: 1px solid #ccc;
        transition: background 0.3s ease;
    }


    /* Remove unwanted branding and images */
    .goog-te-gadget img,
    .VIpgJd-ZVi9od-ORHb-OEVmcd,
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }
    

    .goog-te-gadget-simple .VIpgJd-ZVi9od-xl07Ob-lTBxed span {
        border: none !important;
        margin: 0 1px;
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .indicator {
        display: none !important;
    }

    /* Dropdown styling */
    .goog-te-gadget .goog-te-combo {
        background-color: white;
        color: #222;
        font-weight: 600;
        font-size: 0.9rem;
        padding: 6px 10px;
        border: 1px solid #bbb;
        border-radius: 4px;
        outline: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .goog-te-gadget .goog-te-combo:hover {
        border-color: #ad0039;
    }

    .goog-te-gadget-simple {
        background-color: #FFF;
        border: none;
        font-size: 10pt;
        display: inline-block;
        padding-top: 1px;
        cursor: pointer
    }
</style>
