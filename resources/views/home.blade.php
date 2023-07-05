@extends('layouts.master')

@section('content')

<main id="main">

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <!-- <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel"> -->

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide0.png);">
          <div class="carousel-container">
            <div class="carousel-content">
              <h2 class="animate__animated animate__fadeInDown" id="panduanmpasi">PANDUAN LENGKAP MPASI</h2>
              <!-- <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p> -->
              <div>
                <a href="#" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <!-- <div class="carousel-item" style="background-image: url(assets/img/slide/slide2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>-->

        <!-- Slide 3 -->
        <!-- <div class="carousel-item" style="background-image: url(assets/img/slide/slide3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div> -->

      </div>

      <!-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a> -->

    </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= About Section ======= -->
  <section id="about1" class="about">
    <div class="container">
      <div class="row no-gutters">
        <h1 class="mpasi_informasi" id="mpasi_informasi"> INFORMASI MPASI</h1>
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center">

            <p>
              Pada 2 tahun pertama, kelebihan maupun kekurangan
              gizi tidak dapat diubah (irreversible). Kualitas hidup seorang anak akan terpengaruh baik secara jangka pendek maupun jangka panjang.
            </p>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <section id="about" class="about">
    <center>
    <table>
      <tr>
        <td width="10%"></td>
        <td width="80%">
          <div class="discuss">
          <img src="/assets/img/who.jpg" alt="">
          <a href="discuss"><button class="btn" >Forum Diskusi</button></a>
          
          </div></td>
        <td width="10%"></td>
      </tr>
      
    </table>
    </center>
    

  </section>

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>Artikel Lainnya</h2>
      </div>

      <div class="row">

        <div class="col-lg-4">
          <div class="box">
            <span>01</span>
            <h4>Kumpulan resep fingerfood</h4>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
            <span>02</span>
            <h4>Cara memberikan MPASI yang baik dan benar</h4>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box">
            <span>03</span>
            <h4>Batasan penggunaan garam di makanan bayi</h4>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->

</main><!-- End #main -->

@stop