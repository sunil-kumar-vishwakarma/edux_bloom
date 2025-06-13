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
        <img src="<?php echo e(asset('image/admin logo.png')); ?>" alt="Profile" class="profile-img">
        



        <li>
            <?php if(auth()->check()): ?>
                <?php echo e(auth()->user()->name ?? null); ?>

            <?php else: ?>
                Guest
            <?php endif; ?>
        </li>

        <div class="dropdown-menu">
            

            <?php if(Auth::check()): ?>
                <!-- User is authenticated, so you can access $user->id -->
                <a href="<?php echo e(route('profile', Auth::user()->id)); ?>" class="dropdown-item">View Profile</a>
            <?php else: ?>
                <!-- If the user is not authenticated -->
                <a href="<?php echo e(route('login')); ?>">Login</a>
            <?php endif; ?>

            <!-- Logout Functionality -->
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
            <a href="#" class="dropdown-item"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </div>
    </div>
</header>
<style>
    .navbar-right li {
        list-style: none;
    }
</style>
<?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/partials/navbar.blade.php ENDPATH**/ ?>