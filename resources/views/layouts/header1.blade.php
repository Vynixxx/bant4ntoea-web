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
          <h1 class="sitename" data-bs-toggle="tooltip" title="Kembali ke Halaman Utama">Bantan Tua</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ route('home') }}" data-bs-toggle="tooltip" title="Beranda Utama">Beranda</a></li>
            <li><a href="{{ route('desa') }}" data-bs-toggle="tooltip" title="Tentang Desa">Tentang</a></li>
            <li><a href="{{ route('sdm') }}" data-bs-toggle="tooltip" title="Struktur Pemerintahan">Pemerintahan</a></li>
            <li><a href="{{ route('faq') }}" data-bs-toggle="tooltip" title="Pertanyaan Seputar Desa">FAQ</a></li>
            <li><a href="{{ route('kontak') }}" data-bs-toggle="tooltip" title="Kontak Desa">Kontak</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
  <!-- tooltip -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    });
  </script>