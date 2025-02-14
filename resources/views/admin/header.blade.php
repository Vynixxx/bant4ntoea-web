<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div>

<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item dropdown pe-3">
    <div class="container">
      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-person-circle fs-4" data-bs-toggle="tooltip" title="Profil Anda"></i>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
        <li class="dropdown-header">
          <h6>Admin Desa Bantan</h6>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profil') }}">
            <i class="bi bi-person"></i>
            <span>My Profile</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
        <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary w-100">Keluar</button>
          </a>
         </form>
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </div>
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-heading">Pages</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.agenda') }}">
      <i class="bi bi-archive"></i>
      <span>Agenda</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.berita') }}">
      <i class="bi bi-file-earmark"></i>
      <span>Berita</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.galerikegiatan') }}">
      <i class="bi bi-journal-plus"></i>
      <span>Kegiatan</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.kepegawaian') }}">
      <i class="bi bi-person"></i>
      <span>Kepegawaian</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.pengaduan') }}">
      <i class="bi bi-receipt"></i>
      <span>Pengaduan</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('admin.statsdesa') }}">
      <i class="bi bi-bar-chart-fill"></i>
      <span>Statistik Desa</span>
    </a>
  </li>

</ul>

</aside><!-- End Sidebar-->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/assetsadmin/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/assetsadmin/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/assetsadmin/js/main.js') }}"></script>