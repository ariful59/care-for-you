<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <?php $__currentLoopData = $page->socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-inline-item">
                            <a href="<?php echo e($social->link); ?>" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="<?php echo e($social->icon); ?> fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <p class="copyright text-muted">Copyright &copy; <?php echo e($page->siteName); ?> <script type="text/javascript">document.write(new Date().getFullYear());</script></p>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\Users\Lenovo\OneDrive\Desktop\care-for-you\source/_partials/footer.blade.php ENDPATH**/ ?>