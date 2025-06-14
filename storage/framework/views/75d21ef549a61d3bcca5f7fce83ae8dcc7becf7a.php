

<?php $__env->startSection('content'); ?>
    <style>
        .form-group {
            margin-bottom: 20px;
        }

        .perm-row {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
            align-items: center;
        }

        .perm-row input {
            flex: 1;
            padding: 8px;
        }

        .perm-actions button {
            font-size: 18px;
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
        }

        .add-btn {
            background-color: #28a745;
            color: #fff;
            margin-bottom: 20px;
        }

        .remove-btn {
            background-color: #dc3545;
            color: #fff;
            margin-bottom: 20px;
        }
        .add-btn:hover {
            background-color: #19722e;
            color: #fff;
        }

        .remove-btn:hover {
            background-color: #9e1b28;
            color: #fff;
        }
    </style>

   <div class="settings-container">
       
         <header class="edit-student-header">
           <h1>Create Role & Permissions</h1>
            <a href="<?php echo e(route('roles_permission.index')); ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Back to
                List</a>
        </header>
        <br>
        <br>
      
        <form action="#" method="POST">
            <?php echo csrf_field(); ?>

            <!-- Role Name -->
            <div class="form-group">
                <label for="role_name">Role Name</label>
                <input type="text" name="role_name" id="role_name" placeholder="Enter Role Name" required>
            </div>

            <!-- Permission Fields -->
            <div class="form-group">
                <label>Permissions</label>
                <div id="permission-container">
                    <div class="perm-row">
                        <input type="text" name="permissions[]" placeholder="Enter permission" required>
                        <button type="button" class="add-btn" onclick="addPermission()">＋</button>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Role</button>
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script>
        function addPermission() {
            const container = document.getElementById('permission-container');

            const row = document.createElement('div');
            row.classList.add('perm-row');

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'permissions[]';
            input.placeholder = 'Enter permission';
            input.required = true;

            const removeBtn = document.createElement('button');
            removeBtn.type = 'button';
            removeBtn.classList.add('remove-btn');
            removeBtn.textContent = '−';
            removeBtn.onclick = () => row.remove();

            row.appendChild(input);
            row.appendChild(removeBtn);

            container.appendChild(row);
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/roles_permission/create.blade.php ENDPATH**/ ?>