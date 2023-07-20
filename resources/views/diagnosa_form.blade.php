@extends('layouts.master')

@section('content')

<main id="main">
<br><br><br>
  

  

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>Diagonosa masalah pada bayi</h2>
        <h4>Silahkan Masukkan Data Diri Bayi Yang<br>Anda Alami</h4>
      </div>
      <form action="">
        <div class="row">
          <div class="col-sm-6 form-group">
            <label for="">Nama Bayi</label>
            <input type="text" name="name" class="form-control" id="name"  required> <br>
            <label for="">Usia Bayi</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Bulan" required> <br>
            <label for="">Tinggi Badan Bayi</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Cm" required> <br>
            <label for="">Berat Badan Bayi</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Kg" required> <br>
          </div>
          <div class="col-sm-6 form-group">
            <label for="">Nama Ibu</label> 
            <input type="text" name="name" class="form-control" id="name" required> <br>
            <label for="">Usia Ibu</label>
            <input type="text" name="name" class="form-control" id="name" required> <br>
          </div>
        </div><br>
        <h4>Pilih Gejala Yang Dialami</h3><br>
        <div class="row">
          <div class="col-lg-6">
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Penolakan Makan</label><br>
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Muntah atau Regurgitasi</label><br>
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Kembung atau Kolik</label><br>
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Sembelit</label><br>
          </div>
          <div class="col-lg-6">
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Penolakan Makan</label><br>
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Muntah atau Regurgitasi</label><br>
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Kembung atau Kolik</label><br>
            <input type="checkbox" id="#" name="#" value="#">
            <label for="#">Sembelit</label><br>
          </div>
        </div>
        <br>
        <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
      </form>

</main><!-- End #main -->

@stop