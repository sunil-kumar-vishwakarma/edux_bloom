

<?php $__env->startSection('content'); ?>
<br>
<br>
    

    <table class="subscription-table">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>School</th>
                <th>Country</th>
                <th>Applied On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mentors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $mentor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($index + 1); ?></td>
                    <td><?php echo e($mentor->name); ?></td>
                    <td><?php echo e($mentor->email); ?></td>
                    <td><?php echo e($mentor->phone); ?></td>
                    <td><?php echo e($mentor->school); ?></td>
                    <td><?php echo e($mentor->country); ?></td>
                    <td><?php echo e($mentor->created_at->format('d M, Y')); ?></td>
                    <td>
                        <button class="btnuser delete-user-btn" onclick="openDeleteModal(<?php echo e($mentor->id); ?>)">Delete</button>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <i class="fa-solid fa-triangle-exclamation"></i>
            <h3>Are you sure you want to delete this application?</h3>
            <div class="modal-buttons">
                <form id="deleteForm" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="confirm-delete-btn">Yes, Delete</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openDeleteModal(id) {
            // Show modal
            document.getElementById('deleteModal').style.display = 'block';

            // Set the form action dynamically
            const form = document.getElementById('deleteForm');
            form.action = `/admin/mentors/${id}`; // Adjust this if your route differs
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/admin/mentors.blade.php ENDPATH**/ ?>