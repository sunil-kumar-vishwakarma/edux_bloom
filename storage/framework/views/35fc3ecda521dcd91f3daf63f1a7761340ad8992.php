
<?php $__env->startSection('title', 'EduX | Edit Page'); ?>
<?php $__env->startSection('content'); ?>
    <div class="settings-container">
        <header class="edit-student-header">
            <h1>Privacy Policy</h1>
        </header>
        <br><br>

        <form action="<?php echo e(route('pages.edit_privac.storey')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
           
            <!-- Title Field -->
            <div class="section-form">
                <label for="Title">Title*</label>
                <input type="text" id="Title" name="title"  value="<?php echo e($PageList->title ?? ''); ?>" required>
                <input type="hidden" id="type" name="type"  value="privacy">
            </div>

            <!-- Description Field -->
            <div class="input-textarea">
                <label for="description">Description*</label>
                <textarea id="description" name="description" cols="10" rows="5"><?php echo e($PageList->description ?? ''); ?></textarea>
            </div>
            <br><br>

            <button type="submit">Update Page</button>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                editor.editing.view.change(writer => {
                    writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/pages/edit_privacy.blade.php ENDPATH**/ ?>