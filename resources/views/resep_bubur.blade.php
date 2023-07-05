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
          <div class="carousel-item active" style="background-image: url(assets/img/resep_bubur/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Bubur MPASI</h2>
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
            <td width="50%"><img src="assets/img/resep_bubur/content_1.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Bubur Nasi Ikan</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Nasi putih (5 Sendok Makan)</li>
                  <li>Kaldu ikan (250 mL)</li>
                  <li>Ikan kakap (50 g)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cincang halus daging ikan kakap.</li>
                  <li>Rebus semua bahan hingga matang dan lunak. Angkat.</li>
                  <li>Blender bubur tersebut hingga lembut, Angkat dan sajikan</li>
                </ol>
                <p>Tips <br>
                Daging ikan dapat diganti dengan daging ikan lainnya yang bersifat lembut dan sedikit duri seperti ikan salmon.</p>
            </td>
          </tr>

          <tr>
            <td width="40%"><h4>Bubur Wortel</h4>
            <b>Bahan</b><break>
                <ul>
                  <li>Beras (3 Sendok Makan)</li>
                  <li>Kaldu ayam (400 mL)</li>
                  <li>Wortel (50 g)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cuci bersih beras dan wortel. Kupas wortel dan potong-potong.</li>
                  <li>Masukkan semua bahan ke dalam blender, Proses hingga halus. Angkat.</li>
                  <li>Siapkan panci kecil, masukkan bubur bahan tersebut, masak hingga lembut. Angkat. Tuang ke dalam mangkok dan sajikan.</li>
                </ol>
                <p>Tips <br>
                Dalam pembuatan menu MP-ASI akan lebih baik jika membuat sendiri kaldu ayam yang diperlukan dibandingkan dengan kaldu instan.</p>
            </td>
          </td>
            <td width="10%"></td>
            <td width="50%"><img src="assets/img/resep_bubur/content_2.jpg" width="500" height="300"></td>
          </tr>

          <tr>
            <td width="50%"><img src="assets/img/resep_bubur/content_3.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Bubur Ayam Beras Merah</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Beras merah (3 Sendok Makan)</li>
                  <li>Kaldu ayam (300 mL)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cuci bersih beras merah kemudian rendam selama 4 jam.</li>
                  <li>Blender semua bahan hingga halus.</li>
                  <li>Masak bubur tersebut hingga meletup-letup dan lembut. Angkat dan sajikan.</li>
                </ol>
            </td>
          </tr>

        </table>
      </div>

    </div>
  </section><!-- End About Section -->
</main><!-- End #main -->

@stop