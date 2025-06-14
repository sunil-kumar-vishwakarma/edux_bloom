

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Statistics</h2>
        <a href="<?php echo e(route('stats.edit', $stat->id)); ?>" class="btn btn-primary">Edit Stats</a>

        <ul>
            <li><strong>Students Helped:</strong> <?php echo e($stat->students_helped); ?></li>
            <li><strong>Programs Offered:</strong> <?php echo e($stat->programs_offered); ?></li>
            <li><strong>Institutions:</strong> <?php echo e($stat->institutions); ?></li>
            <li><strong>Countries:</strong> <?php echo e($stat->countries); ?></li>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/stats/index.blade.php ENDPATH**/ ?>