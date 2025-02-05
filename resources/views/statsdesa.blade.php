<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Statistik Penduduk Desa Bantan Tua</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">

  @include('layouts.header1')
  <main class="main">
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
              <!-- Breadcrumbs -->
              <div class="row mb-0 page-title py-1" >
                <div class="col-12 d-flex justify-content-center">
                    <nav class="breadcrumbs" data-aos="fade-up">
                    <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                        <li class="breadcrumb-item">
                        <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Statistik Desa</li>
                    </ol>
                    </nav>
                </div>
              </div>
            <!-- End Breadcrumbs -->
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8" data-aos="fade-up">
                <h1>Statistik Desa</h1>
                <p class="mb-0">Statistik Kependudukan Desa Bantan Tua</p>
                </div>
            </div>
            </div>
        </div>
    </div><!-- End Page Title -->
  <div class="container my-4">
    <!-- Agama -->
    <h4 data-aos="fade-up" class="my-3">Agama</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Nama Agama</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $agama as $agama )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $agama->nama }}</td>
            <td>{{ $agama->lk }}</td>
            <td>{{ $agama->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <!-- Bantuan Siswa Miskin -->
    <h4 data-aos="fade-up" class="my-3">Bantuan Siswa Miskin</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Jenis Penerima</th>
            <th>Jumlah Penerima</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $bsk as $bsk )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $bsk->nama }}</td>
            <td>{{ $bsk->jml }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <!-- Buruh Migran -->
    <h4 data-aos="fade-up" class="my-3">Buruh Migran</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Jenis Migran</th>
            <th>Jumlah Migran</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $buruh as $buruh )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buruh->nama }}</td>
            <td>{{ $buruh->jml }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <!-- Contoh untuk kategori Gizi Buruk -->
    <h4 data-aos="fade-up" class="my-3">Gizi Buruk</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Usia</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $gb as $gb )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $gb->usia }}</td>
            <td>{{ $gb->lk }}</td>
            <td>{{ $gb->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Golongan Darah</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $gd as $gd )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $gd->usia }}</td>
            <td>{{ $gd->lk }}</td>
            <td>{{ $gd->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Jamkesman</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Menerima Jamkesmas</th>
            <th>Jumlah Keluarga Penerima</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $jamkes as $jamkes )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $jamkes->nama }}</td>
            <td>{{ $jamkes->acc }}</td>
            <td>{{ $jamkes->jmlkp }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Kelas Sosial</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Jumlah Keluarga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $kesos as $kesos )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kesos->nama }}</td>
            <td>{{ $kesos->acc }}</td>
            <td>{{ $kesos->jmlkp }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Kepala Keluarga</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Jumlah Keluarga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $kk as $kk )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kk->nama }}</td>
            <td>{{ $kk->jml }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Kehamilan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Jumlah Kehamilan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $kehamilan as $kehamilan )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kehamilan->nama }}</td>
            <td>{{ $kehamilan->jml }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Pekerjaan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $pekerjaan as $pekerjaan )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pekerjaan->nama }}</td>
            <td>{{ $pekerjaan->lk }}</td>
            <td>{{ $pekerjaan->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Pendidikan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $pendidikan as $pendidikan )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pendidikan->nama }}</td>
            <td>{{ $pendidikan->lk }}</td>
            <td>{{ $pendidikan->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Piramida Penduduk</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kelompok Usia</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $pp as $pp )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pp->usia }}</td>
            <td>{{ $pp->lk }}</td>
            <td>{{ $pp->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Program Keluarga Harapan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Menerima Program</th>
            <th>Jumlah Keluarga Penerima</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $pkh as $pkh )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $pkh->usia }}</td>
            <td>{{ $pkh->acc }}</td>
            <td>{{ $pkh->jmlkp }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Raskin</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Jumlah Keluarga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $raskin as $raskin )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $raskin->nama }}</td>
            <td>{{ $raskin->jml }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Status Perkawinan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Kriteria</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $sk as $sk )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sk->nama }}</td>
            <td>{{ $sk->lk }}</td>
            <td>{{ $sk->pr }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </main>

  @include('layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>