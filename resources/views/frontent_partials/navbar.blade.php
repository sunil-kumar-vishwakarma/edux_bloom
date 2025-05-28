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
                    <a class="nav-link" href="{{ route('student') }}">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('institutions') }}">Parents</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('search') }}">Program & Pathways</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('institutions') }}">Institutions</a>
                </li> --}}

                <!-- Hover Dropdown -->
                <li class="nav-item dropdown-hover">
                    <a class="nav-link" href="#">
                        Resource Center <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/blogs-pages">Edu-X Blog</a></li>
                        <li><a class="dropdown-item" href="/student">Edu-X Young Leaders</a></li>
                        <li><a class="dropdown-item" href="/events">Parent Resources</a></li>
                        <li><a class="dropdown-item" href="/contactus">Contact us</a></li>
                    </ul>
                </li>

            </ul>
            <div class="d-flex">
                <a href="{{ route('student-login') }}" id="loginn">Login</a>
                <a href="{{ route('student-register') }}" class="btn-custom">Register</a>
            </div>
        </div>
    </div>
</nav>

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
