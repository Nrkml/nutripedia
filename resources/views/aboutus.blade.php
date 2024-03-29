@extends('layouts.master')

@section('content')

<main id="main">

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/aboutus/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">About Us</h2>
                <p class="animate__animated animate__fadeInUp">Nutripedia merupakan sebuah platform untuk membantu para ibu muda dalam mencari informasi tentang makanan apa yang cocok untuk bayi tersebut sesuai dengan umur si bayi.</p>
                <div>
                  <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title">
        <h2>NAWAS3NA TEAM</h2>
      </div>

      <div class="row" style="margin:auto; max-width: 250px;">
        <div class="col">
          <div class="member">
            <img src="assets/img/aboutus/bu dwi.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Dwi Amalia Purnamasari</h4>
                <span>Project Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center">

        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
          <div class="member">
            <img src="assets/img/aboutus/nafisah.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Nafisah Rahmadani</h4>
                <span>Developer</span>
                <div class="social">
                  <a href="https://www.instagram.com/nafisarhh"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
          <div class="member">
            <img src="assets/img/aboutus/akmal.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Nurakmal Ramadhan</h4>
                <span>Developer</span>
                <div class="social">
                  <a href="https://www.instagram.com/nurakmalrrr"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.3s">
          <div class="member">
            <img src="assets/img/aboutus/tirta.jpg" class="img-fluid" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Tirta Abdul</h4>
                <span>Developer</span>
                <div class="social">
                  <a href="https://www.instagram.com/tirtaabdul"><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Team Section -->

  <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/aboutus/logo/tutwuri.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/aboutus/logo/polibatam.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/aboutus/logo/kmipnv.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/aboutus/logo/vokasi.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/aboutus/logo/bakorma.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/aboutus/logo/pens.png" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section>
    <br>

</main><!-- End #main -->

@stop