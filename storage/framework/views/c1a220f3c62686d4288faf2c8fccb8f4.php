<?php $__env->startSection('content'); ?>
      


    <!--===== header ==========-->
    <main class="main">

        <!-- breadcrumb -->

        <div class="site-breadcrumb ng-mt" style="background: url('<?php echo e(asset('public/uploads/tours/'.$tour->banner_image)); ?>')">

            <div class="container">

                <h3 class="breadcrumb-title"><?php echo e($tour->location); ?> ======Tour</h3>

                <ul class="breadcrumb-menu">

                    <li><a href="/">Home</a></li>

                    <li class="active">About Us</li>

                </ul>

            </div>

        </div>

        <!-- breadcrumb end -->

        <div class="service-single py-120">
            <div class="container">
                <div class="service-single-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="service-sidebar">
                                <div class="widget">
                                    <h4 class="title">All Services</h4>
                                    <div class="category">
                                        <a href="#"><i class="far fa-angle-double-right"></i>Taxi Service in Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Cab Service in Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Taxi Service</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Cab Booking</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Book Cab in Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Taxi Booking Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Local Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Car Rental</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Best Taxi Service in Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Best Cab Service in Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Cheap Taxi in Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Affordable Cab Vrindavan</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Travel Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Tour Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Sightseeing Cab</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Outstation Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Airport Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Railway Station Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Taxi Near Me</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Cab Near Me</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Taxi Booking Online</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Cab Service 24x7</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Taxi Phone Number</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Taxi Contact</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Car Hire Service</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Private Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Tempo Traveller</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan SUV Taxi</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Sedan Cab</a>
                                        <a href="#"><i class="far fa-angle-double-right"></i>Vrindavan Taxi for Tourists</a>
                                    </div>
                                </div>
                                <!-- <div class="widget">
                    <h4 class="title">Download</h4>
                    <div class="service-download">
                      <a href="#"><i class="far fa-file-pdf"></i> Download Brochure</a>
                      <a href="#"><i class="far fa-file-alt"></i> Download Application</a>
                    </div>
                  </div> -->
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="service-details">
                                <div class="mb-30">
                                    <img src="<?php echo e(asset('public/uploads/tours/'.$tour->featured_image)); ?>" alt="thumb">
                                </div>
                                <div class="content">



                                    <h3 class="blog-details-title mb-3">
                                      <?php echo e($tour->duration); ?>  <?php echo e($tour->title); ?>

                                    </h3>

                             

                                    <hr>

                                    <h4 class="mb-3">🗓️ Detailed Itinerary</h4>

                                    <div class="accordion" id="tourAccordion">
                                    <?php $__currentLoopData = $itineraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $itinerary): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <div class="accordion-item">

                                                <h2 class="accordion-header" id="heading<?php echo e($key); ?>">
                                                    <button class="accordion-button <?php echo e($key != 0 ? 'collapsed' : ''); ?>"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse<?php echo e($key); ?>"
                                                            aria-expanded="<?php echo e($key == 0 ? 'true' : 'false'); ?>"
                                                            aria-controls="collapse<?php echo e($key); ?>">

                                                        Day <?php echo e($itinerary->day_number); ?> : <?php echo e($itinerary->title); ?>


                                                    </button>
                                                </h2>

                                                <div id="collapse<?php echo e($key); ?>"
                                                    class="accordion-collapse collapse <?php echo e($key == 0 ? 'show' : ''); ?>"
                                                    aria-labelledby="heading<?php echo e($key); ?>"
                                                    data-bs-parent="#tourAccordion">

                                                    <div class="accordion-body">
                                                        <?php echo e($itinerary->description); ?>

                                                    </div>

                                                </div>

                                            </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>

                                    <hr class="mt-4">

                                    <!-- Includes -->
                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <h4>✅ Package Includes</h4>
                                            <ul>

                                             <?php $__currentLoopData = $inclusions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inclusion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($inclusion->item); ?></li>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </ul>
                                        </div>

                                        <div class="col-md-6">
                                            <h4>❌ Package Excludes</h4>
                                            <ul>
                                                <?php $__currentLoopData = $exclusions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exclusion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <li><?php echo e($exclusion->item); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="text-center mt-5">
                                        <a href="https://wa.me/919452667708" class="theme-btn">
                                            Book This Package Now <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>







    <!--======== footer =========-->

  <?php $__env->stopSection(); ?>

<?php echo $__env->make('front-end.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\vrinda-taxi\resources\views/front-end/tour-details.blade.php ENDPATH**/ ?>