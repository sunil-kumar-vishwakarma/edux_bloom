

<?php $__env->startSection('content'); ?>
    <div class="settings-container">
         <header class="edit-student-header">
           <h1>Edit Webinar</h1>
            <a href="<?php echo e(route('webinars.index')); ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Webinar
                List</a>
        </header>
        <br>
        <br>
        <form action="<?php echo e(route('webinars.update', $webinar->id)); ?>" method="POST">
            <?php echo csrf_field(); ?> 
            <?php echo method_field('PUT'); ?>

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" value="<?php echo e($webinar->type); ?>" required>
            </div>

            <div class="form-group">
                <label>Title</label>
                <textarea name="title" class="form-control" required><?php echo e($webinar->title); ?></textarea>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" class="form-control" value="<?php echo e($webinar->date); ?>" required>
            </div>

            <div class="form-group">
                <label>Time</label>
                <input type="text" name="time" class="form-control" value="<?php echo e($webinar->time); ?>" required>
            </div>

            <button class="btn btn-primary">Update</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/webinars/edit.blade.php ENDPATH**/ ?>