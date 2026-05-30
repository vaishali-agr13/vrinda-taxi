<?php $__env->startSection('content'); ?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Edit Car</h1>
                </div>

                <div class="col-sm-6 text-right">
                    <a href="<?php echo e(route('cars.index')); ?>" class="btn btn-secondary">
                        Back
                    </a>
                </div>

            </div>

        </div>
    </section>

    <section class="content">

        <div class="container-fluid">

            <div class="card card-primary">

                <div class="card-header">
                    <h3 class="card-title">Update Car Details</h3>
                </div>

                <form action="<?php echo e(route('cars.update', $car->id)); ?>"
                      method="POST"
                      enctype="multipart/form-data">

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Car Name</label>

                                    <input type="text"
                                           name="car_name"
                                           class="form-control"
                                           value="<?php echo e($car->car_name); ?>"
                                           required>
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Passengers</label>

                                    <input type="number"
                                           name="passengers"
                                           class="form-control"
                                           value="<?php echo e($car->passengers); ?>">
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Bags</label>

                                    <input type="number"
                                           name="bags"
                                           class="form-control"
                                           value="<?php echo e($car->bags); ?>">
                                </div>
                            </div>

                            <div class="col-md-6">
                                        <div class="form-group">
                                    <label>Transmission Type</label>
                                    <select name="transmission_type" class="form-control" required>
                                        <option value="">-- Select Transmission Type --</option>

                                        <option value="manual"
                                            <?php echo e(old('transmission_type', $car->transmission_type) == 'manual' ? 'selected' : ''); ?>>
                                            Manual
                                        </option>

                                        <option value="automatic"
                                            <?php echo e(old('transmission_type', $car->transmission_type) == 'automatic' ? 'selected' : ''); ?>>
                                            Automatic
                                        </option>

                                        <option value="semi_automatic"
                                            <?php echo e(old('transmission_type', $car->transmission_type) == 'semi_automatic' ? 'selected' : ''); ?>>
                                            Semi Automatic
                                        </option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        

                        <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Car Model</label>
                                <input type="text"
                                    name="car_model"
                                    class="form-control"
                                    placeholder="Enter car model"
                                    value="<?php echo e(old('car_model', $car->car_model)); ?>">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fuel Type</label>
                                <select name="fuel_type" class="form-control" required>
                                    <option value="">-- Select Fuel Type --</option>

                                    <option value="petrol"
                                        <?php echo e(old('fuel_type', $car->fuel_type) == 'petrol' ? 'selected' : ''); ?>>
                                        Petrol
                                    </option>

                                    <option value="diesel"
                                        <?php echo e(old('fuel_type', $car->fuel_type) == 'diesel' ? 'selected' : ''); ?>>
                                        Diesel
                                    </option>

                                    <option value="cng"
                                        <?php echo e(old('fuel_type', $car->fuel_type) == 'cng' ? 'selected' : ''); ?>>
                                        CNG
                                    </option>

                                    <option value="petrol_cng"
                                        <?php echo e(old('fuel_type', $car->fuel_type) == 'petrol_cng' ? 'selected' : ''); ?>>
                                        Petrol + CNG
                                    </option>

                                </select>
                            </div>
                        </div>
                      </div>
                        

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>AC Type</label>

                                    <input type="text"
                                           name="ac_type"
                                           class="form-control"
                                           value="<?php echo e($car->ac_type); ?>">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Price Per KM</label>

                                    <input type="number"
                                           step="0.01"
                                           name="price_per_km"
                                           class="form-control"
                                           value="<?php echo e($car->price_per_km); ?>">
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Base Fare</label>

                                    <input type="number"
                                           step="0.01"
                                           name="base_fare"
                                           class="form-control"
                                           value="<?php echo e($car->base_fare); ?>">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Sort Order</label>

                                    <input type="number"
                                           name="sort_order"
                                           class="form-control"
                                           value="<?php echo e($car->sort_order); ?>">
                                </div>

                            </div>

                        </div>

                        

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>Status</label>

                                    <select name="status" class="form-control">

                                        <option value="1"
                                            <?php echo e($car->status == 1 ? 'selected' : ''); ?>>
                                            Active
                                        </option>

                                        <option value="0"
                                            <?php echo e($car->status == 0 ? 'selected' : ''); ?>>
                                            Inactive
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>Featured</label>

                                    <select name="is_featured" class="form-control">

                                        <option value="1"
                                            <?php echo e($car->is_featured == 1 ? 'selected' : ''); ?>>
                                            Yes
                                        </option>

                                        <option value="0"
                                            <?php echo e($car->is_featured == 0 ? 'selected' : ''); ?>>
                                            No
                                        </option>

                                    </select>

                                </div>

                            </div>

                            

                        </div>

                        <div class="form-group">

                                    <label>Description</label>

                                    <textarea name="description"
                                            class="form-control"
                                            rows="4"><?php echo e($car->description); ?></textarea>
                            </div>

                        <div class="form-group">

                            <label>Current Image</label>

                            <br>

                            <?php if($car->car_image): ?>

                                <img src="<?php echo e(asset('public/uploads/cars/'.$car->car_image)); ?>"
                                     width="150"
                                     class="mb-3">

                            <?php endif; ?>

                        </div>

                        <div class="form-group">

                            <label>Change Image</label>

                            <input type="file"
                                   name="car_image"
                                   class="form-control">

                        </div>

                    </div>

                    <div class="card-footer">

                        <button type="submit" class="btn btn-primary">
                            Update Car
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\htdocs\vrinda-taxi\resources\views/admin/cars/edit.blade.php ENDPATH**/ ?>