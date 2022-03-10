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

  {{-- Google Font --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  {{-- Iconscout --}}
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.5/css/unicons.css">

  {{-- BOOTSTRAP --}}
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  {{-- Vendor CSS/JS --}}
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ asset('/vendor/remixicon/remixicon.css" rel="stylesheet') }}">
  <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

  {{-- w3 --}}
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  {{-- Main CSS File --}}
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>

  {{-- Header --}}
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="/"><span>Smart-SITA</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#steps">Step Smart-SITA</a></li>
          <li><a class="nav-link scrollto" href="#petunjuk-sec">Petunjuk</a></li>
          <li><a class="nav-link scrollto" href="#informasi">Informasi</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
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
  </header>
  {{-- End Header --}}

  {{-- Hero Section --}}
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="fade-down">
            <h1><span>Smart-SITA</span></h1>
            <h2>Sistem informasi Tugas Akhir mahasiswa yaitu proses secara online, dari proposal, reviewer, pembimbingan, sidang dan sampai tugas akhir selesai.</h2>
            <div class="text-center text-lg-start">
              <a href="#steps" class="btn-get-started scrollto">Lebih Lanjut <i class="bi bi-arrow-down"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section>
  {{-- End Hero --}}

  {{-- Start Main --}}
  <main id="main">

    {{-- Step Section     --}}
    <section id="steps" class="steps">
      <div class="container">

        <div class="row" data-aos="fade-up-right">

          <div class="section-title" data-aos="fade-up">
            <h2>Steps</h2>
            <p>Steps-steps pada Smart-SITA</p>
            <h5 class="section-desc">Berikut adalah langkah-langkah dasar dalam penggunaan Smart-SITA. Untuk informasi lebih lanjut dapat melihat bagian Petunjuk.</h5>
          </div>
          
          <div class="col-lg-3 col-md-6">
            <div class="step-box">
              <div class="icon"><i class='bx bx-log-in-circle' ></i></div>
              <h4 class="title">1. Registrasi</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="step-box">
              <div class="icon"><i class='bx bx-upload'></i></div>
              <h4 class="title">2. Upload Persyaratan Awal</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="step-box">
              <div class="icon"><i class='bx bx-check-circle' ></i></div>
              <h4 class="title">3. Verifikasi Data</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="step-box">
              <div class="icon"><i class='bx bxs-file-doc'></i></div>
              <h4 class="title">4. Upload Outline</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="step-box">
              <i class="bi bi-people"></i>
              <h4>5. Pemilihan Pembimbing</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="step-box">
              <div class="icon"><i class='bx bxs-group' ></i></div>
              <h4 class="title">6. Melakukan Bimbingan Online</h4>
            </div>
          </div>

        </div>

      </div>
    </section>
    {{-- End Step --}}

    {{-- Petunjuk Section --}}
    <section id="petunjuk-sec" class="petunjuk-sec">
      <div class="container">
        <div class="row" data-aos="fade-up-left">

          <div class="section-title petunjuk-head" data-aos="fade-up">
            <h2>Petunjuk</h2>
            <p class="petunjuk-judul">Petunjuk</p>
            <h5 class="section-desc petunjuk-desc">Petunjuk tambahan untuk user. Klik masing-masing 'Card' untuk melihat informasi.</h5>
          </div>

          <div class="cards-list">

            {{-- Manual Smart SITA --}}


            <div class="card 1" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">
              <div class="card_image"> <img src="{{ asset('/img/manual-ilust.svg') }}" /></div>
              <div class="card_title">
                <p>Manual Smart-SITA</p>
              </div>
            </div>

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content">
                <header class="modal-head"> 
                  <span onclick="document.getElementById('id01').style.display='none'" 
                  class="w3-button w3-display-topright">&times;</span>
                  <h2 class="modal-title">Manual Smart-SITA</h2>
                </header>
                <div class="modal-body">
                  <p class="modal-desc">Petunjuk dan pelaksanaan Smart-SITA bagi Mahasiswa, Reviewer, Dosen Pembimbing dan Penguji. Ketentuan-ketentuan harus di indahkan untuk kepentingan kita bersama, panduan singkat bagi Smart-SITA dalam pelaksanaan Tugas Akhir Mahasiswa.</p>
                </div>
              </div>
            </div>

            {{-- Reviewer --}}
            <div class="card 2" onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">
              <div class="card_image">
                <img src="{{ asset('/img/reviewer-ilust.svg') }}" />
              </div>
              <div class="card_title">
                <p>Reviewer</p>
              </div>
            </div>

            <div id="id02" class="w3-modal">
              <div class="w3-modal-content">
                <header class="modal-head"> 
                  <span onclick="document.getElementById('id02').style.display='none'" 
                  class="w3-button w3-display-topright">&times;</span>
                  <h2 class="modal-title">Reviewer</h2>
                </header>
                <div class="modal-body">
                  <p class="modal-desc">Mahasiswa yang ikut Tugas Akhir (TA) harus melalui reviewer, filter pertama apakah mahasiswa layak atau tidak dalam Penulisan, jika mahasiswa tidak ada catatan atau komentar dari reviewer, mahasiswa "TIDAK BOLEH IKUT DALAM PEMBIMBINGAN".</p>
                </div>
              </div>
            </div>

            {{-- Pembimbing --}}
            <div class="card 3" onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-black">
              <div class="card_image">
                <img src="{{ asset('/img/pembimbing-ilust.svg') }}" />
              </div>
              <div class="card_title">
                <p class="pembimbing-title">Pembimbing 1 & 2</p>
              </div>
            </div>

            <div id="id03" class="w3-modal">
              <div class="w3-modal-content">
                <header class="modal-head"> 
                  <span onclick="document.getElementById('id03').style.display='none'" 
                  class="w3-button w3-display-topright">&times;</span>
                  <h2 class="modal-title">Pembimbing 1 & 2</h2>
                </header>
                <div class="modal-body">
                  <p class="modal-desc">Mahasiswa yang sudah melewati fase reviewer, mahasiswa dapat melakukan pembimbingan 1 dan pembimbingan 2, jika mahasiswa tidak melalukan pembimbingan "TIDAK DIPERBOLEHKAN IKUT SIDANG", Pembimbingan mahasiswa harus ketemu minimal 8X oleh Pembimbing 1 "dan" 8X oleh Pembimbing 2. <br> <br> Sekretariat melakukan control jika tidak ada Catatan dari Pembimbing 1 dan Pembimbing 2 sebagaimana ketentuan diatas (TIDAK BISA DIJADWALKAN UNTUK SIDANG).</p>
                </div>
              </div>
            </div>
        
            {{-- Penguji --}}
            <div class="card 4" onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-black">
              <div class="card_image">
                <img src="{{ asset('/img/penguji-ilust.svg') }}" />
              </div>
              <div class="card_title">
                <p>Penguji 1, 2 & 3</p>
              </div>
            </div>

            <div id="id04" class="w3-modal">
              <div class="w3-modal-content">
                <header class="modal-head"> 
                  <span onclick="document.getElementById('id04').style.display='none'" 
                  class="w3-button w3-display-topright">&times;</span>
                  <h2 class="modal-title">Penguji 1, 2 & 3</h2>
                </header>
                <div class="modal-body">
                  <p class="modal-desc">Perhatikan persyaratan dan ketentuan yang berlaku, apakah mahasiswa sudah ketemu dengan pembimbing 1 sebanyak 4X dan pembimbing 2 sebanyak 6X, bisa dicek berdasarkan catatan Pembimbing 1 dan 2, jika tidak ada catatan tersebut pengujian "TIDAK BOLEH DITERUSKAN", Jika persyaratan terpenuhi Sidang Pengujian boleh dilakukan.</p>
                </div>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </section>
    {{-- Petunjuk Section End --}}

    {{-- Informasi --}}
    <section id="informasi" class="informasi">
      <div class="container">

        <div class="section-title petunjuk-head" data-aos="fade-up">
          <h2>informasi</h2>
          <p class="petunjuk-judul">Informasi</p>
          <h5 class="section-desc petunjuk-desc">Informasi tambahan terkait Tugas Akhir. Klik 'Card' dibawah ini atau scroll untuk melihat.</h5>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <div class="icon"><i class='bx bx-download'></i></div>
              <h3><a href="#outline">Template Outline & Form Persetujuan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class='bx bx-edit-alt'></i></div>
              <h3><a href="#tipsjurnal">Tips Penulisan Jurnal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <div class="icon"><i class='bx bx-book-reader'></i></div>
              <h3><a href="#publisher">Mencari Publisher akreditasi SINTA</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class='bx bx-slideshow'></i></div>
              <h3><a href="#jadwal">Jadwal Sidang</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section>
    {{-- Informasi End --}}

    {{-- Outline --}}
      <section id="outline" class="outline">
          <div class="container">
            <div class="row" data-aos="fade-down">
              <div class="section-title" data-aos="fade-up">
                <h2>Download File</h2>
                <p>Template Outline & Form Persetujuan</p>
                <h5>Klik gambar dibawah ini untuk download.</h5>
              </div>
    
              <div class="icon-outline">
                <a href="{{ asset('img/template-jurnal.docx') }}" target="_blank">
                  <img src="{{ asset('img/outline-icon.png') }}" alt="">
                  <p class="icon-desc">Template Outline</p>
                </a>

                <a href="http://smart.ftki.unas.ac.id/SITA/Form-Persetujuan-PublikasiRev2.pdf" target="_blank">
                  <img src="{{ asset('img/form-icon.png') }}" alt="">
                  <p class="icon-desc">Form Persetujuan</p>
                </a>
  
              </div>
            </div>
          </div>
        </section>
    {{-- Outline End --}}

    {{-- Konten --}}
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="https://images.unsplash.com/photo-1513542992587-cd39ba97057c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=435&q=80" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3 id="tipsjurnal">Tips Singkat Penulisan Jurnal</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i> Dalam pembuatan judul jurnal harus jelas. Judul akan memudahkan pembaca mengetahui inti jurnal tanpa harus membaca isi jurnal keseluruhan.</li>
              <li><i class='bx bx-check-circle'></i> Maksimal 250 kata yang merangkum tujuan, metode, hasil, dan kesimpulan di dalam abstrak</li>
              <li><i class='bx bx-check-circle'></i> Latar belakang masalah, seperti ringkasan dari setiap penelitian yang telah dilakukan dan bagaimana sebuah percobaan akan membantu untuk menjelaskan atau memperluas pengetahuan dalam bidang umum.</li>
              <li><i class='bx bx-check-circle'></i> Anda dapat menyajikan data yang ringkasan dengan tinjauan dalam bentuk teks, tabel, maupun gambar. Perlu diingat, dalam bagian ini informasi yang diberikan hanya hasil yang disajikan.</li>
              <li><i class='bx bx-check-circle'></i> Dari semua Membuat sebuah kesimpulan dari keseluruhan percobaan yang telah dilakukan. Intinya adalah peneliti merujuk kembali kepada pernyataan dalam pendahuluan dari setiap data yang diinformasikan.</li>
            </ul>
            <p>
              (Sumber: https://penerbitdeepublish.com/)
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ asset('img/publisher-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3 id="publisher">Mencari Publisher Akreditasi SINTA</h3>
            <ul>
              <li><i class='bx bx-check-circle'></i>Untuk publisher terakreditasi SINTA dapat dicari di website <a href="https://www.sinta.ristekbrin.go.id/journals"> https://www.sinta.ristekbrin.go.id/journals.</a></li>
              <li><i class='bx bx-check-circle'></i>Setelah itu pilih akreditasi SINTA (<a href="https://www.sinta.ristekbrin.go.id/journals?q=&search=1&sinta=1" target="__blank">SINTA 1</a>, <a href="https://www.sinta.ristekbrin.go.id/journals?q=&search=1&sinta=2" target="__blank">SINTA 2</a>, <a href="https://www.sinta.ristekbrin.go.id/journals?q=&search=1&sinta=3" target="__blank">SINTA 3</a>, <a href="https://www.sinta.ristekbrin.go.id/journals?q=&search=1&sinta=4" target="__blank">SINTA 4</a>, <a href="https://www.sinta.ristekbrin.go.id/journals?q=&search=1&sinta=5" target="__blank">SINTA 5</a>) untuk memuat publisher dengan akreditasi yang diinginkan.</li>
              <li><i class='bx bx-check-circle'></i>Lalu dapat mengetikan bidang keilmuan jurnal referensi di kolom search</li>
              <li><i class='bx bx-check-circle'></i>Selanjutnya web tersebut akan menampilkan publisher sesuai dengan yang dicari.</li>
            </ul>
          </div>
        </div>
      </div>
    {{-- Konten Ends --}}

    {{-- Jadwal Sidang --}}
    <section id="jadwal" class="jadwal" data-aos="fade-down">
      <div class="container">
        <div class="row">
          <div class="section-title" data-aos="fade-up">
            <h2>Jadwal</h2>
            <p>Jadwal Sidang</p>
            <h5>Klik next atau cari nama Anda di search bar.</h5>
          </div>
        <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Mahasiswa</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Room</th>
                    <th>Penguji 1</th>
                    <th>Penguji 2</th>
                </tr>
            </thead>
     
            <tbody>
                <tr>
                    <td>Destiara Kirana Safitri</td>
                    <td>06-01-22</td>
                    <td>14.00 - 14.30</td>
                    <td>ROOM 5</td>
                    <td>Prof. Dr. Iskandar Fitri, S.T., M.T.</td>
                    <td>Rini Nuraini, S.T., M.Kom.</td>
                </tr>
                <tr>
                    <td>Diawanti</td>
                    <td>04-01-22</td>
                    <td>09:00 - 09:30</td>
                    <td>Room 1</td>
                    <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                    <td>Ira Diana Sholihati, S.Si, MMSI</td>
                </tr>
                <tr>
                    <td>YUYUN YUNIATI</td>
                    <td>04-01-22</td>
                    <td>09:30 - 10:00</td>
                    <td>Room 1</td>
                    <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                    <td>Ira Diana Sholihati, S.Si, MMSI</td>
                </tr>
                <tr>
                  <td>Fakhrul Mu'minin</td>
                  <td>04-01-22</td>
                  <td>10:00 - 10:30</td>
                  <td>Room 1</td>
                  <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                  <td>Ira Diana Sholihati, S.Si, MMSI</td>
                </tr>
                <tr>
                  <td>Muhammad Rafiq Zayana</td>
                  <td>04-01-22</td>
                  <td>10:30 - 11:00</td>
                  <td>Room 1</td>
                  <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                  <td>Novi Dian Nathasia, S.Kom., MMSI</td>
                </tr>
                <tr>
                    <td>Aqil Naufal Gifari</td>
                    <td>05-01-22</td>
                    <td>09:30 - 10:00</td>
                    <td>Room 1</td>
                    <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                    <td>Aris Gunaryati, S.Si, MMSI</td>
                </tr>
                <tr>
                  <td>Navita Putri Purwanti</td>
                  <td>05-01-22</td>
                  <td>14:30 - 15:00</td>
                  <td>Room 1</td>
                  <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                  <td>Ir. Endah Tri Esthi Handayani, MMSI</td>
                </tr>
                <tr>
                  <td>Rizki Hidayat</td>
                  <td>05-01-22</td>
                  <td>13:30 - 14:00</td>
                  <td>Room 1</td>
                  <td>Dr. Agung Triayudi, S.Kom., M.Kom</td>
                  <td>Deny Hidayatullah, S.E., MMSI	</td>
                </tr>
                <tr>
                    <td>Nabila Tiara Nuraini</td>
                    <td>04-01-22</td>
                    <td>09:00 - 09:30</td>
                    <td>Room 2</td>
                    <td>Dr. Fauziah,. S.Kom., MMSI</td>
                    <td>Agus Iskandar, S.Kom., M.Kom</td>
                </tr>
                <tr>
                    <td>Anggita Putri Maharani</td>
                    <td>04-01-22</td>
                    <td>09:30 - 10:00</td>
                    <td>Room 2</td>
                    <td>Dr. Fauziah,. S.Kom., MMSI</td>
                    <td>Agus Iskandar, S.Kom., M.Kom</td>
                </tr>
                <tr>
                  <td>Syakirah Fachid</td>
                  <td>04-01-22</td>
                  <td>10:00 - 10:30</td>
                  <td>Room 2</td>
                  <td>Dr. Fauziah,. S.Kom., MMSI</td>
                  <td>Agus Iskandar, S.Kom., M.Kom</td>
                </tr>
                <tr>
                    <td>Panji Yusrifal</td>
                    <td>04-01-22</td>
                    <td>09:00 - 09:30</td>
                    <td>Room 3</td>
                    <td>Dr. Septi Andryana, S.Kom., MMS</td>
                    <td>Andrianingsih S.Kom., MMSI</td>
                </tr>
                <tr>
                  <td>Muhammad Syihadul Amir Noor</td>
                  <td>04-01-22</td>
                  <td>13:30 - 14:00</td>
                  <td>Room 3</td>
                  <td>Dr. Septi Andryana, S.Kom., MMS</td>
                  <td>Andrianingsih S.Kom., MMSI</td>
                </tr>
                <tr>
                  <td>Abi Rachman Syafei</td>
                  <td>04-01-22</td>
                  <td>15:30 - 16:00	</td>
                  <td>Room 3</td>
                  <td>Dr. Septi Andryana, S.Kom., MMS</td>
                  <td>Andrianingsih S.Kom., MMSI</td>
                </tr>
                <tr>
                    <td>Ilham Rachmandito</td>
                    <td>04-01-22</td>
                    <td>17:00 - 17:30</td>
                    <td>Room 4</td>
                    <td>Dr. Ucuk Darusalam, S.T., M.T</td>
                    <td>M. Iwan Wahyuddin, S.T., M.T.</td>
                </tr>
                <tr>
                  <td>Vicki Irvan Maulana</td>
                  <td>05-01-22</td>
                  <td>10:30 - 11:00</td>
                  <td>Room 4</td>
                  <td>Dr. Ucuk Darusalam, S.T., M.T</td>
                  <td>Sari Ningsih</td>
                </tr>
                <tr>
                    <td>Addiina Najlaa Nurkalyisah</td>
                    <td>07-01-22</td>
                    <td>14:00 - 14:30</td>
                    <td>Room 5</td>
                    <td>Prof. Dr. Iskandar Fitri, S.T., M.T.</td>
                    <td>M. Iwan Wahyuddin, S.T., M.T.</td>
                </tr>
                <tr>
                    <td>ALISA FITRIYANI</td>
                    <td>06-01-22</td>
                    <td>13:00 - 13.30</td>
                    <td>Room 5</td>
                    <td>Prof. Dr. Iskandar Fitri, S.T., M.T.</td>
                    <td>Ira Diana Sholihati, S.Si, MMSI</td>
                </tr>
                <tr>
                  <td>Dika Irawan</td>
                  <td>06-01-22</td>
                  <td>13:30 - 12.30</td>
                  <td>Room 5</td>
                  <td>Prof. Dr. Iskandar Fitri, S.T., M.T.</td>
                  <td>Rini Nuraini, S.T., M.Kom.</td>
                </tr>
                <tr>
                    <td>Ajeng Nanda Zulianti</td>
                    <td>05-01-22</td>
                    <td>14:00 - 14:30</td>
                    <td>Room 5</td>
                    <td>Prof. Dr. Iskandar Fitri, S.T., M.T.</td>
                    <td>Andrianingsih S.Kom., MMSI	</td>
                </tr>
            </tbody>
        </table>
        </div>
      </div>

    </section>

  {{-- FAQ Section --}}
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-down">
              <i class="bx bx-bulb icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Mengapa saya tidak dapat masuk ke Smart-SITA? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Silakan register nama Anda terlebih dahulu, isi Username, Email (email anda dengan huruf kecil), dan password Anda, lalu check email Anda.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-bulb icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Kenapa record data saya kosong? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yakinkan email Anda waktu register sama dengan email yang Anda isi di Biodata (email harus dengan huruf kecil).
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-bulb icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Bagaimana caranya mengupload file? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Anda masuk ke menu Mahasiswa, terus pilih Upload file, Silakan upload file Anda dan isi data-data yang diminta.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-bulb icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Mengapa saya tidak dapat login walaupun sudah register? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  User Anda belum diaktifasi, silkan check email Anda, atau hubungi sekretariat FTKI.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section>
  {{-- End FAQ --}}


  </main>
  {{-- End Main --}}

  {{-- Footer --}}
  <footer id="footer" data-aos="fade-down">
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
  {{-- End Footer --}}

  {{-- Back On TOP --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JavaScript -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/puresteper/puresteper.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/js/jquery.dataTables.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

  <!-- JavaScript File -->
  <script src="{{ asset('/js/main.js') }}"></script>

  {{-- AOS --}}
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    $(document).ready(function() {
      $('.table-paginate').dataTable();
    } );
  </script>

</body>
</html>