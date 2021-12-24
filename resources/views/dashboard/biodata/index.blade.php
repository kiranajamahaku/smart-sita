<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Smart-SITA</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/img/favicon.jpg') }}">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!-- CSS PLUGIN -->
  <link rel="stylesheet" href="{{ asset('vendor/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">

  <!-- CSS PLUGIN FOR THIS PAGE-->
  <link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('js/select.dataTables.min.css') }}">

  <!-- CSS MAIN FILE -->
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
</head>
<body>
  <div class="container-scroller">
    <!-- NAVBAR -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/" target="_blank"><img src="{{ asset('img/dashboard/logo.svg') }}" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="/" target="_blank"><img src="{{ asset('img/dashboard/logo-mini.svg') }}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <p class="nama_user">{{ auth()->user()->fullname }}</p>
              @if (empty(auth()->user()->photo))
                <img src="{{ asset('img/dashboard/face1.jpg') }}" alt="{{ auth()->user()->fullname }}" class="rounded-circle" width="150">
              @else
                <img src="{!! asset('storage/data_file/'.auth()->user()->photo) !!}" alt="{{ auth()->user()->fullname }}" class="rounded-circle" height="150"width="150">
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/logout">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- NAVBAR END -->

    <!-- SIDEBAR -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <i class="ri-dashboard-line menu-icon"></i>
              <span class="menu-title">Overview</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/biodata">
              <i class="ri-user-line menu-icon"></i>
              <span class="menu-title">Biodata</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/persyaratanawal">
              <i class="icon-layers menu-icon"></i>
              <span class="menu-title">Persyaratan Awal</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/outline">
              <i class="ri-book-2-line menu-icon"></i>
              <span class="menu-title">Outline</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="ri-group-line menu-icon"></i>
              <span class="menu-title">Bimbingan</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="/dashboard/bimbingan/databimbingan">Data Bimbingan</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboard/bimbingan/bimbinganta">Bimbingan TA</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/verifikasi">
              <i class="ri-checkbox-line menu-icon"></i>
              <span class="menu-title">Verifikasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard/persetujuandospem">
              <i class="ri-draft-line menu-icon"></i>
              <span class="menu-title">Persetujuan Pembimbing</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- SIDEBAR END -->

      <!-- MAIN PANEL -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <h3 class="font-weight-bold">Biodata</h3>
              </div>
            </div>
          </div>
            <!-- Profile -->
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card__profile">
                    <div class="card__profile-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <a href="#fotoUpload" data-toggle="modal"><i class="ri-camera-fill"></i></a> 
                          @if (empty(auth()->user()->photo))
                            <img src="{{ asset('img/dashboard/face1.jpg') }}" alt="{{ auth()->user()->fullname }}" class="rounded-circle" width="150">
                          @else
                            <img src="{!! asset('storage/data_file/'.auth()->user()->photo) !!}" alt="{{ auth()->user()->fullname }}" class="rounded-circle" height="150"width="150">
                          @endif
                          <div class="mt-3">
                          <h4>{{ auth()->user()->fullname }}</h4>
                          <p name="prodi" id="prodi">{{ auth()->user()->prodi }}</p>
                          <p name="statusMhs" id="statusMhs" >{{ auth()->user()->statusMhs }}</p>
                          <p name="tahunAkd" id="tahunAkd" >{{ auth()->user()->tahunAkad }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card__profile mb-3">
                    <div class="card__profile-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Username</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->username }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->fullname }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->email }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Fakultas</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->fakultas }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Program Studi</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->prodi }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Status Mahasiswa</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->statusMhs }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Tahun Akademik</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->tahunAkad }}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          {{ auth()->user()->phone }}
                        </div>
                      </div>
                      <hr>
                      <div class="col-sm-12">
                        <a href="#" class="button-18" data-toggle="modal" data-target="#editBiodataModal">Edit</a>
                      </div>
          
                    <!-- EDIT BIODATA MODAL -->
                    <div id="editBiodataModal" class="modal fade">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <form action="/dashboard/biodata" method="POST">
                            @csrf
                            <div class="modal-header">						
                              <h4 class="modal-title">Edit Data</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">					
                              <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="{{ auth()->user()->username }}" required>
                              </div>
                              <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="fullname" value="{{ auth()->user()->fullname }}" required>
                              </div>				
                              <div class="form-group">
                                <input type="hidden" class="form-control" name="password" value="{{ auth()->user()->password }}">
                              </div>
                              <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" required>
                              </div>
                              <div class="form-group">
                                <label>Fakultas</label>
                                <select name="fakultas" id="fakultas" class="select-modal-detail">
                                  <option value="ftki">FTKI</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Program Studi</label>
                                <select name="prodi" id="prodi" class="select-modal-detail">
                                  <option value="Sistem Informasi">Sistem Informasi</option>
                                  <option value="Teknik Informatika">Teknik Informatika</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Status Mahasiswa</label>
                                <select name="statusMhs" id="statusMhs" class="select-modal-detail">
                                  <option value="Reguler">Reguler</option>
                                  <option value="Karyawan">Karyawan</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Tahun Akademik</label>
                                <select name="tahunAkad" id="tahunAkd" class="select-modal-detail">
                                  <option value="2021/2022 - Ganjil">2021/2022 - Ganjil</option>
                                  <option value="2021/2022 - Genap">2021/2022 - Genap</option>
                                </select>
                              </div>										
                              <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}" required>
                              </div>						
                            </div>
                            <div class="modal-footer">
                              <input type="button" class="button-cancel button-modal" data-dismiss="modal" value="Cancel">
                              <input type="submit" class="button-add button-modal" value="Update">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- EDIT BIODATA END MODAL -->

                    </div>
                  </div>
                </div>
                <!-- IMG UPLOAD MODAL -->
                <div id="fotoUpload" class="modal fade">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <form action="/dashboard/biodata/photo" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">						
                          <h4 class="modal-title">Upload Foto</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                          <div class="form-group">
                            <label for="uploadFoto">Upload Foto <br> (Direkomendasikan rasio foto sebesar 1:1 dengan format JPG)</label>
                            <input type="file" class="form-control-file" name="photo" id="uploadFoto">
                          </div>
                        <div class="modal-footer">
                          <input type="button" class="button-cancel button-modal" data-dismiss="modal" value="Cancel">
                          <input type="submit" class="button-add button-modal" value="Update">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- IMG UPLOAD MODAL END -->
              </div>
            <!-- Profile END -->
        </div>

          <!-- FOOTER -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <b>FTKI UNAS</b></span>
              </div>
            </footer>
          <!-- END FOOTER -->
      </div>
      <!-- MAIN PANEL END -->
    </div>
    <!-- Sidebar END -->
  </div>

  <!-- plugins:js -->
  <script src="{{ asset('vendor/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
</html>