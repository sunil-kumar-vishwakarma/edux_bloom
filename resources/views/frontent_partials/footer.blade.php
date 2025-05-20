<footer class="custom-footer">
    <div class="custom-footer-container">
        <div class="custom-footer-row">
            <!-- Column 1 -->
            <div class="custom-footer-col">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/edu-x white.png') }}" alt="Edu-X Logo" height="70">
                </a>
                <p>US Address: 3337 Salem Cove Drive SE,N2H 6R3</p>
                <p>Africa Office Addresses: </p>
                <p>Senegal: Cite de l'emergence, Immeuble 10,<br> unit 21, Dakar Plateau </p>
                <p>Mali: <a
                        href="https://www.google.com/maps/place/Edu-x+Service/@12.580429,-7.9587039,17z/data=!3m1!4b1!4m6!3m5!1s0xe51d139af16a1a7:0xa381dbde3d4c0c97!8m2!3d12.580429!4d-7.956129!16s%2Fg%2F11nn1ydv23?coh=209933&entry=tts"
                        target="_blank">
                        Rue du Governeurr, Bamako, Mali
                    </a>
                </p>
                <ul class="footer-social-icons">
                    <li>
                        <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg"
                                alt="Facebook">
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/twitter.svg"
                                alt="Twitter">
                        </a>
                    </li>
                    <li>
                        <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg"
                                alt="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
                            <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg"
                                alt="LinkedIn">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="custom-footer-col">
                <h3>About</h3>
                <ul>
                    <li><a href="{{ route('student') }}">Services</a></li>
                    <li><a href="{{ route('partner') }}">Partners</a></li>
                    <li><a href="{{ route('partner') }}">Resources</a></li>
                    <li><a href="{{ route('web') }}">FAQ</a></li>
                    <li><a href="{{ route('contactus') }}">Contact</a></li>
                    {{-- <li><a href="{{ route('blogs-pages') }}">Blog & Press</a></li> --}}
                </ul>
            </div>

            <!-- Column 2 -->
            <div class="custom-footer-col">
                <h3>Discover</h3>
                <ul>
                    <li><a href="{{ route('search') }}"> Programs</a></li>
                    <li><a href="{{ route('institutions') }}"> Schools</a></li>
                    <li><a href="{{ route('student-register') }}">Register</a></li>
                    <li><a href="{{ route('webinar') }}">Careers</a></li>
                </ul>
            </div>



            <!-- Column 4 -->
            <div class="custom-footer-col">
                <h3>Study In:</h3>
                <ul>
                    <li><a href="{{ route('webinar.readmore') }}">United State</a></li>
                    <li><a href="{{ route('webinar.readmore') }}">United Kingdom</a></li>
                    <li><a href="{{ route('webinar.readmore') }}">Canada</a></li>
                </ul>
            </div>

            <div class="custom-footer-col">
                <h3>Language:</h3>
                <div class="footer-language-switcher">
                    <a href="?lang=en" class="lang-option active">EN</a>
                    <span class="divider">|</span>
                    <a href="?lang=fr" class="lang-option">FR</a>
                </div>
            </div>


        </div>

        <div class="custom-footer-copy">
            <p>© 2020-2025 Edu-X. All Rights Reserved. Developed by <a
                    href="https://softwarehousetechnology.com/">SHT</a></p>
        </div>
    </div>
</footer>
<style>
    .custom-footer {
        /*background-color:#1652b4;*/
        background-color: black;
        color: #fff;
        /*padding: 60px 20px 30px;*/
        padding-top: 40px;
        padding-bottom: 15px;
        font-family: Arial, sans-serif;
    }

    .custom-footer-container {
        max-width: 1200px;
        margin: auto;
    }

    .custom-footer-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        gap: 40px;
    }


    .custom-footer-col img {
        max-height: 70px;
        margin: auto;
        margin-bottom: 20px;
    }

    .custom-footer-copy p {
        color: white;
        text-align: center;
        font-weight: bold;
        opacity: .7;
        max-width: 500px;
    }

    .custom-footer-copy a {
        text-decoration: underline;
    }

    .custom-footer-col h3 {
        font-size: 17px;
        margin-bottom: 10px;
        font-weight: bold;
        color: #fff;
    }

    .custom-footer-col p,
    .custom-footer-col a,
    .custom-footer-col li {
        font-size: 15px;
        color: #ccc;
        text-decoration: none;
        line-height: 1.8;
    }

    .custom-footer-col a:hover {
        color: #fff;
        text-decoration: underline;
    }

    .custom-footer-col ul {
        list-style: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .custom-footer-copy {
        border-top: 1px solid #fff;
        margin-top: 40px;
        padding-top: 20px;
        color: #fffbfb;
        font-size: 14px;
        width: 100%;
        text-align: center;
        display: flex;
        justify-content: center;
    }

    .footer-social-icons {
        list-style: none;
        padding: 0;
        margin: 10px 0 0;
        display: flex;
        gap: 12px;
    }

    .footer-social-icons li a {
        display: inline-block;
        width: 24px;
        height: 24px;
    }

    .footer-social-icons li a img {
        width: 100%;
        background: white;
        height: auto;
        filter: grayscale(100%) brightness(1.2);
        transition: filter 0.3s ease;
    }

    .footer-social-icons li a:hover img {
        filter: none;
    }

    @media (max-width: 600px) {
        .footer-social-icons {
            list-style: none;
            padding: 0;
            margin: 10px 0 0;
            display: flex;
            flex-wrap: wrap;
            /* Allows icons to wrap on smaller screens */
            gap: 12px;
            /* Spacing between icons */
            justify-content: center;
            /* Centers icons */
            align-items: center;
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .custom-footer-row {
            flex-direction: column;
            gap: 30px;
        }

        .custom-footer-col {
            flex: 1 1 100%;
            text-align: center;
        }

        /*.custom-footer-col p{*/
        /*    text-align:right;*/
        /*}*/

        .custom-footer-container {
            padding: 0 10px;
            text-align: center;
        }
    }

    .footer-language-switcher {
        margin-top: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
         gap: 8px;
        font-size: 14px;
    }

    .footer-language-switcher .lang-option {
        color: #ffffff;
        text-decoration: none;
        padding: 4px 8px;
        border-radius: 4px;
        transition: background-color 0.2s ease;
    }

    .footer-language-switcher .lang-option:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }

    .footer-language-switcher .lang-option.active {
        font-weight: bold;
        text-decoration: underline;
    }

    .footer-language-switcher .divider {
        color: #ffffff;
    }
</style>
