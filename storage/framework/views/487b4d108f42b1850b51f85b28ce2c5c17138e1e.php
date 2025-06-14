
<?php $__env->startSection('title', 'EduX | Edit Blogs'); ?>



<?php $__env->startSection('content'); ?>
<div class="settings-container">
    <header class="edit-student-header">
        <h1>Edit Blog Details</h1>
        <a href="<?php echo e(route('blog.index')); ?>" class="back-btn"><i class="fas fa-arrow-left"></i> Back to Blog List</a>
    </header>
<br>
<br>
    <form class="edit-form" action="<?php echo e(route('blog.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="<?php echo e(old('title', $blog->title)); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" required><?php echo e(old('description', $blog->description)); ?></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" id="category" name="category" value="<?php echo e(old('category', $blog->category)); ?>" required>
        </div>
        <div class="form-group">
            <label for="date">Published Date</label>
            <input type="date" id="date" name="date" value="<?php echo e(old('date', $blog->published_date->format('Y-m-d'))); ?>" required>
        </div>
        
        <!-- Display the old image if it exists -->
        <?php if($blog->image): ?>
            <div class="form-group">
                <label for="old-image">Current Image</label>
                <img src="<?php echo e(asset('storage/' . $blog->image)); ?>" alt="Blog Image" class="img-thumbnail" style="max-width: 200px;">
            </div>
        <?php endif; ?>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        
        <button type="submit" class="btnupdate">Update Blog</button>
    </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/blogs/edit.blade.php ENDPATH**/ ?>