<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profil UED-SP Desa Bantan Tua</title>
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
    <!-- Page Title -->
    <div class="page-title" data-aos="fade-up">
      <div class="heading">
        <div class="container">
        <!-- Breadcrumbs -->
        <div class="row mb-8 page-title py-1" >
            <div class="col-12 d-flex justify-content-center">
                  <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                      <li class="breadcrumb-item">
                      <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Profil UED-SP</li>
                  </ol>
            </div>
        </div>
        <!-- End Breadcrumbs -->
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Profil UED-SP</h1>
              <p class="mb-0">UED-SP Desa Bantan Tua</p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <section id="usp" class="usp-section">
        <div class="container">
            <p data-aos="fade"><Strong>Unit Simpan Pinjam (USP) Karya Bersama (KABE)</Strong></p>
            <p data-aos="fade"><strong>Alamat:</strong> JL. Lebai Wahid RT 001 RW 003 Dusun Lebai Wahid, Desa Bantan Tua</p>
            <p data-aos="fade">
            Unit Simpan Pinjam (USP) Karya Bersama (KABE) adalah unit usaha dari Bumdesa Payung Harapan yang bergerak di bidang Simpan Pinjam. USP merupakan salah satu unsur koperasi yang penting dan mendasar. USP melayani anggota dan pemanfaat dalam hal berikut:
            </p>
            <ul class="usp-list" data-aos="fade">
            <li>Mencetak bukti transaksi keuangan, pinjaman, angsuran, dan simpanan anggota/pemanfaat.</li>
            <li>Mengatur sistem, prosedur, dan tata tertib pinjaman serta hak akses.</li>
            <li>Melakukan laporan accounting, neraca berjalan, neraca rugi laba, buku besar, dan pembagian SHU.</li>
            <li>Mencatat transaksi pinjaman, angsuran, accounting, dan simpanan.</li>
            <li>Mencatat master data, seperti pos wilayah, nama petugas, dan identitas anggota.</li>
            <li>Mencatat saldo pinjaman dan saldo simpanan per anggota dan seluruh anggota.</li>
            </ul>
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