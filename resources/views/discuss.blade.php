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
          <div class="carousel-item active" style="background-image: url(assets/img/discuss/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Forum Diskusi MPASI</h2>
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

  <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <!-- card -->
        <div class="card" data-aos="flip-down">
          <div class="card-details">
            <h3>
            <i class="bi bi-person-circle"> Juliana</i>
            </h3>
          </div>
          <div class="pading-kiri">
            <h4>Apa makanan Mpasi ?</h4>
            <p>Makanannya apa aja sih....</p>
          </div>
          <a href="diskusi-detail.html" class="card-button">Lihat Diskusi</a>
        </div>
        <hr style="border: 5px solid green"> <!-- end card -->

        <!-- card -->
        <div class="card" data-aos="flip-down">
          <div class="card-details">
            <h3>
            <i class="bi bi-person-circle"> Citra</i>
            </h3>
          </div>
          <div class="pading-kiri">
            <h4>menggunakan micin untuk makanan anak ?</h4>
            <p>batasan menggunakan micin untuk makanan anak gimana yah bund</p>
          </div>
          <a href="diskusi-detail.html" class="card-button">Lihat Diskusi</a>
        </div>
        <hr style="border: 5px solid green"> <!-- end card -->

        <!-- card -->
        <div class="card" data-aos="flip-down">
          <div class="card-details">
            <h3>
            <i class="bi bi-person-circle"> Indah</i>
            </h3>
          </div>
          <div class="pading-kiri">
            <h4>Anak tidak mau makan</h4>
            <p>Tipsnya dong bun, biar anak mau makan</p>
          </div>
          <a href="diskusi-detail.html" class="card-button">Lihat Diskusi</a>
        </div>
        <hr style="border: 5px solid green"> <!-- end card -->

      </div>
    </div>
  </section><!-- End About Section -->
</main><!-- End #main -->

@stop