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
          <div class="carousel-item active" style="background-image: url(assets/img/resep_nasi/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Nasi Tim MPASI</h2>
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
        <table>
          <tr>
            <td width="50%"><img src="assets/img/resep_nasi/content_1.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Nasi Tim Ayam Tomat</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Beras (4 Sendok Makan)</li>
                  <li>Air (400 mL)</li>
                  <li>Daging ayam cincang (2 sendok makan)</li>
                  <li>Tomat (1 buah)</li>
                  <li>Bawang Putih (1/2 siung)</li>
                  <li>Irisan daun bawang (1 sendok teh)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cuci bersih beras. Potong dadu kecil buah tomat dan buang bijinya. Cincang bawang putih.</li>
                  <li>Masak beras dan air hingga beras lunak. tambahkan daging ayam cincang, tomat, bawang putih, dan irisan daun bawang</li>
                  <li>Masak hingga semua bahan matang. Angkat</li>
                  <li>Tuang nasi ke dalam panci tim. Masak dengan cara ditim selama 30 menit hingga tekstur beras benar-benar lunak</li>
                  <li>Angkat dan sajikan</li>
                </ol>
            </td>
          </tr>

          <tr>
            <td width="40%"><h4>Nasi Tim Daging Beras Merah</h4>
            <b>Bahan</b><break>
                <ul>
                  <li>Beras (4 Sendok Makan)</li>
                  <li>Air (400 mL)</li>
                  <li>Daging sapi cincang (25 g)</li>
                  <li>Brokoli (40 g)</li>
                  <li>Bawang Putih (1/2 siung)</li>
                  <li>Irisan daun bawang (1 sendok teh)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cuci bersih beras. Cuci bersih brokoli kemudian potong-potong kecil. Cincang bawang putih</li>
                  <li>Masak beras merah dan air hingga beras lunak</li>
                  <li>Tambahkan daging sapi cincang, brokoli, daun bawang, dan bawang putih</li>
                  <li>Masak hingga semua bahan matang dan air terserap</li>
                  <li>Angkat. Masukkan nasi ke dalam panci tim</li>
                  <li>Masak selama 30 menit atau hingga tekstur beras benar-benar lunak</li>
                  <li>Angkat dan hidangkan</li>
                </ol>
            </td>
          </td>
            <td width="10%"></td>
            <td width="50%"><img src="assets/img/resep_nasi/content_2.jpg" width="500" height="300"></td>
          </tr>

          <tr>
            <td width="50%"><img src="assets/img/resep_nasi/content_3.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Nasi Tim Tahu Bayam</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Beras (4 Sendok Makan)</li>
                  <li>Air (400 mL)</li>
                  <li>Tahu Putih (25 g)</li>
                  <li>Daun bayam (10 g)</li>
                  <li>Bawang Putih (1/2 siung)</li>
                  <li>Irisan daun bawang (1 sendok teh)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cuci bersih beras.</li>
                  <li>Haluskan tahu.</li>
                  <li>Cuci bersih daun bayam kemudian iris halus.</li>
                  <li>Cincang bawang putih.</li>
                  <li>Masak beras dengan air hingga beras lunak.</li>
                  <li>Masukkan tahu, daun bayam, bawang putih, dan irisan daun bawang.</li>
                  <li>Masak hingga air terserap habis</li>
                  <li>Angkat</li>
                </ol>
            </td>
          </tr>

        </table>
      </div>

    </div>
  </section><!-- End About Section -->
</main><!-- End #main -->

@stop