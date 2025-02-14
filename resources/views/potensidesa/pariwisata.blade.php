<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bidang Pariwisata Desa Bantan Tua</title>
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

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="service-details-page">

  @include('layouts.header1')

  <main class="main">
  <div class="page-title py-1" data-aos="fade-up">
    <section class="village-development py-5">
        <div class="container">
            <!-- Breadcrumbs -->
            <div class="row mb-8 page-title py-1" >
            <div class="col-12 d-flex justify-content-center">
                <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                    <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Bidang Pariwisata</li>
                </ol>
            </div>
            </div>
            <!-- End Breadcrumbs -->
            <!-- Faktor Penentu Kemajuan Desa -->
            <div class="row justify-content-center text-center" data-aos="fade" data-aos-delay="100">
            <div class="col-lg-8" data-aos="fade" data-aos-delay="100">
                <h2 class="fw-bold mb-4">Faktor Penentu Kemajuan Desa</h2>
                <p class="text-muted">
                Kemajuan suatu desa sangat bergantung pada beberapa faktor berikut:
                </p>
            </div>
            </div>
            <div class="row justify-content-center" data-aos="fade">
            <div class="col-lg-10" data-aos="fade" data-aos-delay="100">
                <div class="list-group list-group-flush shadow-sm border rounded">
                <div class="list-group-item py-4">
                    <h5 class="fw-bold">1. Daerah</h5>
                    <p class="mb-0 text-muted">
                    Terdiri atas tanah-tanah produktif dan non-produktif, penggunaannya, lokasi, luas, serta batas-batas desa yang mencerminkan lingkungan geografis setempat.
                    </p>
                </div>
                <div class="list-group-item py-4">
                    <h5 class="fw-bold">2. Penduduk</h5>
                    <p class="mb-0 text-muted">
                    Meliputi jumlah penduduk, tingkat pertumbuhan, kepadatan, penyebaran, serta jenis mata pencaharian yang menjadi pendorong aktivitas ekonomi desa.
                    </p>
                </div>
                <div class="list-group-item py-4">
                    <h5 class="fw-bold">3. Tata Kehidupan</h5>
                    <p class="mb-0 text-muted">
                    Berhubungan dengan pola interaksi sosial dan ikatan-ikatan pergaulan warga desa yang membangun harmoni dan kekompakan masyarakat.
                    </p>
                </div>
                </div>
            </div>
            </div>

            <!-- Potensi Desa -->
            <div class="row justify-content-center mt-5" data-aos="fade">
            <div class="col-lg-8 text-center" data-aos="fade" data-aos-delay="100">
                <h2 class="fw-bold mb-4">Potensi Desa</h2>
                <p class="text-muted">
                Potensi desa meliputi sumber daya alam (fisik) dan sumber daya manusia (non-fisik) yang dapat dimanfaatkan untuk perkembangan desa. Desa Bantan Tua memiliki beberapa bagian yang dapat dikembangkan menjadi objek wisata unggulan.
                </p>
            </div>
            </div>
            <div class="row justify-content-center" data-aos="fade">
            <div class="col-lg-10" data-aos="fade" data-aos-delay="100">
                <div class="card shadow-sm border-0">
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                    <li class="mb-4">
                        <h5 class="fw-bold">1. Pemanfaatan Hutan Mangrove</h5>
                        <p class="text-muted mb-0">
                        Hutan mangrove yang terjaga dapat dikembangkan sebagai destinasi wisata alam yang mendukung pelestarian lingkungan sekaligus menarik wisatawan.
                        </p>
                    </li>
                    <li>
                        <h5 class="fw-bold">2. Pemanfaatan Kolam Bekas Galian Batu Bata</h5>
                        <p class="text-muted mb-0">
                        Kolam bekas galian dapat diubah menjadi area rekreasi air, seperti tempat memancing atau arena kegiatan air lainnya, yang memiliki potensi ekonomi besar.
                        </p>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
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