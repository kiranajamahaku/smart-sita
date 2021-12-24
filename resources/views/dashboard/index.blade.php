<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Smart-SITA</title>

    {{-- Favicon --}}
    <link rel="icon" href="{{ asset('/img/favicon.jpg') }}">

  <!-- CSS PLUGIN -->
  <link rel="stylesheet" href="{{ asset('vendor/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}">

  <!-- CSS PLUGIN FOR THIS PAGE-->
  <link rel="stylesheet" href="{{ asset('vendor/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="{{ asset('js/select.dataTables.min.css') }}">

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
                <img src="{{ asset('img/dashboard/face1.jpg') }}" alt="Admin" class="rounded-circle" width="150">
              @else
                <img src="{!! asset('storage/data_file/'.auth()->user()->photo) !!}" alt="Admin" class="rounded-circle" height="150"width="150">
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="/logout" >
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
            <a class="nav-link" href="/dashboard/">
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
            <a class="nav-link" href="dashboard/outline">
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
                <h3 class="font-weight-bold">Overview</h3>
              </div>
            </div>
          </div>
          <div class="row">

            <div class="row gutter-sm">
              <div class="cards">
                <div class="card card-1">
                  <div class="card__icon"><i class="ri-user-line"></i></div>
                  <h2 class="card__title">Biodata</h2>
                  <p class="card__apply">
                    <a class="card__link" href="/dashboard/biodata">Go to the page <i class="ri-arrow-right-line"></i></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="cards">
                <div class="card card-2">
                  <div class="card__icon"><i class="ri-book-2-line"></i></div>
                  <h2 class="card__title">Persyaratan Awal</h2>
                  <p class="card__apply">
                    <a class="card__link" href="/dashboard/persyaratanawal">Go to the page <i class="ri-arrow-right-line"></i></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="cards">
                <div class="card card-3">
                  <div class="card__icon"><i class="icon-layers"></i></div>
                  <h2 class="card__title">Outline</h2>
                  <p class="card__apply">
                    <a class="card__link" href="/dashboard/outline">Go to the page <i class="ri-arrow-right-line"></i></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="cards">
                <div class="card card-4">
                  <div class="card__icon"><i class="ri-checkbox-line"></i></div>
                  <h2 class="card__title">Bimbingan</h2>
                  <p class="card__apply">
                    <a class="card__link" href="/dashboard/bimbingan/bimbinganta">Go to the page <i class="ri-arrow-right-line"></i></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="cards">
                <div class="card card-5">
                  <div class="card__icon"><i class="ri-group-line"></i></div>
                  <h2 class="card__title">Verifikasi</h2>
                  <p class="card__apply">
                    <a class="card__link" href="/dashboard/verifikasi">Go to the page <i class="ri-arrow-right-line"></i></a>
                  </p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="cards">
                <div class="card card-6">
                  <div class="card__icon"><i class="ri-draft-line"></i></div>
                  <h2 class="card__title">Persetujuan Pembimbing</h2>
                  <p class="card__apply">
                    <a class="card__link" href="/dashboard/persetujuandospem">Go to the page <i class="ri-arrow-right-line"></i></a>
                  </p>
                </div>
              </div>
            </div>
          </div>
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
    <!-- END SIDEBAR -->
  </div>

  <!-- JAVASCRIPT PLUGIN -->
  <script src="{{ asset('vendor/js/vendor.bundle.base.js') }}"></script>

  <!-- JAVASCRIPT -->
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>

  <!-- Custom js for this page-->
  <script src="{{ asset('js/dashboard.js') }}"></script>

</body>
</html>
