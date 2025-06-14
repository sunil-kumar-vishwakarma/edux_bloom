

<?php $__env->startSection('content'); ?>
    <div class="container">
        <button class="btncreate" onclick="window.location.href='<?php echo e(route('contact-infos.create')); ?>';">+ Create</button>

        

        <table class="employer-table">
            <thead>
                <tr>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Link</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><i class="<?php echo e($contact->icon_class); ?>"></i></td>
                        <td><?php echo e($contact->title); ?></td>
                        <td><a href="<?php echo e($contact->link); ?>" target="_blank"><?php echo e($contact->link_text); ?></a></td>
                        <td><?php echo e($contact->description); ?></td>
                        
                        <td>
                            <a href="<?php echo e(route('contact-infos.edit', $contact->id)); ?>">
                                <button class="btnuser edit-user-btn">Edit</button>
                            </a>
                            <button class="btnuser delete-user-btn"
                                onclick="openDeleteModal(<?php echo e($contact->id); ?>)">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <i class="fa-solid fa-triangle-exclamation"></i>
            <h3>Are you sure you want to delete this info?</h3>
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
            const modal = document.getElementById('deleteModal');

            if (form && modal) {
                // ✅ Correct route
                form.action = `/contact-infos/${id}`;
                modal.classList.add('show');
                modal.style.display = 'block';
            }
        }

        function closeModal() {
            const modal = document.getElementById('deleteModal');
            if (modal) {
                modal.classList.remove('show');
                modal.style.display = 'none';
            }
        }

        // Optional: Close when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('deleteModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/contact_infos/index.blade.php ENDPATH**/ ?>