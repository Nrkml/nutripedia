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
          <div class="carousel-item active" style="background-image: url(assets/img/mpasi_menu/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Rekomendasi Resep MP-ASI</h2>
                <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
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

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>Temukan Resep MP-ASI sesuai dengan<br> Kementerian Kesehatan</h2>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <a href="resep_6-8bulan">
          <div class="box">
            <span>01</span>
            <h4>Usia 6-8 Bulan</h4>
          </div>
          </a>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <a href="resep_9-11bulan">
          <div class="box">
            <span>02</span>
            <h4>Usia 9-11 Bulan</h4>
          </div>
          </a>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <a href="resep_12-23bulan">
          <div class="box">
            <span>03</span>
            <h4>Usia 12-23 Bulan</h4>
          </div>
          </a>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->
</main><!-- End #main -->

@stop