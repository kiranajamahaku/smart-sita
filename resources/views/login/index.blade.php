<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart-SITA</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  {{-- AOS --}}
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  {{-- Favicon --}}
  <link rel="icon" href="{{ asset('/img/favicon.jpg') }}">

  <!-- GOOLE FONTS -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Iconscout -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.5/css/unicons.css">

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- VENDOR CSS -->
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('/vendor/remixicon/remixicon.css" rel="stylesheet') }}">
  <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- W3 SCHOOL -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- CSS FILE -->
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>

<!-- ======= HEADER ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1><a href="/"><span>Smart-SITA</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="/">Home</a></li>
        <li><a class="nav-link scrollto" href="#">Step Smart-SITA</a></li>
        <li><a class="nav-link scrollto" href="#">Petunjuk</a></li>
        <li><a class="nav-link scrollto" href="#">Informasi</a></li>
        <li><a class="nav-link scrollto" href="#">FAQ</a></li>
        <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/login">Mahasiswa</a></li>
            <li><a href="#">Dosen</a></li>
            <li><a href="#">TU (Admin)</a></li>
          </ul>
        </li>
        <li class="dropdown"><a href="#"><button class="btn-registrasi">Registrasi <i class="bi bi-chevron-down"></i></button></a>
          <ul>
            <li><a href="/register">Mahasiswa</a></li>
            <li><a href="#">Dosen</a></li>
            <li><a href="#">TU (Admin)</a></li>
          </ul>
        </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
<!-- ======= HEADER END ======= -->

{{-- Login --}}
<div class="container">
    <div class="row" data-aos="fade-up">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card-login border-0 shadow rounded-20 my-5">
          <div class="card-login-body">
            <h5 class="card-login-title">Sign In</h5>
            <form action="/login" method="post">
              @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInput"  placeholder="Enter Username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Enter Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-login" type="submit">Sign In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- Login End --}}


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-2">
            <div class="footer-info">
              <h3>Smart-SITA of FTKI UNAS</h3>
              Universitas Nasional, No. 61, Pejaten, Jl. Sawo Manila, RT.14/RW.3 <br>
              Ps. Minggu, Kec. Ps. Minggu, Kota Jakarta Selatan, <br> 
              Daerah Khusus Ibukota Jakarta 12520<br><br>
                <strong>WhatsApp:</strong> +62 838 0586 7766 <br>
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright"> &copy; Copyright <strong><span>FTKI UNAS</span></strong>. All Rights Reserved</div>
    </div>
  </footer>
  <!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- JavaScript File -->
  <script src="{{ asset('/js/main.js') }}"></script>

  {{-- AOS --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>