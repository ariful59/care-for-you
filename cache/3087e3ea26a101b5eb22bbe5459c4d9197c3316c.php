<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $pagination->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="post-preview">
            <a href="<?php echo e($post->getPath()); ?>">
                <h2 class="post-title">
                    <?php echo e($post->title); ?>

                </h2>
                <h3 class="post-subtitle">
                    <?php echo e($post->getExcerpt(125)); ?>

                </h3>
            </a>
            <p class="post-meta">Posted on <?php echo e(date('F jS, Y', $post->date)); ?><?php if($post->showReadingTime): ?> &bull; <?php echo e($post->readingTime($post)); ?><?php endif; ?></p>
        </div>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Pager -->
    <div class="clearfix">
        <?php if($previous = $pagination->previous): ?>
            <a class="btn btn-primary float-left" href="<?php echo e($page->baseUrl); ?><?php echo e($previous); ?>">&larr; Newer Posts</a>
        <?php endif; ?>
        <?php if($next = $pagination->next): ?>
            <a class="btn btn-primary float-right" href="<?php echo e($page->baseUrl); ?><?php echo e($next); ?>">Older Posts &rarr;</a>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\care-for-you/cache\09839b531421e6a4c483a98ca75a7c99d4f3a4b2.blade.php ENDPATH**/ ?>