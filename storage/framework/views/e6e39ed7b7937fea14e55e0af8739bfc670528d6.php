

<?php $__env->startSection('content'); ?>
    <div class="settings-container">
       
         <header class="edit-student-header">
           <h1>Create Webinar</h1>
            <a href="<?php echo e(route('webinars.index')); ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Webinar
                List</a>
        </header>
        <br>
        <br>
        
        <form action="<?php echo e(route('webinars.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Title</label>
                <textarea name="title" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="text" name="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Time</label>
                <input type="text" name="time" class="form-control" required>
            </div>


            <button class="btn btn-success">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/webinars/create.blade.php ENDPATH**/ ?>