<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Smart-SITA</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

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
  <header id="header" class="header fixed-top">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <span>Smart-SITA</span>
      </a>

    <!-- Navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#">Petunjuk</a></li>
          <li><a class="nav-link scrollto" href="#">FAQ</a></li>
          <li class="nav-item dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="/login">Mahasiswa</a></li>
              <li class="dropdown-item"><a href="#">Dosen</a></li>
              <li class="dropdown-item"><a href="#">TU (Admin)</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a><button class="btn success">Registrasi<i class="bi bi-chevron-down"></i></button></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="/register">Mahasiswa</a></li>
              <li class="dropdown-item"><a href="#">Dosen</a></li>
              <li class="dropdown-item"><a href="#">TU (Admin)</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    <!-- Navbar END -->
    </div>

  </header>
<!-- ======= HEADER END ======= -->

{{-- Sign Up --}}
<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-20 my-5">
          <div class="card-body p-4 p-sm-5 mt-10">
            <h5 class="card-title text-center mb-3 fw-light fs-5">Register</h5>
            <form action="/register" method="post">
              @csrf

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
                <label for="username">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Password" required>
                <label for="fullName">Full Name</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
                <label for="email">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                <label for="password">Password</label>
              </div>

              <div class="form-floating mb-3">
                <select name="fakultas" id="fakultas" class="select-regist" required>
                    <option value="FTKI">FTKI</option>
                    <option value="Others">Others</option>
                  </select>
              </div>

              <div class="form-floating mb-3">
                <select name="prodi" id="prodi" class="select-regist" required>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                  </select>
              </div>

              <div class="form-floating mb-3">
                <select name="statusMhs" id="statusMhs" class="select-regist" required>
                    <option value="Reguler">Reguler</option>
                    <option value="Karyawan">karyawan</option>
                  </select>
              </div>

              <div class="form-floating mb-3">
                <select name="tahunAkad" id="tahunAkad" class="select-regist" required>
                    <option value="2021/2022 - Ganjil">2021/2022 - Ganjil</option>
                    <option value="2021/2022 - Genap">2021/2022 - Genap</option>
                  </select>
              </div>

              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" required>
                <label for="phone">Phone</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Registrasi</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- Sign Up End --}}


<!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>FTKI UNAS</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer>
<!-- ======= Footer END ======= -->

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

</body>
</html>