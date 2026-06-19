<?php $__env->startSection('title', 'Not Found'); ?>

<?php $__env->startSection('content'); ?>
<div class="container text-center py-5">
    <h1>404</h1>
    <h2>404 - Page Not Found</h2>
    <p>The page you are looking for does not exist or may have been moved.</p>

    <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">
        Go Home
    </a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\vrinda-taxi\resources\views/errors/404.blade.php ENDPATH**/ ?>