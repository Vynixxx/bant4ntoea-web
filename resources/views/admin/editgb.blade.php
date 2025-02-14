<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/assetsadmin/img/favicon.png') }}" rel="icon">
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
            <div class="container">
                <div class="container mt-3">
                    @if (Session::get('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Berhasil!</strong> {{ Session::get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if (Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Gagal!</strong> {{ Session::get('failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                                <h5 class="card-title text-center">Edit Gizi Buruk</h5>
                                <form action="/postEditgb/{{ $gb->id }}" method="POST">
                                    @csrf
                                    <div class="form-group mt-4">
                                        <label class="text-secondary mb-2">Usia</label>
                                        <input type="text" class="form-control border border-secondary form-control" name="usia" required value="{{ $gb -> usia }}">
                                        <div class="form-text">Harap memasukkan angka 0 - 9 saja (Tidak perlu menuliskan Tahun)
                                        <span class="text-danger">
                                            @error('usia')
                                              {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Laki-laki</label>
                                        <input type="number" class="form-control border border-secondary form-control" name="lk" required value="{{ $gb -> lk }}">
                                        <span class="text-danger">
                                            @error('lk')
                                              {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Perempuan</label>
                                        <input type="number" class="form-control border border-secondary form-control" name="pr" required value="{{ $gb -> pr }}">
                                        <span class="text-danger">
                                            @error('pr')
                                              {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-5">Edit Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
            </div>
        </div>

  </main><!-- End #main -->
</body>

</html>