<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin - Desa</title>
  <meta content="Dashboard admin untuk pengelolaan data dan informasi desa." name="description">
  <meta content="admin, dashboard, desa, informasi desa" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/assetsadmin/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/assetsadmin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700|Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/assetsadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/css/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  @include('/admin/header')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard Desa</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card: Jumlah Penduduk -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Penduduk</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <!-- Editable Input -->
                      <h6 id="jumlahPenduduk" class="editable" contenteditable="true">{{ $jumlahPenduduk }}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Card: Jumlah Penduduk -->

            <!-- Card: Pengaduan -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card">
                <div class="card-body">
                  <h5 class="card-title">Pengaduan</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-receipt"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahKontak }}</h6> <!-- Menampilkan jumlah pengaduan -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Card: Pengaduan -->

            <!-- Card: Kegiatan Desa -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Kegiatan Desa</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-calendar-event"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $jumlahAgenda }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Card: Kegiatan Desa -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Berita Desa -->
          <div class="card">
              <div class="card-body pb-0">
                  <h5 class="card-title">Berita Desa <span>| Terbaru</span></h5>

                  <div class="news">
                  @foreach ($berita as $item)
                      <div class="post-item clearfix">
                          <img src="{{ asset('/images/' . $item->gambar) }}" alt="{{ $item->judul }}">
                          <h4><a href="{{ route('admin.berita') }}">{{ $item->judul }}</a></h4>
                          <p>{{ Str::limit($item->berita, 100) }}...</p>
                      </div>
                  @endforeach

                  <!-- Tombol Selengkapnya -->
                  <div class="text-center mt-3 mb-3">
                      <a href="{{ route('admin.berita') }}">Selengkapnya</a>
                  </div>
              </div>

              </div>
          </div><!-- End Berita Desa -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
      $("#jumlahPenduduk").on("blur", function() { // Blur = saat klik di luar input
          let jumlah = $(this).text().trim(); // Ambil angka yang diketik
          let jumlahLama = $(this).data("old-value"); // Data lama untuk pengecekan

          // Pastikan jumlah adalah angka
          if (isNaN(jumlah) || jumlah < 0 || jumlah === "") {
              alert("Masukkan angka yang valid!");
              $(this).text(jumlahLama); // Kembalikan ke nilai lama jika tidak valid
              return;
          }

          // Kirim data ke server dengan AJAX
          $.ajax({
              url: "{{ route('update.jumlah.penduduk') }}",
              type: "POST",
              data: {
                  _token: "{{ csrf_token() }}",
                  jumlah: jumlah
              },
              success: function(response) {
                  alert("Jumlah penduduk berhasil diperbarui!");
              },
              error: function() {
                  alert("Gagal memperbarui data!");
                  $(this).text(jumlahLama); // Kembalikan ke nilai lama jika gagal
              }
          });
      });

      // Simpan nilai awal untuk validasi
      $("#jumlahPenduduk").on("focus", function() {
          $(this).data("old-value", $(this).text());
      });
  });
</script>

</body>

</html>
