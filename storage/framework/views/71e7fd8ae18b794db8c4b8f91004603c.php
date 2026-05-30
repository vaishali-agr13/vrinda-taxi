<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?></title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-free/css/all.min.css')); ?>">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/adminlte.min.css')); ?>">

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <?php echo $__env->make('admin.layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Sidebar -->
    <?php echo $__env->make('admin.layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Main Content -->
    <div class="content-wrapper">

        <!-- Page Header -->
        <section class="content-header">
            <div class="container-fluid">
                <?php echo $__env->yieldContent('page_header'); ?>
            </div>
        </section>

        <!-- Page Content -->
        <section class="content">
            <div class="container-fluid">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <?php echo $__env->make('admin.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</div>

<!-- jQuery -->
<script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>

<!-- Bootstrap -->
<script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<!-- AdminLTE -->
<script src="<?php echo e(asset('admin/dist/js/adminlte.min.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\htdocs\vrinda-taxi\resources\views/admin/layouts/master.blade.php ENDPATH**/ ?>