<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">

<div class="login-box">

    <div class="login-logo">
        <b>Admin</b> Login
    </div>

    <div class="card">

        <div class="card-body login-card-body">

            <p class="login-box-msg">
                Sign in to start your session
            </p>

            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('admin.login.submit')); ?>"
                  method="POST">

                <?php echo csrf_field(); ?>

                <div class="input-group mb-3">

                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Email">

                </div>

                <div class="input-group mb-3">

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Password">

                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">

                    Login

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\htdocs\vrinda-taxi\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>