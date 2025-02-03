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
              <h5 class="card-title text-center">Edit Kegiatan</h5>
              <form action="/postEditKepegawaian/{{ $kepegawaian->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="text-secondary mb-2">Nama Pegawai</label>
                        <input type="text" class="form-control border border-secondary" name="nama" required 
                            value="{{ old('nama', $kepegawaian->nama) }}">
                        <span class="text-danger">@error('nama') {{ $message }} @enderror</span>
                    </div><br>

                    <div class="form-group mt-1">
                        <label class="text-secondary mb-2">NIP</label>
                        <input type="text" class="form-control border border-secondary" name="nip" required 
                            value="{{ old('nip', $kepegawaian->nip) }}" pattern="[0-9]*" inputmode="numeric">
                        <span class="text-danger">@error('nip') {{ $message }} @enderror</span>
                    </div><br>

                    <div class="form-group mt-1">
                        <label class="text-secondary mb-2">Asal</label>
                        <input type="text" class="form-control border border-secondary" name="asal" required 
                            value="{{ old('asal', $kepegawaian->asal) }}">
                        <span class="text-danger">@error('asal') {{ $message }} @enderror</span>
                    </div><br>

                    <div class="form-group mt-1">
                        <label class="text-secondary mb-2">Tanggal Lahir</label>
                        <input type="date" class="form-control border border-secondary" name="ttl" required 
                            value="{{ old('ttl', $kepegawaian->ttl) }}">
                        <span class="text-danger">@error('ttl') {{ $message }} @enderror</span>
                    </div><br>

                    <div class="form-group mt-1">
                        <label class="text-secondary mb-2">Jabatan</label>
                        <input type="text" class="form-control border border-secondary" name="jabatan" required 
                            value="{{ old('jabatan', $kepegawaian->jabatan) }}">
                        <span class="text-danger">@error('jabatan') {{ $message }} @enderror</span>
                    </div><br>

                    <div class="form-group mt-1">
                        <label class="text-secondary mb-2">Pendidikan</label>
                        <input type="text" class="form-control border border-secondary" name="pend" required 
                            value="{{ old('pend', $kepegawaian->pend) }}">
                        <span class="text-danger">@error('pend') {{ $message }} @enderror</span>
                    </div><br>

                    <div class="form-group mt-1">
                        <label class="text-secondary mb-2">Gambar</label>
                        <input type="file" class="form-control border border-secondary" name="gambar" accept="image/*">
                        <small>Biarkan kosong jika tidak ingin mengubah gambar.</small>
                        <span class="text-danger">@error('gambar') {{ $message }} @enderror</span>
                    </div><br>

                    <button type="submit" class="btn btn-success mt-5">Simpan Perubahan</button>
                </form>
            </div>
          </div>
        </div>
      </div><br><br><br><br>
    </div>
  </main><!-- End #main -->
    <script>
    document.getElementById('judul').addEventListener('input', function () {
        const judul = this.value;
        const slug = judul.toLowerCase()
                            .replace(/[^a-z0-9 -]/g, '')  // Hapus karakter non-alfanumerik
                            .replace(/\s+/g, '-')         // Ganti spasi dengan tanda hubung
                            .replace(/-+/g, '-');          // Hindari tanda hubung berulang
        document.getElementById('slug').value = slug;
    });
    </script>

</body>

</html>
