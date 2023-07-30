<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nutripedia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Icons -->
  <link href="assets/img/logo-nobg.png" rel="icon">
  <link href="assets/img/logo-nobg.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome.css">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">Nutripedia</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="discuss">Discuss</a></li>
          <li><a class="nav-link scrollto" href="diagnosa">Diagnose</a></li>
          <li class="dropdown"><a href="mpasi_menu"><span>MPASI</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="resep_6-8bulan">Usia 6-8 Bulan</a></li>
              <li><a href="resep_9-11bulan">Usia 9-11 Bulan</a></li>
              <li><a href="resep_12-23bulan">Usia 12-23 Bulan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="aboutus">About Us</a></li>
          <li><a class="nav-link scrollto" href="contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span><i class="bi bi-person-circle icon-white icon-large"></i></span> </a>
            <ul>
              <li><a href="login">Log In</a></li>
            </ul>
          </li>
          <!-- <li><a class="getstarted" href="#">Register</a></li>
          <li><a class="getstarted" href="#">Login</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="footer-top">
    <!-- <div class="footer-top" style="background-image: url(assets/img/footer.jpg); width:100%; height:auto;"> -->
      <!-- <img src="assets/img/footer.jpg" alt=""> -->
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Nutripedia</h3>
              <strong>Politeknik Negeri Batam</strong>
              <p>
              Batam Centre, Jl. Ahmad Yani, Tlk. Tering, <br>
              Kec. Batam Kota, Kota Batam, Kepulauan Riau<br><br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Resep MPASI</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="resep_6-8bulan">Usia 6-8 Bulan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="resep_9-11bulan">Usia 9-11 Bulan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="resep_12-23bulan">Usia 12-23 Bulan</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="aboutus">About Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="discuss">Discuss</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="diagnosa">Diagnose</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-5 col-md-6 footer-links">
            <h4>Our Location</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.231689492266!2d104.0484619!3d1.1186351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1690650206052!5m2!1sid!2sid" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        NAWAS3NA &hearts; <strong><span>POLIBATAM</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/fontawesome/js/fontawesome.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>