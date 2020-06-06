<?php $__env->startSection('body'); ?>
    <!-- Navigation -->
    <?php echo $__env->make('_partials.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(<?php echo e($page->image ? $page->image : '/assets/images/home-bg.jpg'); ?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1><?php echo e($page->title ? $page->title : $page->siteName); ?></h1>
                        <span class="subheading"><?php echo e($page->subtitle ? $page->subtitle : $page->siteDescription); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php echo $__env->make('_partials/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\care-for-you\source/_layouts/page.blade.php ENDPATH**/ ?>