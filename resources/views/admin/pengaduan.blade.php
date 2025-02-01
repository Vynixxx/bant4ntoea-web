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
    <section class="section">
      <div class="row">
          <div class="card-body">
            <h5 class="card-title">Daftar Pengaduan</h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nomor HP</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Isi</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($kontak as $kp)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $kp->name }}</td>
                  <td>{{ $kp->nohp }}</td>
                  <td>{{ $kp->alamat }}</td>
                  <td>{{ $kp->subject }}</td>
                  <td>{{ $kp->message }}</td>
                  <td>                   
                    <a class="btn btn-outline-primary" href="/admin/selengkapnya/{{ $kp->id }}">Selengkapnya</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>

  </main><!-- End #main -->
  @include('/admin/footer')
</body>

</html>