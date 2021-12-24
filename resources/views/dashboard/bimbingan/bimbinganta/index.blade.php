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
                <h3 class="font-weight-bold">Bimbingan TA</h3>
              </div>
            </div>
          </div>
          <div class="row">		
            <!-- TABLE -->
            <div class="table-responsive">
              <table class="table" id="datatable">
                <thead>
                  <tr>
                    <th>Actions</th>
                    <th>Mahasiswa</th>
                    <th>Tanggal Upload</th>
                    <th>Versi</th>
                    <th>Description</th>
                    <th>Alasan Upload</th>
                    <th>Upload File</th>
                    <th>Catatan Pembimbing Tunggal</th>
                    <th>Upload Pembimbing Tunggal</th>
                    <th>Catatan Pembimbing 1</th>
                    <th>Upload Pembimbing 1</th>
                    <th>Catatan Pembimbing 2</th>
                    <th>Upload Pembimbing 2</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bimbinganta as $b)
                    <tr>
                      <td>
                        <a href="#" data-target="#editDataModal" class="edit" data-toggle="modal" 
                          data-id="{{ $b->id }}" 
                          data-tanggal-upload="{{ $b->tanggalUpload }}"
                          data-versi="{{ $b->versi }}"
                          data-description="{{ $b->description }}"
                          data-alasan-upload="{{ $b->alasanUpload }}">
                          <i class="ri-edit-2-line" data-toggle="tooltip" title="Edit"></i>
                        </a>
                        <a href="#" data-target="#deleteDataModal" class="delete" data-toggle="modal" data-id="{{ $b->id }}"><i class="ri-delete-bin-line" data-toggle="tooltip" title="Delete"></i></a>
                      </td>
                      <td>
                        @if (empty(auth()->user()->photo))
                          <img src="{{ asset('img/dashboard/face1.jpg') }}" data-target="#dataFotoModal" data-toggle="modal" alt="Admin" class="rounded-circle" width="150">
                        @else
                          <img src="{!! asset('storage/data_file/'.auth()->user()->photo) !!}" data-target="#dataFotoModal" data-toggle="modal" alt="Admin" class="rounded-circle" height="150"width="150">
                        @endif
                      </td>
                      <td>{{ $b->tanggalUpload }}</td>
                      <td>{{ $b->versi }}</td>
                      <td>{!! nl2br($b->description) !!}</td>
                      <td>{{ $b->alasanUpload }}</td>
                      <td><a href="/dashboard/download/{{ $b->uploadFile }}">{{ $b->uploadFile }}</a></td>
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
                  <form action="/dashboard/bimbingan/bimbinganta" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">						
                      <h4 class="modal-title">Add New Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">		
                      <div class="form-group">
                        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                      </div>		
                      <div class="form-group">
                        <label>Tanggal Upload</label>
                        <input type="date" id="tanggalUpload" name="tanggalUpload" required>
                      </div>
                      <div class="form-group">
                        <label>Versi</label>
                        <input type="text" id="versi" name="versi" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="alasanUpload">Alasan Upload</label>
                        <select name="alasanUpload" id="alasanUpload" required>
                            <option value="LoA">LoA</option>
                            <option value="Paper Final">Paper Final</option>
                            <option value="Pertemuan 1">Pertemuan 1</option>
                            <option value="Pertemuan 2">Pertemuan 2</option>
                            <option value="Pertemuan 3">Pertemuan 3</option>
                            <option value="Pertemuan 4">Pertemuan 4</option>
                        </select>
                      </div>	
                      <div class="form-group">
                        <label for="uploadFile">Upload File</label>
                        <input type="file" class="form-control-file" name="uploadFile" id="uploadFile" required>
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
                        <input type="hidden" name="userId" value="{{ auth()->user()->id }}">
                      </div>					
                      <div class="form-group">
                        <label>Tanggal Upload</label>
                        <input type="date" id="tanggalUploadEdit" name="tanggalUpload" required>
                      </div>
                      <div class="form-group">
                        <label>Versi</label>
                        <input type="text" id="versiEdit" name="versi" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" id="descriptionEdit" class="form-control" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="alasanUpload">Alasan Upload</label>
                        <select name="alasanUpload" id="alasanUploadEdit" required>
                            <option value="LoA">LoA</option>
                            <option value="Paper Final">Paper Final</option>
                            <option value="Pertemuan 1">Pertemuan 1</option>
                            <option value="Pertemuan 2">Pertemuan 2</option>
                            <option value="Pertemuan 3">Pertemuan 3</option>
                            <option value="Pertemuan 4">Pertemuan 4</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="uploadFile">Upload File</label>
                        <input type="file" class="form-control-file" name="uploadFile" id="uploadFile">
                      </div>			
                    </div>
                    <div class="modal-footer">
                      <input type="button" class="button-cancel button-modal" data-dismiss="modal" value="Cancel">
                      <input id="editSubmitData" type="submit" class="button-add button-modal" value="Update">
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
                  <form id="deleteForm" enctype="multipart/form-data">
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
  
    $(document).ready(function(){
      //edit
      var $editModal = $('#editDataModal');
      var resourceId;
      $('.edit').on('click', function (ev) {
        ev.preventDefault();

        var tanggalUpload = $(this).data('tanggalUpload'),
        $pressedButton = $(this);
        var versi = $(this).data('versi'),
        $pressedButton = $(this);
        var description = $(this).data('description'),
        $pressedButton = $(this);
        var alasanUpload = $(this).data('alasanUpload'),
        $pressedButton = $(this);
        resourceId = $(this).data('id'),
        $pressedButton = $(this);

        $('#versiEdit').val(versi);
        $('textarea#descriptionEdit').val(description);
        $('#alasanUploadEdit').val(alasanUpload).change();
        $('#tanggalUploadEdit').datepicker('setDate', tanggalUpload);
      });
      
      $('#editSubmitData').on('click', function (en) {
          en.preventDefault();
          var submitUrl = '/dashboard/bimbingan/bimbinganta/' + resourceId,
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
          var submitUrl = '/dashboard/bimbingan/bimbinganta/delete/' + resourceId,
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