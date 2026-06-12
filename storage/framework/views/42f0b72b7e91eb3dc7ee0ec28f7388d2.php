<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <div class="row mb-4">
        <div class="col-md-12">
            <h3>Dashboard</h3>
        </div>
    </div>

    <div class="row">

       <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-primary text-white shadow h-100">
                <div class="card-body">
                    <h6>Total Bookings</h6>
                    <h3><?php echo e($totalBookings); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning text-dark shadow h-100">
                <div class="card-body">
                    <h6>Pending Bookings</h6>
                    <h3><?php echo e($pendingBookings); ?></h3>
                </div>
            </div>
        </div>

       <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success text-white shadow h-100">
                <div class="card-body">
                    <h6>Confirmed Bookings</h6>
                    <h3><?php echo e($confirmedBookings); ?></h3>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-danger text-white shadow h-100">
                <div class="card-body">
                    <h6>Cancelled Bookings</h6>
                    <h3><?php echo e($cancelledBookings); ?></h3>
                </div>
            </div>
        </div>

    </div>

   <div class="row">

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card bg-info text-white shadow h-100">
            <div class="card-body">
                <h6>Total Enquiries</h6>
                <h3><?php echo e($totalContacts); ?></h3>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card bg-secondary text-white shadow h-100">
            <div class="card-body">
                <h6>Total Packages</h6>
                <h3><?php echo e($totalPackages); ?></h3>
            </div>
        </div>
    </div>

</div>

    <div class="card shadow">
        <div class="card-header">
            <h5>Recent Bookings</h5>
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Booking No</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Trip Type</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $recentBookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($booking->booking_no); ?></td>
                        <td><?php echo e($booking->name); ?></td>
                        <td><?php echo e($booking->phone); ?></td>
                        <td><?php echo e(ucfirst($booking->trip_type)); ?></td>
                        <td>
                            <span class="badge bg-success">
                                <?php echo e(ucfirst($booking->status)); ?>

                            </span>
                        </td>
                        <td><?php echo e($booking->created_at->format('d M Y')); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            No Record Found
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\vrinda-taxi\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>