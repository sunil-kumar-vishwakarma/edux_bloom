<aside id="sidebar" class="sidebar">
    <div class="sidebar-logo">
        <a href="{{ route('dashboard') }}" style="text-decoration: none; color: inherit;">
            <h2>EduX</h2>
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-item">
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fas fa-chart-line icon"></i> Dashboard
            </a>
        </li>

        {{-- <li class="menu-item dropdown">
            <i class="fas fa-university icon"></i> Institute ▼
            <ul class="submenu">
                <li class="submenu-item"><a href="{{ route('cities.index') }}" class="{{ request()->routeIs('cities-list') ? 'active' : '' }}">City List</a></li>
                <li class="submenu-item"><a href="{{ route('countries.index') }}" class="{{ request()->routeIs('countries-list') ? 'active' : '' }}">Country List</a></li>
                <li class="submenu-item"><a href="{{ route('colleges.index') }}" class="{{ request()->routeIs('colleges-list') ? 'active' : '' }}">College List</a></li>
                <li class="submenu-item"><a href="{{ route('school.index') }}" class="{{ request()->routeIs('schools-list') ? 'active' : '' }}">Schools List</a></li>
            </ul>
        </li> --}}

        <li class="menu-item">
            <a href="{{ route('students-list') }}" class="{{ request()->routeIs('students-list') ? 'active' : '' }}">
                <i class="fas fa-user-graduate icon"></i> Student List
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.mentors') }}" class="{{ request()->routeIs('admin.mentors') ? 'active' : '' }}">
                <i class="fas fa-chalkboard-teacher icon"></i> Mentor Applications
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('webinars.index') }}" class="{{ request()->routeIs('webinars.index') ? 'active' : '' }}">
                <i class="fas fa-video icon"></i> Webinar's List
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('roles_permission.index') }}" class="{{ request()->routeIs('roles_permission.index') ? 'active' : '' }}">
                <i class="fas fa-user-shield icon"></i> Roles Permission
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('contact-infos.index') }}" class="{{ request()->routeIs('contact-infos.index') ? 'active' : '' }}">
                <i class="fas fa-envelope icon"></i> Contact Info
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('stats.index') }}" class="{{ request()->routeIs('stats.index') ? 'active' : '' }}">
                <i class="fas fa-envelope icon"></i>State's
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('discover_program-list') }}" class="{{ request()->routeIs('discover_program-list') ? 'active' : '' }}">
                <i class="fas fa-book-reader icon"></i> Program List
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('partners-list') }}" class="{{ request()->routeIs('partners-list') ? 'active' : '' }}">
                <i class="fas fa-users icon"></i> Edu-x Team
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('enquiries-list') }}" class="{{ request()->routeIs('enquiries-list') ? 'active' : '' }}">
                <i class="fas fa-question-circle icon"></i> Enquiry List
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('pages.edit_privacy') }}" class="{{ request()->routeIs('pages.edit_privacy') ? 'active' : '' }}">
                <i class="fas fa-user-secret icon"></i> Privacy Policy
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('pages.edit_term') }}" class="{{ request()->routeIs('pages.edit_term') ? 'active' : '' }}">
                <i class="fas fa-file-contract icon"></i> Term and Condition
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('blog.index') }}" class="{{ request()->routeIs('blog.index') ? 'active' : '' }}">
                <i class="fas fa-newspaper icon"></i> Blog List
            </a>
        </li>
        {{-- <li class="menu-item">
            <a href="{{ route('subscriptions.index') }}" class="{{ request()->routeIs('subscriptions.index') ? 'active' : '' }}">
                <i class="fas fa-receipt icon"></i> Subscription
            </a>
        </li> --}}
        <li class="menu-item dropdown">
            <i class="fas fa-wallet icon"></i> Payment ▼
            <ul class="submenu">
                <li class="submenu-item"><a href="{{ route('received-payments') }}" class="{{ request()->routeIs('received-payments') ? 'active' : '' }}">Received</a></li>
                <li class="submenu-item"><a href="{{ route('failed-payments') }}" class="{{ request()->routeIs('failed-payments') ? 'active' : '' }}">Failed/Pending</a></li>
                <li class="submenu-item"><a href="{{ route('payment-setup') }}" class="{{ request()->routeIs('payment-setup') ? 'active' : '' }}">Setup Method</a></li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ route('notifications') }}" class="{{ request()->routeIs('notifications') ? 'active' : '' }}">
                <i class="fas fa-bell icon"></i> Notification
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('settings.index') }}" class="{{ request()->routeIs('settings.index') ? 'active' : '' }}">
                <i class="fas fa-sliders-h icon"></i> Settings
            </a>
        </li>
    </ul>
</aside>
