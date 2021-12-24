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
                <h3 class="font-weight-bold">Outline</h3>
              </div>
            </div>
          </div>
          <div class="row">		
            <!-- TABLE -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Mahasiswa</th>
                    <th>Judul Outline</th>
                    <th>Upload Outline</th>
                    <th>Pilihan Pembimbing</th>
                    <th>Pilihan Pembimbing Tunggal</th>
                    <th>Pilihan Team Pembimbing 1</th>
                    <th>Pilihan Team Pembimbing 2</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($outline as $o)
                    <tr>
                      <td>
                        <a href="#" data-target="#editDataModal" class="edit" data-toggle="modal" 
                          data-id="{{ $o->id }}" 
                          data-judul="{{ $o->judul }}"
                          data-pilihan-pembimbing="{{ $o->pilihanPembimbing }}"
                          data-pilihan-tunggal="{{ $o->pilihanTunggal }}"
                          data-pilihan-team1="{{ $o->pilihanTeam1 }}"
                          data-pilihan-team2="{{ $o->pilihanTeam2 }}">
                          <i class="ri-edit-2-line" data-toggle="tooltip" title="Edit"></i>
                        </a>
                        <a href="#" data-target="#deleteDataModal" class="delete" data-toggle="modal" data-id="{{ $o->id }}"><i class="ri-delete-bin-line" data-toggle="tooltip" title="Delete"></i></a>
                      </td>
                      <td>
                        @if (empty(auth()->user()->photo))
                          <img src="{{ asset('img/dashboard/face1.jpg') }}" data-target="#dataFotoModal" data-toggle="modal" alt="Admin" class="rounded-circle" width="150">
                        @else
                          <img src="{!! asset('storage/data_file/'.auth()->user()->photo) !!}" data-target="#dataFotoModal" data-toggle="modal" alt="Admin" class="rounded-circle" height="150"width="150">
                        @endif
                      </td>
                      <td>{{ $o->judul }}</td>
                      <td><a href="/dashboard/download/{{ $o->uploadOutline }}">{{ $o->uploadOutline }}</a></td>
                      <td>{{ $o->pilihanPembimbing }}</td>
                      <td>{{ $o->pilihanTunggal }}</td>
                      <td>{{ $o->pilihanTeam1 }}</td>
                      <td>{{ $o->pilihanTeam2 }}</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- TABLE END -->
            <!-- Add Data Button -->
            <div class="col-sm-12">
              <button type="button" class="button-add" data-target="#addDataModal" data-toggle="modal"><i class="ri-add-fill"></i> Add New Data</button>
            </div>		
          </div>
        </div>
            <!-- Add Data Button End -->

            <!-- MODAL ADD-->
            <div id="addDataModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form action="/dashboard/outline" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">						
                      <h4 class="modal-title">Add New Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                      <div class="form-group">
                        <label>Judul Outline</label>
                        <textarea class="form-control" id="judulOutline" name="judul" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                      </div>	
                      <div class="form-group">
                        <label>Upload Outline</label>
                        <input type="file" class="form-control-file" name="uploadOutline" required>
                      </div>
                      <div class="form-group">
                        <label for="pilihanPembimbing">Pilihan Pembimbing</label>
                        <select name="pilihanPembimbing" id="pilihanPembimbing" required>
                            <option value="Pembimbing Tunggal">Pembimbing Tunggal</option>
                            <option value="Team Pembimbing">Team Pembimbing</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="labelPT" for="pilihanPT">Pilihan Pembimbing Tunggal</label>
                        <select name="pilihanTunggal" id="pilihanPT">
                            <option value="Prof. Dr. Iskandar Fitri, ST., MT">Prof. Dr. Iskandar Fitri, ST., MT</option>
                            <option value="Dr. Ucuk Darusalam, ST., MT">Dr. Ucuk Darusalam, ST., MT</option>
                            <option value="Dr. Septi Andryana, S.Kom., MMSI">Dr. Septi Andryana, S.Kom., MMSI</option>
                            <option value="Dr. Fauziah, MMSI">Dr. Fauziah, MMSI</option>
                            <option value="Dr. Agung Triayudi, S.Kom., M.Kom.">Dr. Agung Triayudi, S.Kom., M.Kom.</option>
                            <option value="Andrianingsih, S.Kom., MMSI.">Andrianingsih, S.Kom., MMSI.</option>
                            <option value="Ira Diana Sholihati, S.Si., MMSI.">Ira Diana Sholihati, S.Si., MMSI.</option>
                            <option value="Agus Iskandar, S.Kom., M.Kom">Agus Iskandar, S.Kom., M.Kom</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="labelTP1" for="pilihanTP1">Pilihan Team Pembimbing 1</label>
                        <select name="pilihanTeam1" id="pilihanTP1">
                            <option value="Prof. Dr. Iskandar Fitri, ST., MT">Prof. Dr. Iskandar Fitri, ST., MT</option>
                            <option value="Dr. Ucuk Darusalam, ST., MT">Dr. Ucuk Darusalam, ST., MT</option>
                            <option value="Dr. Septi Andryana, S.Kom., MMSI">Dr. Septi Andryana, S.Kom., MMSI</option>
                            <option value="Dr. Fauziah, MMSI">Dr. Fauziah, MMSI</option>
                            <option value="Dr. Agung Triayudi, S.Kom., M.Kom.">Dr. Agung Triayudi, S.Kom., M.Kom.</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="labelTP2" for="pilihanTP2">Pilihan Team Pembimbing 2</label>
                        <select name="pilihanTeam2" id="pilihanTP2">
                            <option value="Andrianingsih, S.Kom., MMSI.">Andrianingsih, S.Kom., MMSI.</option>
                            <option value="Ira Diana Sholihati, S.Si., MMSI.">Ira Diana Sholihati, S.Si., MMSI.</option>
                            <option value="Agus Iskandar, S.Kom., M.Kom">Agus Iskandar, S.Kom., M.Kom</option>
                        </select>
                      </div>			
                    </div>
                    <div class="modal-footer">
                      <input type="button" class="button-cancel button-modal" data-dismiss="modal" value="Cancel">
                      <input type="submit" class="button-add button-modal" value="Add">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Add Modal End -->

            <!-- MODAL Edit-->
            <div id="editDataModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">						
                      <h4 class="modal-title">Edit Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                      <div class="form-group">
                        <label>Judul Outline</label>
                        <textarea class="form-control" id="judulEdit" name="judul" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                      </div>	
                      <div class="form-group">
                        <label>Upload Outline</label>
                        <input type="file" class="form-control-file" name="uploadOutline" id="uploadOutline">
                      </div>
                      <div class="form-group">
                        <label for="pilihanPembimbing">Pilihan Pembimbing</label>
                        <select name="pilihanPembimbing" id="pilihanPembimbingEdit" required>
                            <option value="Pembimbing Tunggal">Pembimbing Tunggal</option>
                            <option value="Team Pembimbing">Team Pembimbing</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="labelPTEdit" for="pilihanPT">Pilihan Pembimbing Tunggal</label>
                        <select name="pilihanTunggal" id="pilihanPTEdit">
                            <option value="Prof. Dr. Iskandar Fitri, ST., MT">Prof. Dr. Iskandar Fitri, ST., MT</option>
                            <option value="Dr. Ucuk Darusalam, ST., MT">Dr. Ucuk Darusalam, ST., MT</option>
                            <option value="Dr. Septi Andryana, S.Kom., MMSI">Dr. Septi Andryana, S.Kom., MMSI</option>
                            <option value="Dr. Fauziah, MMSI">Dr. Fauziah, MMSI</option>
                            <option value="Dr. Agung Triayudi, S.Kom., M.Kom.">Dr. Agung Triayudi, S.Kom., M.Kom.</option>
                            <option value="Andrianingsih, S.Kom., MMSI.">Andrianingsih, S.Kom., MMSI.</option>
                            <option value="Ira Diana Sholihati, S.Si., MMSI.">Ira Diana Sholihati, S.Si., MMSI.</option>
                            <option value="Agus Iskandar, S.Kom., M.Kom">Agus Iskandar, S.Kom., M.Kom</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="labelTP1Edit" for="pilihanTP1">Pilihan Team Pembimbing 1</label>
                        <select name="pilihanTeam1" id="pilihanTP1Edit">
                            <option value="Prof. Dr. Iskandar Fitri, ST., MT">Prof. Dr. Iskandar Fitri, ST., MT</option>
                            <option value="Dr. Ucuk Darusalam, ST., MT">Dr. Ucuk Darusalam, ST., MT</option>
                            <option value="Dr. Septi Andryana, S.Kom., MMSI">Dr. Septi Andryana, S.Kom., MMSI</option>
                            <option value="Dr. Fauziah, MMSI">Dr. Fauziah, MMSI</option>
                            <option value="Dr. Agung Triayudi, S.Kom., M.Kom.">Dr. Agung Triayudi, S.Kom., M.Kom.</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label id="labelTP2Edit" for="pilihanTP2">Pilihan Team Pembimbing 2</label>
                        <select name="pilihanTeam2" id="pilihanTP2Edit">
                            <option value="Andrianingsih, S.Kom., MMSI.">Andrianingsih, S.Kom., MMSI.</option>
                            <option value="Ira Diana Sholihati, S.Si., MMSI.">Ira Diana Sholihati, S.Si., MMSI.</option>
                            <option value="Agus Iskandar, S.Kom., M.Kom">Agus Iskandar, S.Kom., M.Kom</option>
                        </select>
                      </div>	
                    </div>
                    <div class="modal-footer">
                      <input type="button" class="button-cancel button-modal" data-dismiss="modal" value="Cancel">
                      <input id="editSubmitData" type="submit" class="button-add button-modal" value="Add">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Modal Edit END -->

            <!-- Delete Modal  -->
            <div id="deleteDataModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form id="deleteForm">
                    <div class="modal-header">						
                      <h4 class="modal-title">Delete Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                      <p>Are you sure you want to delete these Records?</p>
                      <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                      <input type="button" class="button-cancel button-modal" data-dismiss="modal" value="Cancel">
                      <input type="submit" class="button-delete button-modal" value="Delete">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Delete Modal End -->

            <!-- Data MAhasiswa Modal -->
            <div id="dataFotoModal" class="modal fade">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">						
                    <h4 class="modal-title">Mahasiswa</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="card__profile">
                    <div class="card__profile-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        @if (empty(auth()->user()->photo))
                          <img src="{{ asset('img/dashboard/face1.jpg') }}" alt="{{ auth()->user()->fullname }}" class="rounded-circle" width="150">
                        @else
                          <img src="{!! asset('storage/data_file/'.auth()->user()->photo) !!}" alt="{{ auth()->user()->fullname }}" class="rounded-circle" height="150"width="150">
                        @endif
                        <div class="mt-3">
                          @foreach ($user as $u)
                            <h4>{{ $u->fullname }}</h4>
                            <p name="prodi" id="prodi">{{ $u->prodi }}</p>
                            <p name="statusMhs" id="statusMhs" >{{ $u->statusMhs }}</p>
                            <p name="tahunAkd" id="tahunAkd" >{{ $u->tahunAkad }}</p>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Data mahasiswa modal END -->

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
  <script type="text/javascript">
    $('#pilihanTP1').hide();
    $('#labelTP1').hide();
    $('#pilihanTP2').hide();
    $('#labelTP2').hide();
    $("#pilihanPembimbing").change(function() {
      if ($(this).val() == "Pembimbing Tunggal") {
        $('#pilihanPT').show();
        $('#labelPT').show();
        $('#pilihanTP1').hide();
        $('#labelTP1').hide();
        $('#pilihanTP2').hide();
        $('#labelTP2').hide();
      } else {
        $('#pilihanPT').hide();
        $('#labelPT').hide();
        $('#pilihanTP1').show();
        $('#labelTP1').show();
        $('#pilihanTP2').show();
        $('#labelTP2').show();
      }
    });
  </script>
  <script type="text/javascript">
  
    $(document).ready(function(){
      //edit
      var $editModal = $('#editDataModal');
      var resourceId;
      $('.edit').on('click', function (ev) {
        ev.preventDefault();

        var judul = $(this).data('judul'),
        $pressedButton = $(this);
        var pilihanPembimbing = $(this).data('pilihanPembimbing'),
        $pressedButton = $(this);
        var pilihanTunggal = $(this).data('pilihanTunggal'),
        $pressedButton = $(this);
        var pilihanTeam1 = $(this).data('pilihanTeam1'),
        $pressedButton = $(this);
        var pilihanTeam2 = $(this).data('pilihanTeam2'),
        $pressedButton = $(this);
        resourceId = $(this).data('id'),
        $pressedButton = $(this);
        
        if(pilihanTunggal == ""){
          pilihanTunggal = "Prof. Dr. Iskandar Fitri, ST., MT";
        }
        if(pilihanTeam1 == ""){
          pilihanTeam1 = "Prof. Dr. Iskandar Fitri, ST., MT";
        }
        if(pilihanTeam2 == ""){
          pilihanTeam2 = "Andrianingsih, S.Kom., MMSI.";
        }

        $("#pilihanPembimbingEdit").change(function() {
          if ($('#pilihanPembimbingEdit').val() == "Pembimbing Tunggal") {
            $('#pilihanPTEdit').show();
            $('#labelPTEdit').show();
            $('#pilihanTP1Edit').hide();
            $('#labelTP1Edit').hide();
            $('#pilihanTP2Edit').hide();
            $('#labelTP2Edit').hide();
            $('#pilihanPTEdit').val(pilihanTunggal).change();
          } else {
            $('#pilihanPTEdit').hide();
            $('#labelPTEdit').hide();
            $('#pilihanTP1Edit').show();
            $('#labelTP1Edit').show();
            $('#pilihanTP2Edit').show();
            $('#labelTP2Edit').show();
            $('#pilihanTP1Edit').val(pilihanTeam1).change();
            $('#pilihanTP2Edit').val(pilihanTeam2).change();
          }
        });
        
        $('#judulEdit').val(judul);
        $('#pilihanPembimbingEdit').val(pilihanPembimbing).change();
      });
      
      $('#editSubmitData').on('click', function (en) {
          en.preventDefault();
          var submitUrl = '/dashboard/outline/' + resourceId,
          form = $('#editForm'); 
          form.attr('action', submitUrl);
          form.submit();
        });
    });
  </script>   
  <script type="text/javascript">
    $(document).ready(function(){
      //delete
      var $deleteModal = $('#deleteDataModal');
      $('.delete').on('click', function (ev) {
        ev.preventDefault();

        var resourceId = $(this).data('id'),
        $pressedButton = $(this);

        $deleteModal.find('.button-delete').on('click', function (en) {
          en.preventDefault();
          var submitUrl = '/dashboard/outline/' + resourceId,
          form = $('#deleteForm'); 

          form.attr('action', submitUrl);
          form.submit();
        });
      });
    });
  </script>
  <!-- End custom js for this page-->
</body>
</html>