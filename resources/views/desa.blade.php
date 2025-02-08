<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tentang Desa Bantan Tua</title>
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
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:bantantua@desa.id">bantantua@desa.id</a></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="https://www.facebook.com/desabantantua" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/desabantantua?igsh=MTF5NWVzajE1Znlsbw==" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="mailto:bantantua@desa.id" class="email">
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
          <h1 class="sitename">Bantan Tua</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ route('desa') }}" class="active">Tentang</a></li>
            <li><a href="{{ route('sdm') }}">Pemerintahan</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('kontak') }}">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
  <main class="main">

  <section class="bg-gray-100 py-12">
      <div class="container mx-auto px-6 lg:px-12">
          <!-- Breadcrumbs -->
          <div class="row mb-8 page-title py-1">
              <div class="col-12 d-flex justify-content-center">
                  <nav class="breadcrumbs" data-aos="fade-up">
                      <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                          <li class="breadcrumb-item">
                              <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                          </li>
                          <li class="breadcrumb-item active" aria-current="page">Potensi Desa</li>
                      </ol>
                  </nav>
              </div>
          </div>
          <!-- End Breadcrumbs -->
          <div class="text-center mb-10">
              <h2 class="fw-bold mb-4" data-aos="fade-up" data-aos-delay="100">
                  Memahami Potensi dan Karakteristik Desa
              </h2>
              <p class="text-lg text-gray-600 mt-4" data-aos="fade-up" data-aos-delay="100">
                  Desa bukan hanya sekadar tempat tinggal. Desa adalah pusat kehidupan yang penuh dengan potensi, tradisi, dan keunikan tersendiri.
              </p>
          </div>

          <!-- Tambahkan kalimat baru di sini -->
          <div class="p-6 bg-white rounded-2xl mb-6">
              <h3 class="text-xl font-semibold text-gray-700" data-aos="fade-up" data-aos-delay="200">
                  Sejarah Desa Bantan Tua
              </h3>
              <p class="mt-4 text-gray-600" data-aos="fade-up" data-aos-delay="200">
                  Desa Bantan Tua adalah desa hasil pemekaran dari keputusan pemerintah yang kembali memberi kesempatan bagi semua desa di Kabupaten Bengkalis untuk mengajukan permohonan kepada pemerintah sesuai prosedur untuk dimekarkan tetapi sesuai dengan luas wilayah dan jumlah penduduknya pada tahun 2014 lalu. Kemudian, Desa Bantan Tua dimekarkan menjadi 2(dua) desa yaitu Desa Induk tetap bernama Desa Bantan Tua dan Desa Pemekaran bernama Desa Pasiran berkat perjuangan para tokoh masyarakat Pasiran Desa Bantan Tua ketika itu.
              </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-10">
              <!-- Left Column -->
              <div class="space-y-6">
                  <div class="p-6 bg-white rounded-2xl">
                      <h3 class="text-xl font-semibold text-gray-700" data-aos="fade-up" data-aos-delay="200">
                          Apa Itu Desa?
                      </h3>
                      <p class="mt-4 text-gray-600" data-aos="fade-up" data-aos-delay="200">
                          Desa sering diasosiasikan dengan istilah kampung, yaitu wilayah yang jauh dari keramaian kota, dihuni oleh masyarakat yang sebagian besar mata pencahariannya adalah pertanian. Menurut Daldjoeni (2003), desa adalah pemukiman manusia di luar kota dengan kehidupan agraris sebagai inti.
                      </p>
                  </div>

                  <div class="p-6 bg-white rounded-2xl">
                      <h3 class="text-xl font-semibold text-gray-700" data-aos="fade-up" data-aos-delay="300">
                          Definisi Berdasarkan UU No. 6 Tahun 2014
                      </h3>
                      <p class="mt-4 text-gray-600" data-aos="fade-up" data-aos-delay="300">
                          Desa adalah kesatuan masyarakat hukum dengan batas wilayah tertentu yang memiliki kewenangan mengatur urusan pemerintahan, kepentingan masyarakat, dan hak tradisional yang diakui dalam sistem pemerintahan Indonesia.
                      </p>
                  </div>
              </div>

              <!-- Right Column -->
              <div class="space-y-6">
                  <div class="p-6 bg-white rounded-2xl">
                      <h3 class="text-xl font-semibold text-gray-700" data-aos="fade-up" data-aos-delay="300">
                          Ciri-Ciri Desa
                      </h3>
                      <ul class="list-disc list-inside mt-4 text-gray-600" data-aos="fade-up" data-aos-delay="300">
                          <li>Perbandingan lahan dengan manusia cukup besar.</li>
                          <li>Pekerjaan utama masyarakat adalah pertanian.</li>
                          <li>Hubungan antarwarga masih sangat akrab.</li>
                          <li>Tradisi dan adat istiadat sangat dijunjung tinggi.</li>
                      </ul>
                  </div>

                  <div class="p-6 bg-white rounded-2xl">
                      <h3 class="text-xl font-semibold text-gray-700" data-aos="fade-up" data-aos-delay="300">
                          Unsur-Unsur Desa
                      </h3>
                      <ol class="list-decimal list-inside mt-4 text-gray-600" data-aos="fade-up" data-aos-delay="300">
                          <li>
                              <strong>Daerah:</strong> Meliputi tanah produktif dan non-produktif, serta penggunaannya.
                          </li>
                          <li>
                              <strong>Penduduk:</strong> Jumlah, kepadatan, dan mata pencaharian masyarakat.
                          </li>
                          <li>
                              <strong>Tata Kehidupan:</strong> Pola pergaulan yang memberikan harmoni hidup bersama.
                          </li>
                      </ol>
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