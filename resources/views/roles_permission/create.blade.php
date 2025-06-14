@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/roles&permission.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" />


    <div class="role-wrapper">


        <div class="input-block">
            <label for="role-name">Role Name</label>
            <input type="text" id="role-name" placeholder="Enter role name" />
        </div>

        <div class="permissions-area">
            <div class="perm-title-row">
                <h3>Permissions</h3>
                <input type="text" class="search-input" placeholder="Search permissions..." />
            </div>

            <div class="perm-grid">
                <!-- Example Permission Box -->

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Dashboard<span class="perm-count">01</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View Dashboard</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Institute<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Student List<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Mentor Applications<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Webinar's List<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Roles Permission<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Contact Info<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Program List<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Edu-x Team<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Enquiry List<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Privacy Policy<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Term and Condition<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Blog List<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Subscription<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Payment<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Notification<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Settings<span class="perm-count">03</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View button</li>
                        <li><input type="checkbox" />create button</li>
                        <li><input type="checkbox" />edit button</li>
                    </ul>
                </div>

                <!-- Add more perm-box sections here -->
            </div>
        </div>
    </div>

    <script>
        function selectAll(button) {
            const checkboxes = button.closest('.perm-box').querySelectorAll('input[type="checkbox"]');
            const allChecked = Array.from(checkboxes).every(cb => cb.checked);

            checkboxes.forEach(cb => cb.checked = !allChecked);
            button.textContent = allChecked ? 'Select All' : 'Unselect All';
        }
    </script>
@endsection
