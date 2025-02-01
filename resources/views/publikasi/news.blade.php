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

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- Breadcrumbs -->
        <div class="row mb-8 page-title py-1" >
            <div class="col-12 d-flex justify-content-center">
                <nav class="breadcrumbs" data-aos="fade-up">
                  <ol class="breadcrumb bg-transparent px-3 py-2 rounded-3">
                      <li class="breadcrumb-item">
                      <a href="{{ route('home') }}" class="text-decoration-none">Beranda</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">Berita Terkini</li>
                  </ol>
                </nav>
            </div>
        </div>
        <!-- End Breadcrumbs -->
        <h2>Berita Terkini</h2>
      </div><!-- End Section Title -->
      <div class="container">
      <div class="row gy-4">
        @foreach ($berita as $berita)
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
            <div class="card-item border rounded-3 shadow-sm p-3">
              <img src="{{ asset('/images/' . $berita->gambar) }}" alt="Gambar Berita" style="width: 100%; height: 200px; object-fit: cover;" class="mb-2 rounded">
              <h4><a href="{{ route('detailBerita', ['slug' => $berita->slug]) }}" class="stretched-link text-decoration-none text-dark">{{ $berita->judul }}</a></h4>
              <p>{{ Str::limit($berita->berita, 100, '...') }}</p>
              <small class="text-muted">{{ $berita->tanggal }} | {{ $berita->tag }}</small>
            </div>
          </div>
        @endforeach
      </div>
    </div>


    </section><!-- /Why Us Section -->

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