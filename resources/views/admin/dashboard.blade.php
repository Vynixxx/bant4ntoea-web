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
                      <h6>320</h6>
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
                      <h6>320</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Card: Pengaduan -->

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
                      <h6>25</h6>
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
                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/news-1.jpg') }}" alt="">
                  <h4><a href="#">Kegiatan Gotong Royong Bersama</a></h4>
                  <p>Masyarakat desa akan melakukan gotong royong pada Minggu, 29 Januari 2025...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="{{ asset('assets/img/news-2.jpg') }}" alt="">
                  <h4><a href="#">Pengumuman BLT Tahap 2</a></h4>
                  <p>BLT tahap kedua akan dibagikan pada awal Februari, berikut syaratnya...</p>
                </div>
              </div><!-- End Recent News -->

            </div>
          </div><!-- End Berita Desa -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

</body>

</html>
