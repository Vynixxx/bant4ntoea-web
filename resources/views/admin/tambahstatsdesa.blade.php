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
            <div class="container">
                <div class="container mt-3">
                    <!-- @if (Session::get('success'))
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
                    @endif -->
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <div class="card mt-4" style="width: 800px">
                            <div class="card-body">
                              <div  href="" >
                                <h5 class="card-title text-center">Tambah Statistik Desa</h5>
                                <form action="" method="POST" enctype="multipart/form-data" >
                                    <!-- @csrf -->
                                    <div class="form-group mt-4">
                                        <label class="text-secondary mb-2">Agama</label>
                                        <input class="form-control border border-secondary form-control" name="agama" required value="" type="text" >
                                        <!-- <span class="text-danger">
                                            @error('agama')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Bantuan Siswa Miskin</label>
                                        <input type="date" class="form-control border border-secondary form-control" name="baskin" value="">
                                        <!-- <span class="text-danger">
                                            @error('baskin')
                                            {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Buruh Migran</label>
                                        <input class="form-control border border-secondary form-control" name="bumig" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('bumig')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Gizi Buruk</label>
                                        <input class="form-control border border-secondary form-control" name="gizruk" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('gizruk')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Golongan Darah</label>
                                        <input class="form-control border border-secondary form-control" name="goldar" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('goldar')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Jamkesman</label>
                                        <input class="form-control border border-secondary form-control" name="jasman" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('jasman')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Kelas Sosial</label>
                                        <input class="form-control border border-secondary form-control" name="kesos" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('kesos')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Kepala Keluarga</label>
                                        <input class="form-control border border-secondary form-control" name="kk" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('kk')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Kehamilan</label>
                                        <input class="form-control border border-secondary form-control" name="hamil" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('hamil')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Pekerjaan</label>
                                        <input class="form-control border border-secondary form-control" name="kerja" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('kerja')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Pendidikan</label>
                                        <input class="form-control border border-secondary form-control" name="didik" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('didik')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Piramida Penduduk</label>
                                        <input class="form-control border border-secondary form-control" name="pp" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('pp')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Program Keluarga Harapan</label>
                                        <input class="form-control border border-secondary form-control" name="pkh" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('pkh')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Raskin</label>
                                        <input class="form-control border border-secondary form-control" name="raskin" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('raskin')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Status Perkawinan</label>
                                        <input class="form-control border border-secondary form-control" name="kawin" required value="" type="text">
                                        <!-- <span class="text-danger">
                                            @error('kawin')
                                              {{ $message }}
                                            @enderror
                                        </span> -->
                                    </div><br>
                                    <button type="submit" class="btn btn-success mt-5" ">Tambah Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><br><br><br><br>
            </div>
        </div>

  </main><!-- End #main -->
  @include('/admin/footer')
</body>

</html>