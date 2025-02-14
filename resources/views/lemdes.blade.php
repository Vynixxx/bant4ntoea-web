<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Berita Desa Bantan Tua</title>
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

  <div class="container py-5">
       <!-- Breadcrumbs -->
       <div class="row mb-8 page-title py-1" data-aos="fade-up">
            <div class="col-12 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                    <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Lembaga Desa</li>
                </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4" data-aos="fade-up">
                    <h2 class="text-center mb-4">Informasi Kelembagaan</h2>
                    <table class="table table-striped">
                        <tbody>
                            <tr><td>Jumlah Perangkat</td><td>32 Orang</td></tr>
                            <tr><td>Dusun</td><td>4 Buah</td></tr>
                            <tr><td>Rukun Warga</td><td>6 Orang</td></tr>
                            <tr><td>Rukun Tetangga</td><td>21 Orang</td></tr>
                            <tr><td>BPD</td><td>7 Orang</td></tr>
                            <tr><td>LKMD</td><td>9 Orang</td></tr>
                            <tr><td>LAMR</td><td>18 Orang</td></tr>
                            <tr><td>BUMDES</td><td>15 Orang</td></tr>
                            <tr><td>UED - SP</td><td>6 Orang</td></tr>
                        </tbody>
                    </table><br><br>
                    
                    <h3 class="section-title">Kelembagaan Kemasyarakatan</h3>
                    <ul class="list-group">
                        <li class="list-group-item">Organisasi perempuan (PKK): 1 Kelompok</li>
                        <li class="list-group-item">Organisasi pemuda (Karang Taruna): 1 Kelompok</li>
                        <li class="list-group-item">Kelompok gotong royong: 4 Kelompok</li>
                        <li class="list-group-item">Lembaga adat (LAMR): 1 Kelompok</li>
                        <li class="list-group-item">Lembaga Pengembangan Tilawatil Quran: 1 Kelompok</li>
                    </ul>
                </div>
            </div>
        </div>
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