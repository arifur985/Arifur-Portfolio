<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="frontend/resume/assets/img/favicon.png" rel="icon">
  <link href="frontend/resume/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="frontend/resume/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/resume/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/resume/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/resume/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/resume/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('pages.frontend.header')
    <!-- End Header -->
  <!-- ======= Hero Section ======= -->
<!-- End Hero Section -->
@include('pages.frontend.hero')
  <main id="main">

    <!-- ======= About Section ======= -->
    @include('pages.frontend.about')
<!-- End About Section -->

    <!-- ======= Services Section ======= -->
<!-- End Services Section -->
@include('pages.frontend.service')
    <!-- ======= Counter Section ======= -->
    @include('pages.frontend.counter')
 <!-- End Counter Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('pages.frontend.portfolio')
  <!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    @include('pages.frontend.testimonial')
<!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    @include('pages.frontend.blog')
<!-- End Blog Section -->

    <!-- ======= Contact Section ======= -->
    @include('pages.frontend.contact')
<!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('pages.frontend.footer')
<!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/resume/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="frontend/resume/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/resume/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/resume/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/resume/assets/vendor/typed.js/typed.umd.js"></script>
  <script src="frontend/resume/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/resume/assets/js/main.js"></script>

</body>

</html>