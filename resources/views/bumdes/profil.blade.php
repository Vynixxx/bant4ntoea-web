<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profil BUMDES Bantan Tua</title>
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

    <section class="bumdes py-5">
        <div class="container">
            <!-- Breadcrumbs -->
            <div class="row mb-8 page-title">
              <div class="col-12 d-flex justify-content-center">
                  <nav class="breadcrumbs" data-aos="fade-up">
                  <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                      <li class="breadcrumb-item">
                      <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Profil BUMDES</li>
                  </ol>
                  </nav>
              </div>
            </div>
            <!-- End Breadcrumbs -->
            <!-- Informasi BUMDES -->
            <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="fw-bold mb-4" data-aos="fade">Informasi BUMDES</h2>
                <p class="text-muted mb-5" data-aos="fade" data-aos-delay="100">Berikut adalah informasi terkait Badan Usaha Milik Desa (BUMDES) Desa Bantan Tua.</p>
            </div>
            </div>

            <div class="row mb-4">
            <div class="col-lg-4">
                <h5 class="fw-bold" data-aos="fade" data-aos-delay="200">Nama BUMDES</h5>
                <p class="text-muted" data-aos="fade" data-aos-delay="200">Payung Harapan</p>
            </div>
            <div class="col-lg-4">
                <h5 class="fw-bold" data-aos="fade" data-aos-delay="300">Nomor Sertifikat</h5>
                <p class="text-muted" data-aos="fade" data-aos-delay="300">AHU-00497.AH.01.33.TAHUN.2023</p>
            </div>
            <div class="col-lg-4">
                <h5 class="fw-bold" data-aos="fade" data-aos-delay="400">Alamat</h5>
                <p class="text-muted" data-aos="fade" data-aos-delay="400">Jl. Lebai Wahid, Desa Bantan Tua</p>
            </div>
            </div>

            <!-- Visi dan Misi -->
            <div class="row text-center mt-5" data-aos="fade">
            <div class="col-lg-12">
                <h2 class="fw-bold mb-4">Visi dan Misi BUMDES</h2>
            </div>
            </div>

            <div class="row">
            <!-- Visi -->
            <div class="col-lg-6">
                <h5 class="fw-bold" data-aos="fade" data-aos-delay="100">Visi</h5>
                <p class="text-muted" data-aos="fade" data-aos-delay="100">
                Menjadi BUMDES yang terus berkembang setiap tahunnya, dengan kontribusi nyata dalam pembangunan desa, meningkatkan kesejahteraan masyarakat, dan berperan sebagai sumber Pendapatan Asli Desa (PADes).
                </p>
            </div>
            <!-- Misi -->
            <div class="col-lg-6">
                <h5 class="fw-bold" data-aos="fade" data-aos-delay="200">Misi</h5>
                <ul class="text-muted" data-aos="fade" data-aos-delay="200">
                <li data-aos="fade" data-aos-delay="200">Membangun unit usaha di sektor-sektor potensial sesuai dengan kekayaan alam dan sumber daya desa.</li>
                <li data-aos="fade" data-aos-delay="200">Melibatkan masyarakat dalam setiap kegiatan usaha yang dijalankan.</li>
                <li data-aos="fade" data-aos-delay="200">Bekerja sama secara aktif dengan pemerintah desa untuk keberlanjutan usaha.</li>
                <li data-aos="fade" data-aos-delay="200">Menggali informasi terkait bidang usaha yang dijalankan dari pihak terkait untuk meningkatkan kualitas usaha.</li>
                </ul>
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