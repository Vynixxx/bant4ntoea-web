<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Bidang Pertanian Desa Bantan Tua</title>
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
  <div class="page-title py-1" data-aos="fade">
    <section class="village-potential py-5">
        <div class="container">
            <!-- Breadcrumbs -->
            <div class="row mb-8 page-title py-1" >
              <div class="col-12 d-flex justify-content-center">
                  <nav class="breadcrumbs" data-aos="fade-up">
                  <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                      <li class="breadcrumb-item">
                      <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Bidang Pertanian</li>
                  </ol>
                  </nav>
              </div>
            </div>
            <!-- End Breadcrumbs -->
            <div class="row justify-content-center text-center" data-aos="fade" data-aos-delay="100">
            <div class="col-lg-8" data-aos="fade" data-aos-delay="100">
                <h2 class="fw-bold mb-4" data-aos="fade">Faktor Penentu Kemajuan Desa</h2>
                <p class="text-muted" data-aos="fade">
                Kemajuan atau kemunduran desa sangat dipengaruhi oleh beberapa faktor berikut:
                </p>
            </div>
            </div>

            <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
            <div class="col-lg-10" data-aos="fade" data-aos-delay="100">
                <div class="list-group list-group-flush shadow-sm border rounded">
                <div class="list-group-item py-4">
                    <h5 class="fw-bold" data-aos="fade">1. Daerah</h5>
                    <p class="mb-0 text-muted" data-aos="fade">
                    Meliputi tanah-tanah produktif dan non-produktif, penggunaannya, lokasi, luas, dan batas-batas desa yang mencakup lingkungan geografis setempat.
                    </p>
                </div>
                <div class="list-group-item py-4">
                    <h5 class="fw-bold" data-aos="fade">2. Penduduk</h5>
                    <p class="mb-0 text-muted" data-aos="fade">
                    Terdiri atas jumlah penduduk, pertambahan, kepadatan, penyebaran, dan mata pencaharian masyarakat.
                    </p>
                </div>
                <div class="list-group-item py-4">
                    <h5 class="fw-bold" data-aos="fade">3. Tata Kehidupan</h5>
                    <p class="mb-0 text-muted" data-aos="fade">
                    Melibatkan pola pergaulan dan ikatan-ikatan sosial antar warga desa yang membangun harmoni di masyarakat.
                    </p>
                </div>
                </div>
            </div>
            </div>

            <div class="row justify-content-center mt-5" data-aos="fade" data-aos-delay="100">
            <div class="col-lg-8 text-center" data-aos="fade" data-aos-delay="100">
                <h2 class="fw-bold mb-4" data-aos="fade">Potensi Desa</h2>
                <p class="text-muted" data-aos="fade">
                Potensi desa mencakup sumber daya alam (fisik) dan sumber daya manusia (non-fisik) yang dapat dimanfaatkan untuk keberlanjutan dan perkembangan desa. 
                </p>
            </div>
            </div>

            <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
            <div class="col-lg-10" data-aos="fade" data-aos-delay="100">
                <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold" data-aos="fade">Pengembangan Pertanian</h5>
                    <p class="mb-0 text-muted" data-aos="fade">
                    Salah satu potensi Desa Bantan Tua adalah <strong>pemanfaatan lahan kosong</strong>. Lahan yang belum digunakan dapat ditanami dan diberdayakan untuk menciptakan sumber mata pencaharian baru bagi masyarakat.
                    </p>
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