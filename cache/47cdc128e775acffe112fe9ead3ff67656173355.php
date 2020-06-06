<?php $__env->startSection('content'); ?><p>Looks like you've followed a broken link or entered a URL that doesn't exist on this site.</p>
<p><a href="/">&larr; Back to my site</a></p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>