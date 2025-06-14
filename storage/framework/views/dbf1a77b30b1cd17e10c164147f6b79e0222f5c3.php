

<?php $__env->startSection('content'); ?>
  <div class="settings-container">
  <header class="edit-student-header">
            <h1>Edit Contact Info</h1>
            <a href="<?php echo e(route('contact-infos.index')); ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Contact
                Info list</a>
        </header>
        <br>
        <br>

    <form action="<?php echo e(route('contact-infos.update', $contact_info->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('contact_infos.form', ['contact' => $contact_info], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/contact_infos/edit.blade.php ENDPATH**/ ?>