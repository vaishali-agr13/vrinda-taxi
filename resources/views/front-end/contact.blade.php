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
   @include('front-end.layouts.header')

    <!--===== header ==========-->
    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb ng-mt" style="background: url(assets/img/breadcrumb/01.jpg)">
            <div class="container">
                <h3 class="breadcrumb-title">Contact Us</h3>
                <ul class="breadcrumb-menu">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->



        <!-- contact area -->
        <div class="contact-area pt-120 pb-100">
            <div class="container">
                <div class="contact-content pb-80">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info h-100">
                                <div class="icon">
                                    <img src="assets/img/icon/address.svg" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Office Address</h4>
                                    <p>Shop No. 1 Gali No. 1, opposite Chaar Dham Mandir, Vrindavan, Allhepur, Uttar Pradesh 281121</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info h-100">
                                <div class="icon">
                                    <img src="assets/img/icon/call.svg" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Call Us</h4>
                                    <p>+91 9452667708</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info h-100">
                                <div class="icon">
                                    <img src="assets/img/icon/email.svg" alt="" />
                                </div>
                                <div class="content">
                                    <h4>Email Us</h4>
                                    <p><a href="mailto:help@vrindataxiservice.com" class="__cf_email__">help@vrindataxiservice.com</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                <div class="contact-info">
                  <div class="icon">
                    <img src="assets/img/icon/clock.svg" alt="" />
                  </div>
                  <div class="content">
                    <h4>Open Time</h4>
                    <p>Mon - Sat (10.00AM - 05.30PM)</p>
                  </div>
                </div>
              </div> -->
                    </div>
                </div>
                <div class="contact-form-wrap">
                    <div class="row g-4">
                        <div class="col-lg-5">
                            <div class="contact-img">
                                <img src="assets/img/contact/01.jpg" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="contact-form">
                                <div class="contact-form-header">
                                    <h3>Get In Touch</h3>
                                    <!-- <p>
                      It is a long established fact that a reader will be distracted by the readable content of a page randomised words
                      which don't look even slightly when looking at its layout.
                    </p> -->
                                </div>
                                <div class="form-message"></div>
                                <form method="post" action="#" id="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-icon">
                                                    <i class="far fa-user-tie"></i>
                                                    <input type="text" class="form-control" name="name" placeholder="Your Name" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-icon">
                                                    <i class="far fa-envelope"></i>
                                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-icon">
                                            <i class="far fa-pen"></i>
                                            <input type="tel" class="form-control" name="Mobileno" placeholder="Your Mobile No." required />
                                        </div>
                                    </div>

                                    <button type="submit" class="theme-btn">
                                        Send Message <i class="far fa-paper-plane"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact area -->

    </main>

    <script>
        document.getElementById("contact-form").addEventListener("submit", function(e) {
            e.preventDefault();

            let name = document.querySelector("input[name='name']").value;
            let email = document.querySelector("input[name='email']").value;
            let mobile = document.querySelector("input[name='Mobileno']").value;

            let message = `New Enquiry:%0A
Name: ${name}%0A
Email: ${email}%0A
Mobile: ${mobile}`;

            let whatsappNumber = "919452667708"; // Apna WhatsApp number yaha dale

            let whatsappURL = `https://wa.me/${whatsappNumber}?text=${message}`;

            window.open(whatsappURL, "_blank");
        });

    </script>

    <!--======== footer =========-->
   @include('front-end.layouts.footer')
    <!--======== footer =========-->



</body>

</html>
