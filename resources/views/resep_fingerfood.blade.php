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
          <div class="carousel-item active" style="background-image: url(assets/img/resep_fingerfood/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Finger Food MPASI</h2>
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
            <td width="50%"><img src="assets/img/resep_fingerfood/content_1.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Stik Sayuran</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Wortel (60 g)</li>
                  <li>Buncis muda (60 g)</li>
                  <li>Minyak goreng (1 sendok makan)</li>
                  <li>Bawang putih (1 siung)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Kupas dan cuci bersih wortel, buncis, serta bawang putih.</li>
                  <li>Potong panjang wortel dan buncis (bentuk stik). Cincang bawang putih.</li>
                  <li>Rebus wortel dan buncis hingga matang dan teksturnya lunak. Angkat dan tiriskan.</li>
                  <li>Hangatkan minyak goreng lalu masukkan bawang putih. Aduk sebentar kemudian angkat.</li>
                  <li>Masukkan potongan wortel dan buncis ke dalam tumisan bawang. Aduk rata dan angkat.</li>
                  <li>Susun stik sayuran di atas piring saji dan sajikan.</li>
                </ol>
            </td>
          </tr>
          <tr>
            <td width="40%"><h4>Stik Ubi Ungu</h4>
            <b>Bahan</b><break>
                <ul>
                  <li>Ubi ungu (200 g)</li>
                  <li>Telur (2 butir)</li>
                  <li>Tepung terigu (50 g)</li>
                  <li>Minyak goreng (5 sendok makan)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Kupas dan cuci bersih ubi lalu potong balok panjang. Kocok lepas telur.</li>
                  <li>Celupkan potongan ubi ke dalam kocokan telur. Lalu, gulingkan ke atas tepung terigu.</li>
                  <li>Panaskan minyak, goreng ubi hingga matang dan berwarna kuning kecoklatan.</li>
                  <li>Angkat dan atur stik ubi ungu di atas piring saji dan hidangkan.</li>
            </td>
          </td>
            <td width="10%"></td>
            <td width="50%"><img src="assets/img/resep_fingerfood/content_2.jpg" width="500" height="300"></td>
          </tr>

          <tr>
            <td width="50%"><img src="assets/img/resep_fingerfood/content_3.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Sate Pisang</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Pisang kepok (200 g)</li>
                  <li>Keju cheddar (40 g)</li>
                  <li>Minyak goreng (5 sendok makan)</li>
                  <li>Tusukan sate (secukupnya)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Potong pisang sepanjang 5 cm dan belah menjadi 2 bagian.</li>
                  <li>Tusuk pisang dengan tusukan sate. Panaskan sedikit minyak dalam wajan datar antilenget. Masukkan pisang. Goreng sambil bolak balik hingga matang. Angkat.</li>
                  <li>atur pisang diatas piring saji dan taburi dengan keju. Sajikan.</li>
                </ol>
            </td>
          </tr>
        </table>
      </div>

    </div>
  </section><!-- End About Section -->
</main><!-- End #main -->

@stop