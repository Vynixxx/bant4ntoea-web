<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/assetsadmin/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/assetsadminassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{ asset('assets/assetsadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/assetsadmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/assetsadmin/css/style.css') }}" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">

  @include('/admin/header');

  <main id="main" class="main">
<!-- Modal Notifikasi -->
<div class="modal fade" id="notifModal" tabindex="-1" aria-labelledby="notifModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notifModalLabel">
                        @if (Session::get('success'))
                            Berhasil!
                        @elseif (Session::get('failed'))
                            Gagal!
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (Session::get('success'))
                        <p class="text-success">{{ Session::get('success') }}</p>
                    @elseif (Session::get('failed'))
                        <p class="text-danger">{{ Session::get('failed') }}</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <section class="section">
      <div class="row">
          <div class="card-body">
            <h5 class="card-title">Agama<a class="btn btn-white" href="{{ route('admin.tambahagama') }}" style="text-decoration: none;">+</a></h5>
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Agama</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($agama as $ag)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $ag->nama }}</td>
                  <td>{{ $ag->lk }}</td>
                  <td>{{ $ag->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editagama/{{ $ag->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deleteagama/{{ $ag->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>

    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Bantuan Siswa Miskin<a class="btn btn-white" href="{{ route('admin.tambahbsk') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Jenis Penerima</th>
                  <th scope="col">Jumlah Penerima</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($bsk as $bsk)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $bsk->nama }}</td>
                  <td>{{ $bsk->jml }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editbantuan/{{ $bsk->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletebantuan/{{ $bsk->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Buruh Migran<a class="btn btn-white" href="{{ route('admin.tambahburuh') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Jenis Migran</th>
                  <th scope="col">Jumlah Migran</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($buruh as $buruh)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $buruh->nama }}</td>
                  <td>{{ $buruh->jml }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editburuh/{{ $buruh->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deleteburuh/{{ $buruh->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Gizi Buruk<a class="btn btn-white" href="{{ route('admin.tambahgb') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Usia</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($gb as $gb)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $gb->usia }} Tahun</td>
                  <td>{{ $gb->lk }}</td>
                  <td>{{ $gb->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editgiziburuk/{{ $gb->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletegiziburuk/{{ $gb->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Golongan Darah<a class="btn btn-white" href="{{ route('admin.tambahgd') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Jenis Golongan Darah</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($gd as $gd)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $gd->nama }}</td>
                  <td>{{ $gd->lk }}</td>
                  <td>{{ $gd->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editgoldar/{{ $gd->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletegoldar/{{ $gd->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Jamkesmas<a class="btn btn-white" href="{{ route('admin.tambahjamkes') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Menerima Jamkesmas</th>
                  <th scope="col">Jumlah Keluarga Penerima</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($jamkes as $jamkes)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $jamkes->nama }}</td>
                  <td>{{ $jamkes->acc }}</td>
                  <td>{{ $jamkes->jmlkp }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editjamkes/{{ $jamkes->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletejamkes/{{ $jamkes->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Kelas Sosial<a class="btn btn-white" href="{{ route('admin.tambahkesos') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Jumlah Keluarga</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($kesos as $kesos)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $kesos->nama }}</td>
                  <td>{{ $kesos->jml }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editkesos/{{ $kesos->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletekesos/{{ $kesos->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Kepala Keluarga<a class="btn btn-white" href="{{ route('admin.tambahkk') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Jumlah Keluarga</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($kk as $kk)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $kk->nama }}</td>
                  <td>{{ $kk->jml }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editkk/{{ $kk->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletekk/{{ $kk->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Kehamilan<a class="btn btn-white" href="{{ route('admin.tambahkehamilan') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Jumlah Kehamilan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($kehamilan as $kehamilan)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $kehamilan->nama }}</td>
                  <td>{{ $kehamilan->jml }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editkehamilan/{{ $kehamilan->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletekehamilan/{{ $kehamilan->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Pekerjaan<a class="btn btn-white" href="{{ route('admin.tambahpekerjaan') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($pekerjaan as $pekerjaan)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $pekerjaan->nama }}</td>
                  <td>{{ $pekerjaan->lk }}</td>
                  <td>{{ $pekerjaan->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editpekerjaan/{{ $pekerjaan->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletepekerjaan/{{ $pekerjaan->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Pendidikan<a class="btn btn-white" href="{{ route('admin.tambahpendidikan') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($pendidikan as $pendidikan)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $pendidikan->nama }}</td>
                  <td>{{ $pendidikan->lk }}</td>
                  <td>{{ $pendidikan->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editpendidikan/{{ $pendidikan->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletependidikan/{{ $pendidikan->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Piramida Penduduk<a class="btn btn-white" href="{{ route('admin.tambahpp') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kelompok Usia</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($pp as $pp)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $pp->usia }}</td>
                  <td>{{ $pp->lk }}</td>
                  <td>{{ $pp->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editpp/{{ $pp->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletepp/{{ $pp->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Program Keluarga Harapan<a class="btn btn-white" href="{{ route('admin.tambahpkh') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Menerima Program</th>
                  <th scope="col">Jumlah Keluarga Penerima</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($pkh as $pkh)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $pkh->nama }}</td>
                  <td>{{ $pkh->acc }}</td>
                  <td>{{ $pkh->jmlkp }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editpkh/{{ $pkh->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletepkh/{{ $pkh->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Raskin<a class="btn btn-white" href="{{ route('admin.tambahraskin') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Jumlah Keluarga</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($raskin as $raskin)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $raskin->nama }}</td>
                  <td>{{ $raskin->jml }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editraskin/{{ $raskin->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deleteraskin/{{ $raskin->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
    <section class="section">
      <div class="row">
          <div class="card-body">
          <h5 class="card-title">Status Perkawinan<a class="btn btn-white" href="{{ route('admin.tambahsk') }}" style="text-decoration: none;">+</a></h5>

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Kriteria</th>
                  <th scope="col">Laki-laki</th>
                  <th scope="col">Perempuan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($sk as $sk)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $sk->nama }}</td>
                  <td>{{ $sk->lk }}</td>
                  <td>{{ $sk->pr }}</td>
                  <td>
                  <a class="btn btn-outline-warning" href="/admin/editsk/{{ $sk->id }}">Edit</a>
                  <a class="btn btn-outline-danger" href="/admin/deletesk/{{ $sk->id }}">Delete</a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
      </div>
    </section>
  </main><!-- End #main -->
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          var notifModal = new bootstrap.Modal(document.getElementById('notifModal'));
          
          @if(Session::get('success') || Session::get('failed'))
              notifModal.show();
          @endif
      });
  </script>
</body>

</html>