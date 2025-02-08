<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kontak Desa Bantan Tua</title>
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
            <li><a href="{{ route('desa') }}">Tentang</a></li>
            <li><a href="{{ route('sdm') }}">Pemerintahan</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('kontak') }}" class="active">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
  <main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="fw-bold mb-4">Kontak</h2>
        <p>Hubungi kami melalui pusat layanan, atau email untuk informasi lebih lanjut mengenai Desa Bantan Tua.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Desa Bantan Tua, Bantan, Bengkalis, 28752</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-6 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>bantantua@desa.id</p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form id="contactForm" action="{{ route('postKontak') }}" method="POST" data-aos="fade-up" data-aos-delay="400">
          @csrf
          <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
            </div>

            <div class="col-md-6">
                <input type="text" id="nohp" class="form-control" name="nohp" placeholder="Nomor Telpon" required>
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
            </div> 

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Judul" required>
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
            </div>

            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-primary shadow-sm" id="submitBtn">Kirim Pesan</button>
            </div>

            </div>
        </form><!-- End Contact Form -->

        <!-- Modal Konfirmasi -->
        <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Konfirmasi Pengiriman</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Apakah anda yakin ingin mengirim pesan ini?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmSend">Ya, Kirim</button>
              </div>
            </div>
          </div>
        </div>

      </div><br><br>
      <div class="col-lg-12">
        <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
          <h2>Lokasi Desa Bantan Tua</h2>
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15952.341569107093!2d102.07639782857879!3d1.5953815999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d3f94367b27c61%3A0x6f77e10d79b2d2e6!2sDesa%20Bantan%20Tua!5e0!3m2!1sid!2sid!4v1707392920827!5m2!1sid!2sid" 
            width="50%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

    </section><!-- /Contact Section -->
    <!-- Modal Notifikasi -->
    @if(Session::has('success'))
    <div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Berhasil!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-success">{{ Session::get('success') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endif
  </main>

  @include('layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  <script>
      document.getElementById("nohp").addEventListener("input", function (e) {
          let value = e.target.value;
          // Hapus karakter non-angka
          value = value.replace(/\D/g, "");
          // Batasi maksimal 13 angka
          if (value.length > 13) {
              value = value.slice(0, 13);
          }
          e.target.value = value;
      });
  </script>
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          var notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
          
          @if(Session::has('success'))
              notifModal.show();
          @endif
      });
  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    const submitBtn = document.getElementById("submitBtn");
    const confirmSend = document.getElementById("confirmSend");
    const contactForm = document.getElementById("contactForm");

    submitBtn.addEventListener("click", function () {
      // Tampilkan modal
      var confirmModal = new bootstrap.Modal(document.getElementById("confirmModal"));
      confirmModal.show();
    });

    confirmSend.addEventListener("click", function () {
      // Kirim form jika dikonfirmasi
      contactForm.submit();
    });
  });
</script>

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