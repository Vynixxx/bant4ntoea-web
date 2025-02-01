<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Website Desa Bantan Tua</title>
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

  @include('layouts.header')
  <main class="main">

    <!-- Hero Section -->
    <section id="beranda" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade bg-body-tertiary" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img class="position-absolute top-50 start-50 translate-middle" src="assets/img/hero-carousel/hero-carousel-1.jpg" alt="" style="width: 100%; height: auto; object-fit: cover;">
          <div class="carousel-container">
            <h2 class="text-center mt-2">Selamat Datang di Website Desa Bantan Tua</h2>
            <p>Temukan informasi lengkap seputar Desa Bantan Tua di website resmi kami.</p>
            <a href="#about" class="btn-get-started">Jelajahi disini</a>
          </div>
        </div><!-- End Carousel Item -->

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Desa</h2>
        <p>Informasi Mengenai Desa Bantan Tua</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3>Desa Bantan Tua: Sejarah, Potensi, dan Budaya</h3>
            <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="Desa Bantan Tua">
            <p>Desa Bantan Tua terletak di Kecamatan Bantan, Kabupaten Bengkalis, Provinsi Riau. Desa ini memiliki keindahan alam yang memukau serta kaya akan budaya lokal. Kehidupan masyarakatnya yang mayoritas bekerja di bidang pertanian dan perikanan menjadikan desa ini sebagai pusat potensi ekonomi lokal.</p>
            <p>Dengan wilayah yang subur dan dekat dengan kawasan pesisir, Desa Bantan Tua memiliki banyak peluang untuk mengembangkan sektor wisata berbasis budaya dan alam. Kearifan lokal yang diwariskan turun-temurun menjadikan desa ini sebagai tempat yang menarik untuk dikunjungi dan dipelajari.</p>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                “Desa Bantan Tua adalah perpaduan antara keindahan alam, kearifan lokal, dan potensi pembangunan yang berkelanjutan.”
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> <span>Memiliki sektor pertanian dan perikanan yang berkembang.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Kaya akan budaya lokal yang diwariskan dari generasi ke generasi.</span></li>
                <li><i class="bi bi-check-circle-fill"></i> <span>Potensi wisata berbasis alam dan budaya yang masih terus digali dan dikembangkan.</span></li>
              </ul>
              <p>
                Desa ini terus berupaya meningkatkan kualitas hidup masyarakatnya melalui pengembangan infrastruktur, pemberdayaan ekonomi lokal, serta promosi pariwisata. Sinergi antara pemerintah dan masyarakat menjadi kunci utama dalam mencapai kemajuan desa.
              </p>

              <div class="position-relative mt-4">
                <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="Keindahan Desa Bantan Tua">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
              </div>
            </div>
          </div>
        </div>

      </div>

      </section><!-- /About Section -->

    <!-- Berita Terkini Section -->
    <section id="berita-terkini" class="why-us section">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-12 d-flex justify-content-between align-items-center" data-aos="fade-up">
                    <h3>Berita Terkini</h3>
                    <p class="mb-0"><a href="{{ route('news') }}">Selengkapnya</a></p>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <!-- Gambar Berita -->
                        <img src="" alt="Gambar Berita" class="img-fluid mb-3" style="width:100%; max-width:300px;">

                        <h4><a href="" class="stretched-link"></a></h4>
                        <p></p>
                        <small class="text-muted">Tanggal: | Tag: </small>
                    </div>
                </div><!-- Card Item -->
            </div>
        </div>
    </section><!-- /Berita Terkini Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-geo-alt"></i>
          <div class="stats-item">
            <span class="counter" data-end="2.731,00" data-unit=" Ha">0</span>
            <p>Luas Wilayah</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-people"></i>
          <div class="stats-item">
            <span class="counter" data-end="521" data-unit="">0</span>
            <p>Jumlah Penduduk</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center">
          <i class="bi bi-emoji-smile"></i>
          <div class="stats-item">
            <span class="counter" data-end="98.35" data-unit=" Jiwa/km">0</span>
            <p>Kepadatan Penduduk</p>
          </div>
        </div>


        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Card</li>
            <li data-filter=".filter-branding">Web</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 1</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 2</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Product 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Branding 3</h4>
                <p>Lorem ipsum, dolor sit</p>
                <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="pemerintahan" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Struktur Organisasi</h2>
        <p>Struktur Organisasi Desa Bantan Tua.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Syaiful Anwar, S. Sos</h4>
                <span>Kepala Desa</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="600">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Hubungi kami melalui telepon, pusat layanan, atau email untuk informasi lebih lanjut mengenai Desa Bantan Tua.</p>
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

        <form action="{{ route('postKontak') }}" method="POST" data-aos="fade-up" data-aos-delay="400">
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
                <button type="submit" class="btn btn-primary shadow-sm">Kirim Pesan</button>
            </div>

            </div>
        </form><!-- End Contact Form -->

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
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- word counter -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const counters = document.querySelectorAll(".counter");

      counters.forEach(counter => {
        let endValue = parseFloat(counter.getAttribute("data-end")); // Ambil angka akhir
        let unit = counter.getAttribute("data-unit"); // Ambil satuan (jika ada)
        let duration = 1000; // Durasi animasi dalam milidetik
        let startTime = null;

        function animateCounter(timestamp) {
          if (!startTime) startTime = timestamp;
          let progress = (timestamp - startTime) / duration;
          let currentValue = Math.min(progress * endValue, endValue).toFixed(2); // Format desimal
          
          counter.textContent = currentValue + unit; // Tambahkan satuan
          if (progress < 1) {
            requestAnimationFrame(animateCounter);
          } else {
            counter.textContent = endValue.toLocaleString() + unit; // Format angka akhir
          }
        }

        requestAnimationFrame(animateCounter);
      });
    });
  </script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>