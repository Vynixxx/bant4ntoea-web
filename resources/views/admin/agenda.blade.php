<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/assetsadminassets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/assetsadminassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('assets/assetsadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/assetsadmin/css/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  @include('/admin/header');

  <main id="main" class="main">
  <!-- Modal Notifikasi -->
  <div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="notifModalLabel">
                      @if (Session::get('success'))
                          Berhasil!
                      @elseif (Session::get('failed'))
                          Gagal!
                      @endif
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  @if (Session::get('success'))
                      <p class="text-success">{{ Session::get('success') }}</p>
                  @elseif (Session::get('failed'))
                      <p class="text-danger">{{ Session::get('failed') }}</p>
                  @endif
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
          </div>
      </div>
  </div>

    <section class="section">
      <div class="row">
          <div class="card-body">
            <h5 class="card-title">Daftar Agenda</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Judul Agenda</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($agenda as $agenda)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $agenda->judul }}</td>
                  <td>{{ $agenda->tanggal }}</td>
                  <td>{{ $agenda->keterangan }}</td>
                  <td>
                    <a class="btn btn-outline-warning" href="/admin/editAgenda/{{ $agenda->id }}">Edit</a>
                    <a class="btn btn-outline-danger" href="/admin/deleteAgenda/{{ $agenda->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <div>
                <a class="btn btn-success" href="{{ route('admin.tambahagenda') }}" style="text-decoration: none;">Tambah Data +</a>    
            </div>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>

  </main><!-- End main -->
    <script>
      document.addEventListener("DOMContentLoaded", function () {
          var notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
          
          @if(Session::get('success') || Session::get('failed'))
              notifModal.show();
          @endif
      });
  </script>

  @include('/admin/footer')
</body>

</html>