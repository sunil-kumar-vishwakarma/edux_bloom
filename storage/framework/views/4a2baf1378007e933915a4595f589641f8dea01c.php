

<?php $__env->startSection('content'); ?>
    <button class="btncreate" onclick="window.location.href='<?php echo e(route('webinars.create')); ?>';">+ Create Webinar</button>

    <table class="employer-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Type</th>
                <th>Title</th>
                <th>Date</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $webinars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webinar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                     <td><?php echo e($loop->iteration); ?></td> 
                    <td><?php echo e($webinar->type); ?></td>
                    <td><?php echo e($webinar->title); ?></td>
                    <td><?php echo e($webinar->date); ?></td>
                    <td><?php echo e($webinar->time); ?></td>
                    <td>
                        <a href="<?php echo e(route('webinars.edit', $webinar->id)); ?>">
                            <button class="btnuser edit-user-btn">Edit</button>
                        </a>
                        <button class="btnuser delete-user-btn" onclick="openDeleteModal(<?php echo e($webinar->id); ?>)">Delete</button>
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
            <h3>Are you sure you want to delete this webinar?</h3>
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
            const form = document.getElementById('deleteForm');
            form.action = '/admin/webinars/' + id;
            document.getElementById('deleteModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/webinars/index.blade.php ENDPATH**/ ?>