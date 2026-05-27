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
    <?php include("header.php"); ?>

    <!--===== header ==========-->
    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h3 class="breadcrumb-title">Gallery</h3>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->



        <!-- gallery-area -->
        <div class="gallery-area py-120">
            <div class="container">

                <div class="row">
                    <div class="col-lg-7 mx-auto">
                        <div class="site-heading text-center wow fadeInUp" data-wow-delay=".2s">
                            <span class="site-title-tagline">
                                <i class="far fa-car"></i> our Gallery
                            </span>
                            <h3 class="site-title">
                                Let's Check Our <span>Photo Gallery</span>
                            </h3>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Gallery Images Will Load Here -->
                <div class="row g-4 popup-gallery" id="galleryContainer"></div>

            </div>
        </div>

        <script>
            const galleryContainer = document.getElementById("galleryContainer");

            // Total Images
            const totalImages = 30; // 👈 yaha 17 kar diya

            for (let i = 1; i <= totalImages; i++) {

                // Format image number (01, 02, 03...10,11...)
                let imageNumber = i < 10 ? "0" + i : i;

                // WOW delay pattern (0.2, 0.4, 0.6, 0.8 repeat)
                let delayPattern = [0.2, 0.4, 0.6, 0.8];
                let delay = delayPattern[(i - 1) % 4];

                galleryContainer.innerHTML += `
                      <div class="col-lg-4">
                        <div class="gallery-item wow fadeInUp" data-wow-delay="${delay}s">
                          <div class="gallery-img">
                            <img src="assets/img/gallery/gal/${imageNumber}.webp" alt="Gallery Image ${imageNumber}" class="img-fluid" />
                          </div>
                          <div class="gallery-content">
                            <a class="popup-img gallery-link" href="assets/img/gallery/gal/${imageNumber}.webp">
                              <i class="fal fa-plus"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    `;
            }

        </script>
        <!-- gallery-area end -->


    </main>



    <!--======== footer =========-->
    <?php include("footer.php"); ?>
    <!--======== footer =========-->



</body>

</html>
