<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arduino System</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/assets/vendor/icofont/icofont.min.css" rel="stylesheet' ">
    <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" >
    <link href="frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="frontend/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="frontend/css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="frontend/css/style.css" />


    <!-- Template Main CSS File -->
    <link href="frontend/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Company - v2.1.0
    * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="/"><span>Arduino</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/">Acceuil</a></li>

                <li><a href="{{route('admin.Device.index')}}">All Devices</a></li>
                <li><a href="{{route('admin.Digital.index')}}">All Digitals</a></li>



            </ul>
        </nav><!-- .nav-menu -->



    </div>
</header><!-- End Header -->

<main id="main">
@yield('home_content')
</main><!-- End #main -->





<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="frontend/assets/vendor/jquery/jquery.min.js"></script>
<script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="frontend/assets/vendor/php-email-form/validate.js"></script>
<script src="frontend/assets/vendor/jquery-sticky/jquery.sticky.js'"></script>
<script src="asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="frontend/assets/vendor/venobox/venobox.min.js"></script>
<script src="frontend/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="frontend/assets/vendor/aos/aos.js'"></script>

<!-- Template Main JS File -->
<script src="frontend/assets/js/main.js"></script>

</body>

</html>
