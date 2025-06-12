<aside id="sidebar" class="sidebar">
    <div class="sidebar-logo">
        <a href="<?php echo e(route('dashboard')); ?>" style="text-decoration: none; color: inherit;">
            <h2>EduX</h2>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-item">
            <a href="<?php echo e(route('dashboard')); ?>" class="<?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>">
                <i class="fas fa-tachometer-alt icon"></i>
                Dashboard
            </a>
        </li>


        <li class="menu-item dropdown">
            <i class="fas fa-building icon"></i> Institute ▼
            <ul class="submenu">

                <li class="submenu-item"> <a href="<?php echo e(route('cities.index')); ?>"
                        class="<?php echo e(request()->routeIs('cities-list') ? 'active' : ''); ?>">City List</a></li>
                <li class="submenu-item"> <a href="<?php echo e(route('countries.index')); ?>"
                        class="<?php echo e(request()->routeIs('countries-list') ? 'active' : ''); ?>">Country List</a></li>
                <li class="submenu-item"> <a href="<?php echo e(route('colleges.index')); ?>"
                        class="<?php echo e(request()->routeIs('colleges-list') ? 'active' : ''); ?>">College List</a></li>
                <li class="submenu-item"> <a href="<?php echo e(route('school.index')); ?>"
                        class="<?php echo e(request()->routeIs('schools-list') ? 'active' : ''); ?>">Schools List</a></li>

            </ul>
        </li>

        <li class="menu-item">
            <a href="<?php echo e(route('students-list')); ?>" class="<?php echo e(request()->routeIs('students-list') ? 'active' : ''); ?>">
                <i class="fas fa-graduation-cap icon"></i>
                Student List</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('admin.mentors')); ?>" class="<?php echo e(request()->routeIs('admin.mentors') ? 'active' : ''); ?>">
                <i class="fas fa-graduation-cap icon"></i>
                Mentor Applications</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('webinars.index')); ?>" class="<?php echo e(request()->routeIs('webinars.index') ? 'active' : ''); ?>">
                <i class="fas fa-graduation-cap icon"></i>
                Webinar's list</a>
        </li>

        <li class="menu-item">
            <a href="<?php echo e(route('discover_program-list')); ?>" class="<?php echo e(request()->routeIs('discover_program-list') ? 'active' : ''); ?>">
                <i class="	fas fa-book-open"></i>
                Program List </a>
        </li>


        <li class="menu-item">
            <a href="<?php echo e(route('partners-list')); ?>" class="<?php echo e(request()->routeIs('partners-list') ? 'active' : ''); ?>">
                <i class="fas fa-handshake icon"></i>
                Edu-x Team</a>
        </li>

        <li class="menu-item">
            <a href="<?php echo e(route('enquiries-list')); ?>"
                class="<?php echo e(request()->routeIs('enquiries-list') ? 'active' : ''); ?>">
                <i class="fas fa-file-alt icon"></i>Enquiry List</a>

        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('pages.edit_privacy')); ?>"
                class="<?php echo e(request()->routeIs('pages.edit_privacy') ? 'active' : ''); ?>">
                <i class="fas fa-file-alt icon"></i>Privacy Policy
            </a>
        </li>


        <li class="menu-item">
            <a href="<?php echo e(route('pages.edit_term')); ?>"
                class="<?php echo e(request()->routeIs('pages.edit_term') ? 'active' : ''); ?>">
                <i class="fas fa-file-alt icon"></i>Term and condition</a>
        </li>

        

        <li class="menu-item">
            <a href="<?php echo e(route('blog.index')); ?>" class="<?php echo e(request()->routeIs('blog.index') ? 'active' : ''); ?>">
                <i class="fas fa-blog icon"></i>
                Blog List</a>
        </li>

        <li class="menu-item">
            <a href="<?php echo e(route('subscriptions.index')); ?>"
                class="<?php echo e(request()->routeIs('subscriptions.index') ? 'active' : ''); ?>">
                <i class="fas fa-dollar-sign icon"></i>
                Subscription</a>
        </li>

        <li class="menu-item dropdown">
            <i class="fas fa-credit-card icon"></i> Payment ▼
            <ul class="submenu">
                <li class="submenu-item"><a href="<?php echo e(route('received-payments')); ?>"
                        class="<?php echo e(request()->routeIs('received-payments') ? 'active' : ''); ?>">Received</a></li>
                <li class="submenu-item"><a href="<?php echo e(route('failed-payments')); ?>"
                        class="<?php echo e(request()->routeIs('failed-payments') ? 'active' : ''); ?>">Failed/Pending</a></li>
                <li class="submenu-item"><a href="<?php echo e(route('payment-setup')); ?>"
                        class="<?php echo e(request()->routeIs('payment-setup') ? 'active' : ''); ?>">Setup Method</a></li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="<?php echo e(route('notifications')); ?>" class="<?php echo e(request()->routeIs('notifications') ? 'active' : ''); ?>">
                <i class="fas fa-bell icon"></i>
                Notification</a>
        </li>
        <li class="menu-item">
            <a href="<?php echo e(route('settings.index')); ?>"
                class="<?php echo e(request()->routeIs('settings.index') ? 'active' : ''); ?>">
                <i class="fas fa-cogs icon"></i>
                Settings</a>
        </li>

    </ul>
</aside>
<?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>