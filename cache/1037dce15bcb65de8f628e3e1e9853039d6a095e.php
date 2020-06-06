<!DOCTYPE html>
<html lang="en">
    <head>
        <?php if($page->production && $page->gaTrackingId): ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($page->gaTrackingId); ?>"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '<?php echo e($page->gaTrackingId); ?>');
        </script>
        <?php endif; ?>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title><?php echo e($page->siteName); ?><?php echo e($page->title ? ' | ' . $page->title : ''); ?></title>

        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <?php $__env->startSection('meta'); ?>
        <!-- Search Engine -->
        <meta name="description" content="<?php echo e($page->description ?? $page->excerpt ?? $page->siteDescription); ?>">
        <!-- Schema.org for Google -->
        <meta itemprop="name" content="<?php echo e($page->siteName); ?><?php echo e($page->title ? ' | ' . $page->title : ''); ?>">
        <meta itemprop="description" content="<?php echo e($page->description ?? $page->excerpt ?? $page->siteDescription); ?>">
        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo e($page->siteName); ?><?php echo e($page->title ? ' | ' . $page->title : ''); ?>">
        <meta name="twitter:description" content="<?php echo e($page->description ?? $page->excerpt ?? $page->siteDescription); ?>">
        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="<?php echo e($page->title ?  $page->title . ' | ' : ''); ?><?php echo e($page->siteName); ?>">
        <meta name="og:description" content="<?php echo e($page->description ?? $page->excerpt ?? $page->siteDescription); ?>">
        <meta name="og:type" content="website">
        <?php echo $__env->yieldSection(); ?>

        <link rel="stylesheet" href="<?php echo e(mix('css/main.css', 'assets/build')); ?>">
    </head>
    <body>
        <?php echo $__env->yieldContent('body'); ?>
        <script src="<?php echo e(mix('js/main.js', 'assets/build')); ?>" type="text/javascript"></script>
    </body>
</html>
<?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\care-for-you\source/_layouts/master.blade.php ENDPATH**/ ?>