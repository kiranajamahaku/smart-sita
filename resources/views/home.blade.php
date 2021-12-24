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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

      <a href="" class="logo d-flex align-items-center">
        <span>Smart-SITA</span>
      </a>

      <!-- Navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#petunjuk">Petunjuk</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
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


<!-- ======= HERO SECTION ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Sistem Informasi Tugas Akhir (Smart-SITA)</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Smart-SITA adalah sistem informasi tugas akhir mahasiswa yaitu proses secara online, dari proposal, reviewer, pembimbingan, sidang dan sampai tugas akhir selesai.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#petunjuk" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>More</span> <i class="bi bi-arrow-down"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('/img/IlustHomePage.svg') }}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    </section>
<!-- ======= HERO SECTION END ======= -->


<!-- ======= PETUNJUK SECTION ======= -->
<section class="petunjuk" id="petunjuk">
  <div class="container">
    <header class="section-header"> <p>Petunjuk</p> </header>

    <div class="row">

      <!-- Petunjuk 1 -->
      <div class="card grid-container" data-aos-delay="200" style="width: 20rem;">
        <i class="uil uil-layers icon"></i>
        <div class="card-body">
          <h5 class="card-title">Manual Smart-SITA</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1">
            Read More <i class="bi-chevron-right"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Manual Smart-SITA</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Petunjuk dan pelaksanaan Smart-SITA bagi Mahasiswa, Reviewer, Dosen Pembimbing dan Penguji. Ketentuan-ketentuan harus diindahkan untuk kepentingan kita bersama, panduan singkat bagi Smart-SITA dalam pelaksanaan Tugas Akhir Mahasiswa.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Petunjuk 2 -->
      <div class="card grid-container" data-aos-delay="200" style="width: 20rem;">
        <i class="uil uil-layers icon"></i>
        <div class="card-body">
          <h5 class="card-title">Reviewer</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter2">
            Read More <i class="bi-chevron-right"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Reviewer</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Mahasiswa yang ikut Tugas Akhir (TA) harus melalui reviewer, filter pertama apakah mahasiswa layak atau tidak dalam Penulisan, jika mahasiswa tidak ada catatan atau komentar dari reviewer, mahasiswa "TIDAK BOLEH IKUT DALAM PEMBIMBINGAN".
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Petunjuk 3 -->
      <div class="card grid-container" data-aos-delay="200" style="width: 20rem;">
        <i class="uil uil-layers icon"></i>
        <div class="card-body">
          <h5 class="card-title">Pembimbing 1 & 2</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter3">
            Read More <i class="bi-chevron-right"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Pembimbing 1 & 2</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Mahasiswa yang sudah melewati fase reviewer, mahasiswa dapat melakukan Pembimbingan 1 dan Pembimbingan 2, jika mahasiswa tidak melalukan pembimbingan "TIDAK DIPERBOLEHKAN IKUT SIDANG", Pembimbingan mahasiswa harus ketemu minimal 8X oleh Pembimbing 1 "dan" 8X oleh Pembimbing 2,
                  Sekretariat melakukan control jika tidak ada Catatan dari Pembimbing 1 dan Pembimbing 2 sebagaimana ketentuan diatas (TIDAK BISA DIJADWALKAN UNTUK SIDANG).
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Petunjuk 4 -->
      <div class="card grid-container" data-aos-delay="200" style="width: 20rem;">
        <i class="uil uil-layers icon"></i>
        <div class="card-body">
          <h5 class="card-title">Penguji 1, 2 & 3</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter4">
            Read More <i class="bi-chevron-right"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Penguji 1, 2 & 3</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Perhatikan persyaratan dan ketentuan yang berlaku, apakah mahasiswa sudah ketemu dengan Pembimbing 1 sebanyak 4X dan Pembimbing 2 sebanyak 6X, bisa dicek berdasarkan catatan Pembimbing 1 dan 2, jika tidak ada catatan tersebut pengujian "TIDAK BOLEH DITERUSKAN", jika persyaratan terpenuhi Sidang Pengujian boleh dilakukan.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Petunjuk 5 -->
      <div class="card grid-container" data-aos-delay="200" style="width: 20rem;">
        <i class="uil uil-layers icon"></i>
        <div class="card-body">
          <h5 class="card-title">Tahapan Smart-SITA</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter5">
            Read More <i class="bi-chevron-right"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Tahapan Smart-SITA</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <ul class="modal-body-ul grid">
                    <li class="modal-li">
                      <p>Step 1 : Register</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 2 : Upload Persyaratan Awal (KRS, Transkrip, Sertifikat 1, Sertifikat 2, Sertifikat 3)</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 3 : Data Mahasiswa di Verifikasi oleh TU, Biodata di Field</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 4 : Verifikasi Data (Data di Verifikasi oleh Ka.Prodi dan TU, dan upload Outline/Proposal</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 5 : Ka.Prodi menetukan Reviewer (Sidang Reviewer)</p>
                    </li>

                    <li class="modal-li"> 
                      <p>Step 6 : Silakan Upload Bukti Transfer</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 7 : Mahasiswa sudah upload Proposal</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 8 : Mahasiswa sudah lakukan Pembimbingan </p>
                    </li>

                    <li class="modal-li">
                      <p>Step 9 : Mahasiswa upload Proposal memilih alasan upload "Proposal TA", Setelah di Setujui masuk Step 10</p>
                    </li>

                    <li class="modal-li">
                      <p>Step 10 : Mahasiswa lakukan Pembimbingan 1. Pertemuan Pembimbing 1 dan Pembimbing 2</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Petunjuk 6 -->
      <div class="card grid-container" data-aos-delay="200" style="width: 20rem;">
        <i class="uil uil-layers icon"></i>
        <div class="card-body">
          <h5 class="card-title">Alur Smart-SITA</h5>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter6">
            Read More <i class="bi-chevron-right"></i>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Alur Smart-SITA</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <img src="{{ asset('/img/flowsita.jpg') }}" alt="" class="modal-img">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- ======= PETUNJUK SECTION ======= -->


<!-- ======= FAQ SECTION ======= -->
  <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-header"> <p>Frequently Asked Questions</p> </header>

      <div class="row">

        <div class="accordion accordion-flush" id="faqlist1">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1"> 
                Kenapa saya tidak bisa masuk ke Smart-SITA? 
              </button>
            </h2>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                Silakan Register Nama Anda terlebih dahulu, isi Username, Email (email anda dengan huruf kecil), dan password Anda, terus check email Anda.
              </div>
              </div>
            </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    Kenapa record data saya kosong?
                  </button>
                </h2>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Yakinkan email Anda waktu register sama dengan email yang Anda isi di Biodata (email harus dengan huruf kecil).
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    Bagaimana caranya mengupload file?
                  </button>
                </h2>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    Anda masuk ke menu Mahasiswa, terus pilih Upload file, Silakan upload file Anda dan isi data-data yang diminta.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    Kenapa saya tidak bisa masuk walaupun saya sudah register?
                  </button>
                </h2>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    User Anda belum diaktifasi, silkan check email Anda, atau hubungi sekretariat FTKI.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- ======= FAQ SECTION END ======= -->


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