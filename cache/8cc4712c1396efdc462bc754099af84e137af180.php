<?php $__env->startSection('content'); ?>
    <p>Static sites are unable to handle form submissions. However, there are third-party services, like <a href="https://formspree.io/" target="_blank">Formspree</a>, which can accept the form submission and email you the result.</p>
    <p>To enable form submissions via Formspree, all you need to do is add your email address in <code>config.php</code>.</p>
    <form method="POST" action="https://formspree.io/<?php echo e($page->email); ?>">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Email Address</label>
                <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
                <label>Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" name="message" id="message" required></textarea>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
        <input type="text" name="_gotcha" style="display:none" />
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\care-for-you/cache\272143ab019aba1d8fe34cf2c57562ba46d37dc5.blade.php ENDPATH**/ ?>