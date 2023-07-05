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
          <div class="carousel-item active" style="background-image: url(assets/img/resep_puree/head.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Puree MPASI</h2>
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
            <td width="50%"><img src="assets/img/resep_puree/content_1.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Puree Pisang</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Pisang ambon (100 g)</li>
                  <li>ASI (60 mL)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Potong kecil-kecil pisang ambon.</li>
                  <li>Siapkan blender. Masukkan pisang ambon dan ASI. Blender hingga lembut.</li>
                  <li>Angkat, tuangkan ke dalam mangkok dan hidangkan segera.</li>
                </ol>
            </td>
          </tr>
          <tr>
            <td width="40%"><h4>Puree Kentang Susu Brokoli</h4>
            <b>Bahan</b><break>
                <ul>
                  <li>Kentang (100 g)</li>
                  <li>Brokoli (50 g)</li>
                  <li>ASI (100 mL)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Cuci bersih kentang, kupas, dan potong dadu kecil.</li>
                  <li>Kukus kentang sampai matang.</li>
                  <li>Rebus brokoli sebentar.</li>
                  <li>Siapkan blender. Masukkan kentang, brokoli, dan ASI.</li>
                  <li>Blender sampai lembut, kurang lebih 5 menit.</li>
                  <li>Tuangkan ke dalam mangkok makan dan hidangkan segera.</li>
                  <p>Tips <br>
                  ASI dapat digantikan dengan susu formula apabila produksi ASI sedikit atau sudah tidak berproduksi.</p>
                </ol>
            </td>
          </td>
            <td width="10%"></td>
            <td width="50%"><img src="assets/img/resep_puree/content_2.jpg" width="500" height="300"></td>
          </tr>

          <tr>
            <td width="50%"><img src="assets/img/resep_puree/content_3.jpg" width="500" height="300"></td>
            <td width="10%"></td>
            <td width="40%"> <h4>Puree Alpukat</h4>
              <b>Bahan</b><break>
                <ul>
                  <li>Alpukat (100 g)</li>
                  <li>ASI (60 mL)</li>
                </ul>
              <b>Cara Pengolahan</b><br>
                <ol>
                  <li>Kupas alpukat, potong kecil-kecil.</li>
                  <li>Siapkan blender. Masukkan alpukan dan ASI.</li>
                  <li>Blender hingga lembut. Angkat dan tuangkan ke dalam mangkok makan. Hidangkan segera.</li>
                </ol>
            </td>
          </tr>
        </table>
      </div>

    </div>
  </section><!-- End About Section -->
</main><!-- End #main -->

@stop