<?php $__env->startSection('content'); ?>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title">Cars List</h3>

        <a href="<?php echo e(route('cars.create')); ?>" class="btn btn-primary">
            Add Car
        </a>
    </div>

    <?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <div class="card-body table-responsive p-0">

        <table class="table table-bordered table-hover text-nowrap">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Car Name</th>
                    <th>Passengers</th>
                    <th>Bags</th>
                    <th>Fuel</th>
                    <th>AC</th>
                    <th>Price/KM</th>
                    <th>Status</th>
                    <th>Featured</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>

                    <td><?php echo e($car->id); ?></td>

                    <td>
                        <img src="<?php echo e(asset('public/uploads/cars/'.$car->car_image)); ?>"
                             width="80"
                             height="60"
                             style="object-fit:cover;">
                    </td>

                    <td><?php echo e($car->car_name); ?></td>

                    <td><?php echo e($car->passengers); ?></td>

                    <td><?php echo e($car->bags); ?></td>

                    <td><?php echo e($car->fuel_type); ?></td>

                    <td><?php echo e($car->ac_type); ?></td>

                    <td>₹<?php echo e($car->price_per_km); ?></td>

                    <td>
                        <?php if($car->status == 1): ?>
                            <span class="badge badge-success">Active</span>
                        <?php else: ?>
                            <span class="badge badge-danger">Inactive</span>
                        <?php endif; ?>
                    </td>

                    <td>
                        <?php if($car->is_featured == 1): ?>
                            <span class="badge badge-primary">Yes</span>
                        <?php else: ?>
                            <span class="badge badge-secondary">No</span>
                        <?php endif; ?>
                    </td>

                    <td>

                        <a href="<?php echo e(route('cars.edit', $car->id)); ?>"
                           class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <form action="<?php echo e(route('cars.destroy', $car->id)); ?>"
                              method="POST"
                              style="display:inline-block;">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button type="submit"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this car?')">
                                Delete
                            </button>

                        </form>

                    </td>

                </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="11" class="text-center">
                        No Cars Found
                    </td>
                </tr>

                <?php endif; ?>

            </tbody>

        </table>

    </div>

    <div class="card-footer clearfix">
        <?php echo e($cars->links()); ?>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\htdocs\vrinda-taxi\resources\views/admin/cars/index.blade.php ENDPATH**/ ?>