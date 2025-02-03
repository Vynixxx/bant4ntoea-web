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
          <tr>
            @foreach ( $agama as $agama )
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
            <th>#</th>
            <th>Nama</th>
            <th>Jumlah Bantuan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Andi</td>
            <td>Rp1.000.000</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Siti</td>
            <td>Rp1.200.000</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Buruh Migran -->
    <h4 data-aos="fade-up" class="my-3">Buruh Migran</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Negara</th>
            <th>Jumlah</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Malaysia</td>
            <td>300</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Arab Saudi</td>
            <td>150</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Contoh untuk kategori Gizi Buruk -->
    <h4 data-aos="fade-up" class="my-3">Gizi Buruk</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Golongan Darah</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Jamkesman</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Kelas Sosial</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Kepala Keluarga</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Kehamilan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Pekerjaan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Pendidikan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Piramida Penduduk</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Program Keluarga Harapan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Raskin</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
        </tbody>
      </table>
    </div>

    <h4 data-aos="fade-up" class="my-3">Status Perkawinan</h4>
    <div class="table-responsive">
      <table class="table table-striped table-bordered" data-aos="fade-up">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Kecamatan</th>
            <th>Jumlah Kasus</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Kecamatan A</td>
            <td>50</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Kecamatan B</td>
            <td>30</td>
          </tr>
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