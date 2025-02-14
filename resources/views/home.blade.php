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
            <a href="#about" class="btn-get-started" data-bs-toggle="tooltip" title="Klik di sini untuk lebih detail">Jelajahi disini</a>
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
            <!-- Peta Google Maps -->
            <div class="rounded-4 mb-4 overflow-hidden" style="height: 450px;">
              <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15952.341569107093!2d102.07639782857879!3d1.5953815999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d3f94367b27c61%3A0x6f77e10d79b2d2e6!2sDesa%20Bantan%20Tua!5e0!3m2!1sid!2sid!4v1707392920827!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                data-bs-toggle="tooltip" title="Peta Desa Bantan Tua">
              </iframe>
            </div>
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
                <img src="assets/img/tentang.jpg" class="img-fluid rounded-4" alt="Pemerintahan Desa Bantan Tua">
                <a href="https://youtu.be/bDB8_twvRw8?si=dKG2dX_199Ecge9i " class="glightbox pulsating-play-btn"></a>
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
                    <p class="mb-0"><a href="{{ route('news') }}" data-bs-toggle="tooltip" title="Berita Selengkapnya">Selengkapnya</a></p>
                </div>
            </div><br>

            <div class="row gy-4">
              @foreach ($berita->take(3) as $b)
                <div class="col-12 col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="card shadow-sm border-0 h-100" data-bs-toggle="tooltip" title="{{ $b->judul }}">
                    <img src="{{ asset('/images/' . $b->gambar) }}" alt="Gambar Berita" class="card-img-top img-fluid" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">
                        <a href="{{ route('detailBerita', ['slug' => $b->slug]) }}" class="stretched-link text-decoration-none text-dark">
                          {{ $b->judul }}
                        </a>
                      </h5>
                      <p class="card-text">{{ Str::limit($b->berita, 100, '...') }}</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                      <small class="text-muted">Tanggal: {{ $b->tanggal }} | Tag: {{ $b->tag }}</small>
                    </div>
                  </div>
                </div><!-- End Card Item -->
              @endforeach
            </div><!-- End Row -->

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
                <span id="jumlahPenduduk" class="counter" data-end="{{ $jumlahPenduduk }}" data-unit="">{{ $jumlahPenduduk }}</span>
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

    <!-- Team Section -->
    <section id="pemerintahan" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Struktur Organisasi</h2>
        <p>Struktur Organisasi Desa Bantan Tua.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 justify-content-center">
            @foreach ($kepegawaian->take(3) as $index => $kp)
                <div class="col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="{{ 200 * ($index + 1) }}">
                    <div class="team-member text-center">
                        <div class="member-img" data-bs-toggle="tooltip" title="{{ $kp->jabatan }}">
                            <img src="{{ asset('/images/' . $kp->gambar) }}" class="img-fluid rounded-3" style="object-fit: cover; width: 100%; height: 500px;" alt="{{ $kp->nama }}">
                        </div>
                        <div class="member-info">
                            <h4>{{ $kp->nama }}</h4>
                            <span>{{ $kp->jabatan }}</span>
                        </div>
                    </div>
                </div><!-- End Team Member -->
            @endforeach
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
            Desa Bantan Tua terletak di Kabupaten Bengkalis, Provinsi Riau. Anda dapat mengakses lokasi ini melalui Google Maps dengan mencari "Desa Bantan Tua." atau <a href="https://maps.app.goo.gl/phQDUkhnhm5Qm1wh6" data-bs-toggle="tooltip" title="Peta Desa Bantan Tua">klik disini</a></p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
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
                <span class="text-danger">
                  @error('name')
                    {{ 'kolom ini harus diisi' }}
                  @enderror
                </span>
            </div>

            <div class="col-md-6">
                <input type="text" id="nohp" class="form-control" name="nohp" placeholder="Nomor Telpon" required>
                <span class="text-danger">
                  @error('nohp')
                    {{ 'kolom ini harus diisi' }}
                  @enderror
                </span>
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                <span class="text-danger">
                  @error('alamat')
                    {{ 'kolom ini harus diisi' }}
                  @enderror
                </span>
            </div> 

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Judul" required>
                <span class="text-danger">
                  @error('subject')
                    {{ 'kolom ini harus diisi' }}
                  @enderror
                </span>
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
                <span class="text-danger">
                  @error('message')
                    {{ 'kolom ini harus diisi' }}
                  @enderror
                </span>
            </div>

            <div class="col-md-12 text-center">
                <button type="button" id="submitBtn" class="btn btn-primary shadow-sm">Kirim Pesan</button>
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
  <!-- tooltip -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
      });
    });
  </script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>