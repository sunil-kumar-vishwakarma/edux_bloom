
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/contactus.css')); ?>">
    <div class="container1">
        <h1>Contact Us</h1>
        <p class="contact-data">
            Our dedicated team is always ready to support you. Whether you have a question, need guidance, or just want
            to say hello, feel free to connect with us anytime.
        </p>

        


        <?php if($contacts->isEmpty()): ?>
            <h1>No contact information available.</h1><br>
        <?php else: ?>
            <div class="card-container">
                <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="contact-card">
                        <div class="mv-icon-circle"><i class="<?php echo e($contact->icon_class); ?>"></i></div>
                        <h4><?php echo e($contact->title); ?>

                            
                        </h4>
                        <?php if($contact->link && $contact->link_text): ?>
                            <p class="highlight"><a href="<?php echo e($contact->link); ?>"><?php echo e($contact->link_text); ?></a></p>
                        <?php endif; ?>
                        <hr />
                        <p><?php echo e($contact->description); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>



        <p class="txt">
            At Edu-X, we believe in delivering exceptional support and service. Whether you're exploring new educational
            opportunities or need help with an existing application, our team is here to provide prompt, reliable
            assistance. Reach out through any of our channels — we're just one message away!
        </p>

        <div class="social-icons">
            <a href="#" aria-label="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/eduxservices/" aria-label="Facebook" target="_blank"><i
                    class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/edux_services/" aria-label="Instagram" target="_blank"><i
                    class="fab fa-instagram"></i></a>
            <a href="#" aria-label="TikTok" target="_blank"><i class="fab fa-tiktok"></i></a>
            <a href="#" aria-label="YouTube" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4828259742403!2d-17.443674225074346!3d14.685266285811174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec17324374a4171%3A0x53f6bf2f0180a813!2zQ2l0w6kgZGUgbOKAmcOJbWVyZ2VuY2U!5e0!3m2!1sen!2sin!4v1748340925727!5m2!1sen!2sin"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        <br>
        <br>
        <br>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31151.27119444709!2d-8.096038363258542!3d12.588255480650743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe51cbe017ef2d23%3A0x300a9416d92b6a46!2s%C3%89changeur%20pour%20Pi%C3%A9tons%201!5e0!3m2!1sen!2sin!4v1748508197282!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontent.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL\Documents\GitHub\edux_bloom\resources\views/contact.blade.php ENDPATH**/ ?>