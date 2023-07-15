@extends('layouts.loginmaster')

@section('content')

<body>
    <!-- ======= LOGIN ======= -->
    <div class="container" id="main">
      <div class="sign-in">
        <form action="#">
          <h1>LOGIN</h1>
          <input type="email" name="email" placeholder="Email" required="" />
          <input type="password" name="password" placeholder="Password" required=""/>
          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="remember" />
              <label style="color: #000" class="form-check-label" for="remember">Remember me</label>
              <span class="forget-password"><a style="color: #000" href="forgetpassword.html">Forget password</a></span>
            </div>
          </div>
          <a href="#"><button style="color: #000">MASUK</button></a>
        </form>
      </div>

      <div class="overlay-container">
        <div class="overlay" style="background-image: url(assets/img/login/login.png);">
        
        <!-- <div class="overlay" style="background-image: url(assets/img/login/login-1.png);" width="50%"> -->
          <!-- <img src="assets/img/login-1.png" alt="" /> -->
          <!-- <img src="assets/img/login-2.png" alt="" /> -->
          <div class="overlay-left">
            <h1>Selamat Datang!</h1>
            <p>Senang bertemu dengan anda</p>

            <p>
              "Tetap sederhana, karena hidup sederhana dan pemikiran sederhana
              dapat membuka pintu menuju kehidupan yang lebih inspiratif."
            </p>
            <button id="signIn">Masuk</button>
          </div>
          <div class="overlay-right">
            <h1>Welcome, Mom !</h1>
            <p class="nice">Nice To Meet You</p>
            <p>
              Jika belum memiliki akun, <br />Silahkan registrasi dibawah ini!
            </p>
            <button id="signUp">Daftar</button>
          </div>
        </div>
      </div>

      <!-- ======= REGISTER ======= -->
      <div class="sign-up">
        <form action="#">
          <h1>REGISTRASI</h1>

          <input type="text" name="txt" placeholder="Name" required="" />
          <input type="email" name="email" placeholder="Email" required="" />
          <input
            type="password"
            name="password"
            placeholder="Password"
            required=""
          />
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p>Atau Sign Up menggunakan email anda</p>
          <button style="color: #000">REGISTRASI</button>
        </form>
      </div>
    </div>
    <script type="text/javascript">
      const singUpButton = document.getElementById("signUp");
      const singInButton = document.getElementById("signIn");
      const main = document.getElementById("main");

      singUpButton.addEventListener("click", () => {
        main.classList.add("right-panel-active");
      });
      singInButton.addEventListener("click", () => {
        main.classList.remove("right-panel-active");
      });
    </script>
  </body>

@stop