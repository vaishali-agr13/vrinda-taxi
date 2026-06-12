<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- title -->
    <title>Vrinda Taxi Service | Best Taxi Service in Vrindavan & Mathura</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png" />

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slimselect.min.css" />
    <link rel="stylesheet" href="assets/css/flatpickr.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>


    <!--===== header ==========-->
 <?php echo $__env->make('front-end.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!--===== header ==========-->
    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h3 class="breadcrumb-title">About Us</h3>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


        <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".2s">
                            <div class="shape wow fadeInRight" data-wow-delay=".2s"></div>
                            <div class="about-img">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <div class="img-1 mb-3">
                                            <img src="assets/img/about/01.jpg" alt="" />
                                        </div>
                                        <div class="img-3">
                                            <img src="assets/img/about/03.jpg" alt="" />
                                        </div>
                                    </div>
                                    <div class="col-6 align-self-center">
                                        <div class="img-2">
                                            <img src="assets/img/about/02.jpg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="about-experience">
                                <h4>30<span>+</span></h4>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInUp" data-wow-delay=".2s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline"><i class="far fa-car"></i> About Us – Vrinda Taxi Service</span>
                                <!-- <h3 class="site-title">We Provide <span>Quality Car Rental</span> Services</h3> -->
                            </div>
                            <p class="about-text">
                                Welcome to Vrinda Taxi Service, your trusted and reliable travel partner for safe, comfortable, and affordable transportation services. We are committed to providing smooth and hassle-free travel experiences for individuals, families, and corporate clients.
                            </p>
                            <div class="about-content">
                                <div class="row g-3">
                                    <div class="col-md-7">
                                        <div class="about-item">
                                            <div class="icon">
                                                <img src="assets/img/icon/money.svg" alt="" />
                                            </div>
                                            <div class="content">
                                                <h4>Affordable & Transparent Pricing</h4>
                                                <p>We offer competitive car rental rates with no hidden charges.</p>
                                            </div>
                                        </div>
                                        <div class="about-item">
                                            <div class="icon">
                                                <img src="assets/img/icon/driver.svg" alt="" />
                                            </div>
                                            <div class="content">
                                                <h4>Professional Personal Drivers</h4>
                                                <p>Our experienced and well-trained drivers ensure a safe, smooth, and comfortable journey.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <ul class="about-list">
                                            <li><img src="assets/img/icon/check.svg" alt="" />Comfort</li>
                                            <li><img src="assets/img/icon/check.svg" alt="" />Automatic</li>
                                            <li><img src="assets/img/icon/check.svg" alt="" />Remote</li>
                                            <li><img src="assets/img/icon/check.svg" alt="" />Hybrid</li>
                                            <li><img src="assets/img/icon/check.svg" alt="" />Wireless</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- <a href="about.php" class="theme-btn">Discover More<i class="fas fa-arrow-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- about area end -->
    </main>



    <!--======== footer =========-->
       <?php echo $__env->make('front-end.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!--======== footer =========-->



</body>

</html>
<?php /**PATH C:\laragon\www\vrinda-taxi\resources\views/front-end/about.blade.php ENDPATH**/ ?>