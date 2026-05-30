<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

    
    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Tour Packages</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a href="<?php echo e(route('tour-packages.create')); ?>"
                       class="btn btn-primary">

                        Add New Package

                    </a>

                </div>

            </div>

        </div>

    </section>


    
    <section class="content">

        <div class="container-fluid">

            <div class="card">

                <div class="card-header">

                    <h3 class="card-title">
                        All Tour Packages
                    </h3>

                </div>

                <div class="card-body table-responsive">

                    <table class="table table-bordered table-striped">

                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Banner</th>

                                <th>Title</th>

                                <th>Duration</th>

                                <th>Location</th>

                                <th>Created At</th>

                                <th width="150">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php $__empty_1 = true; $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <tr>

                                    <td>
                                        <?php echo e($package->id); ?>

                                    </td>

                                    <td>

                                        <?php if($package->banner_image): ?>

                                            <img src="<?php echo e(asset('public/uploads/tours/' . $package->banner_image)); ?>"
                                                 width="80"
                                                 height="60"
                                                 style="object-fit:cover; border-radius:5px;">

                                        <?php else: ?>

                                            N/A

                                        <?php endif; ?>

                                    </td>

                                    <td>
                                        <?php echo e($package->title); ?>

                                    </td>

                                    <td>
                                        <?php echo e($package->duration); ?>

                                    </td>

                                    <td>
                                        <?php echo e($package->location); ?>

                                    </td>

                                    <td>
                                        <?php echo e($package->created_at->format('d M Y')); ?>

                                    </td>

                                    <td>

                                        <form action="<?php echo e(route('tour-packages.destroy', $package->id)); ?>"
                                            method="POST"
                                            style="display:inline-block;"
                                            onsubmit="return confirm('Are you sure you want to delete this package?')">

                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>

                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>

                                        </form>

                                        <a href="<?php echo e(route('tour-packages.edit', $package->id)); ?>"
                                           class="btn btn-sm btn-warning">

                                            Edit

                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>

                                    <td colspan="7" class="text-center">

                                        No Tour Packages Found

                                    </td>

                                </tr>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </section>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\htdocs\vrinda-taxi\resources\views/admin/tour-packages/index.blade.php ENDPATH**/ ?>