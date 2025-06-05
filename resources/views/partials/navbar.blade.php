<!-- resources/views/partials/navbar.blade.php -->
<header id="navbar" class="navbar">
    <div class="navbar-left">
        <button id="menu-toggle" class="menu-toggle-btn">
            <div></div>
            <div></div>
            <div></div>
        </button>
    </div>
    <div class="navbar-right">
     <div class="profile-icon">
    @auth
        @if(Auth::user()->profile && Auth::user()->profile->profile_photo)
            <img src="{{ asset('public/storage/' . Auth::user()->profile->profile_photo) }}" alt="Profile" class="profile-img">
        @else
            <img src="{{ asset('public/image/admin logo.png') }}" alt="Default Profile" class="profile-img">
        @endif
    @else
        <img src="{{ asset('public/image/admin logo.png') }}" alt="Default Profile" class="profile-img">
    @endauth
</div>

<span class="navbar-user">
    @auth
        {{ Auth::user()->profile->name ?? Auth::user()->name }}
    @else
        Guest
    @endauth
</span>



        <div class="dropdown-menu">
            {{-- <a href="{{ route('profile') }}" class="dropdown-item">Profile</a> --}}

              @if(Auth::check())
              <!-- User is authenticated, so you can access $user->id -->
              <a href="{{ route('profile', Auth::user()->id) }}" class="dropdown-item">View Profile</a>
          @else
              <!-- If the user is not authenticated -->
              <a href="{{ route('login') }}">Login</a>
          @endif

            <!-- Logout Functionality -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </div>
</header>
