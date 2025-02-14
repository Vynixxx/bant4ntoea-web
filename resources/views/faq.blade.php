<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Frequently Asked Questions Desa Bantan Tua</title>
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

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:bantantua@desa.id" data-bs-toggle="tooltip" title="Klik disini untuk menghubungi via email">bantantua@desa.id</a></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://www.facebook.com/desabantantua" class="facebook" data-bs-toggle="tooltip" title="Facebook Desa Bantan Tua"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/desabantantua?igsh=MTF5NWVzajE1Znlsbw==" class="instagram" data-bs-toggle="tooltip" title="Instagram Desa Bantan Tua"><i class="bi bi-instagram"></i></a>
          <a href="mailto:bantantua@desa.id" class="email" data-bs-toggle="tooltip" title="Email Desa Bantan Tua">
              <i class="bi bi-envelope"></i>
          </a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename" data-bs-toggle="tooltip" title="Kembali ke Halaman Utama">Bantan Tua</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
          <li><a href="{{ route('home') }}" data-bs-toggle="tooltip" title="Beranda Utama">Beranda</a></li>
            <li><a href="{{ route('desa') }}" data-bs-toggle="tooltip" title="Tentang Desa">Tentang</a></li>
            <li><a href="{{ route('sdm') }}" data-bs-toggle="tooltip" title="Struktur Pemerintahan">Pemerintahan</a></li>
            <li><a href="{{ route('faq') }}" class="active" data-bs-toggle="tooltip" title="Pertanyaan Seputar Desa">FAQ</a></li>
            <li><a href="{{ route('kontak') }}" data-bs-toggle="tooltip" title="Kontak Desa">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
  <main class="main">

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Beberapa Pertanyaan yang Sering Diajukan.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Apa itu Desa Bantan Tua?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Desa Bantan Tua adalah sebuah desa yang terletak di Kabupaten Bengkalis, Riau. Desa ini dikenal dengan kekayaan budaya lokal dan keindahan alamnya yang menjadi daya tarik bagi wisatawan.            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Apa saja layanan yang tersedia di website Desa Bantan Tua?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Website Desa Bantan Tua menyediakan berbagai informasi penting seperti profil desa, berita terbaru, layanan administrasi seperti permohonan surat, serta informasi terkait kegiatan sosial dan budaya yang ada di desa.            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Bagaimana cara menghubungi Pemerintah Desa Bantan Tua?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Untuk menghubungi Pemerintah Desa Bantan Tua, Anda dapat mengirimkan pesan melalui formulir kontak di website kami, atau menghubungi nomor telepon yang tertera di halaman "Contact."            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Bagaimana cara mendapatkan informasi terbaru tentang Desa Bantan Tua?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Anda dapat mengikuti berita terbaru mengenai Desa Bantan Tua melalui halaman "Berita" di website kami atau mengikuti akun media sosial resmi Desa Bantan Tua untuk pembaruan secara langsung.
Jika ada pertanyaan lain, silakan hubungi kami melalui kontak yang tersedia di website!</p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5 d-flex">
            <i class="bi bi-question-circle"></i>
            <h4>Di mana lokasi Desa Bantan Tua?</h4>
          </div>
          <div class="col-lg-7">
            <p>
            Desa Bantan Tua terletak di Kabupaten Bengkalis, Provinsi Riau. Anda dapat mengakses lokasi ini melalui Google Maps dengan mencari "Desa Bantan Tua." atau <a href="https://maps.app.goo.gl/phQDUkhnhm5Qm1wh6">klik disini</a></p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>

    </section><!-- /Faq Section -->
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
  <!-- tooltip -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    });
  </script>
</body>

</html>