@extends('layouts.master')

@section('content')

<main id="main">
<br><br><br>
  

  

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title">
        <h2>Contact Us</h2>
      </div>

      <div class="col-12" data-aos="fade-left">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-6 form-group" >
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <br>
          <div class="text-center"><button type="submit" class="btn btn-success">Send Message</button></div>
        </form>
        </div>

</main><!-- End #main -->

@stop