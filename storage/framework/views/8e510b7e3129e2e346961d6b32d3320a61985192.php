

<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/roles&permission.css')); ?>">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" />


    <div class="role-wrapper">
        <div class="role-header">
            <h1>Create New Role</h1>
        </div>

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
                        <span>Team<span class="perm-count">17</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View Dashboard</li>
                        <li><input type="checkbox" />View Institute</li>
                        <li><input type="checkbox" />View Student List</li>
                        <li><input type="checkbox" />View Mentor Applications</li>
                        <li><input type="checkbox" />View Webinar's List</li>
                        <li><input type="checkbox" />View Roles Permission</li>
                        <li><input type="checkbox" />View Contact Info</li>
                        <li><input type="checkbox" />View Program List</li>
                        <li><input type="checkbox" />View Edu-x Team</li>
                        <li><input type="checkbox" />View Enquiry List</li>
                        <li><input type="checkbox" />View Privacy Policy</li>
                        <li><input type="checkbox" />View Term and Condition</li>
                        <li><input type="checkbox" />View Blog List</li>
                        <li><input type="checkbox" />View Subscription</li>
                        <li><input type="checkbox" />View Payment</li>
                        <li><input type="checkbox" />View Notification</li>
                        <li><input type="checkbox" />View Settings</li>
                    </ul>

                </div>
                <div class="perm-box theme-blue">
                    <div class="perm-header">
                        <span>Team<span class="perm-count">17</span></span>
                        <a onclick="selectAll(this)">Select All</a>
                    </div>
                    <ul>
                        <li><input type="checkbox" />View Dashboard</li>
                        <li><input type="checkbox" />View Institute</li>
                        <li><input type="checkbox" />View Student List</li>
                        <li><input type="checkbox" />View Mentor Applications</li>
                        <li><input type="checkbox" />View Webinar's List</li>
                        <li><input type="checkbox" />View Roles Permission</li>
                        <li><input type="checkbox" />View Contact Info</li>
                        <li><input type="checkbox" />View Program List</li>
                        <li><input type="checkbox" />View Edu-x Team</li>
                        <li><input type="checkbox" />View Enquiry List</li>
                        <li><input type="checkbox" />View Privacy Policy</li>
                        <li><input type="checkbox" />View Term and Condition</li>
                        <li><input type="checkbox" />View Blog List</li>
                        <li><input type="checkbox" />View Subscription</li>
                        <li><input type="checkbox" />View Payment</li>
                        <li><input type="checkbox" />View Notification</li>
                        <li><input type="checkbox" />View Settings</li>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/roles_permission/index.blade.php ENDPATH**/ ?>