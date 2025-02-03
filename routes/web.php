<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pageController;
use App\Http\Middleware\IsAdmin;
use App\Models\berita;
use App\Models\agama;
use App\Models\agenda;
use App\Models\penduduk;
use App\Models\galerikegiatan;
use App\Models\kepegawaian;


Route::get('/', function () {
    $berita = berita::orderBy('created_at', 'DESC')->get();
    $jumlahPenduduk = penduduk::where('key', 'jumlah_penduduk')->value('value'); // Ambil jumlah penduduk dari tabel Setting
    $kepegawaian = kepegawaian::get(); 

    return view('home' , compact('berita', 'jumlahPenduduk', 'kepegawaian'));
})->name('home');

Route::get('news', function () {
    $berita = berita::orderBy('created_at', 'DESC')->get();
    return view('/publikasi/news' , compact('berita'));
})->name('news');
Route::get('/news/{slug}', [pageController::class, 'detailBerita'])->name('detailBerita');

Route::get('/visimisi', function () {
    return view('vm');
})->name('vm');
Route::get('/sejarah', function () {
    return view('sejarah');
})->name('sejarah');
Route::view('/strukturorganisasi', 'so')->name('so');
Route::get('/statsdesa', function () {
    $agama = agama::get();
    return view('statsdesa' , compact('agama'));
})->name('sd');
Route::view('/kontak', 'kontak')->name('kontak');
Route::post('/postkontak', [pageController::class, 'kontak'])->name('postKontak');
Route::view('/karakteristikdesa', 'desa')->name('desa');
// Route::view('/galeri', '/publikasi/galeri')->name('galeri');
Route::get('/galeri', function () {
    $galerikegiatan = galerikegiatan::orderBy('created_at', 'DESC')->get();
    return view('/publikasi/galeri' , compact('galerikegiatan'));
})->name('galeri');
Route::get('/galeri/{slug}', [pageController::class, 'detailGaleri'])->name('detailGaleri');

// Route::view('/agenda', '/publikasi/agenda')->name('agenda');
Route::get('/agenda', function () {
    $agenda = agenda::get();
    return view('/publikasi/agenda' , compact('agenda'));
})->name('agenda');
Route::get('/agenda/{slug}', [pageController::class, 'detailAgenda'])->name('detailAgenda');
Route::get('/sumberdayamanusia', function () {
    $kepegawaian = kepegawaian::get();
    return view('sdm' , compact('kepegawaian'));
})->name('sdm');
Route::view('/lembagadesa', 'lemdes')->name('lemdes');
Route::view('/faq', 'faq')->name('faq');


// Potensi Desa
Route::view('/bidpertanian', 'potensidesa/pertanian')->name('pertanian');
Route::view('/bidpariwisata', 'potensidesa/pariwisata')->name('pariwisata');
Route::view('/bidindustri', 'potensidesa/industri')->name('industri');
Route::view('/bidperikanan', 'potensidesa/perikanan')->name('perikanan');

// Bumdes
Route::view('/profilbumdes', 'bumdes/profil')->name('bumdesprofil');
Route::view('/direksibumdes', 'bumdes/direksi')->name('bumdesdireksi');
Route::view('/usahabumdes', 'bumdes/usaha')->name('bumdesusaha');

// UED-SP
Route::view('/profiluedsp', 'uedsp/profil')->name('uedspprofil');
Route::view('/direksiuedsp', 'uedsp/direksi')->name('uedspdireksi');
Route::view('/informasiuedsp', 'uedsp/informasi')->name('uedspinformasi');

// admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/postLogin', [AdminController::class, 'postLogin'])->name('admin.postLogin');

Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/admin/logout', function() {
    abort(404);
});
Route::get('/tambahAgenda', function() {
    abort(404);
});
Route::get('/tambahBerita', function() {
    abort(404);
});
Route::get('admin/postLogin', function() {
    abort(404);
});

// Route::middleware(['auth', 'admin'])->group(function () {   
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });

//view admin
Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/agenda', [AdminController::class,'adminAgenda'])->name('admin.agenda');
    Route::get('/admin/berita', [AdminController::class,'adminBerita'])->name('admin.berita');
    Route::get('/admin/galerikegiatan', [AdminController::class,'admingalerikegiatan'])->name('admin.galerikegiatan');
    Route::get('/admin/kepegawaian', [AdminController::class,'adminkepegawaian'])->name('admin.kepegawaian');
    Route::get('/admin/pengaduan', [AdminController::class,'adminPengaduan'])->name('admin.pengaduan');
    Route::get('/admin/statsdesa', [AdminController::class,'adminstatsdesa'])->name('admin.statsdesa');
    Route::get('/admin/profil', [AdminController::class,'adminProfil'])->name('admin.profil');
    Route::get('/admin/tambahagenda', [AdminController::class,'tambahagenda'])->name('admin.tambahagenda');
    Route::get('/admin/tambahberita', [AdminController::class,'tambahberita'])->name('admin.tambahberita');
    Route::get('/admin/tambahgaleri', [AdminController::class,'tambahgaleri'])->name('admin.tambahgaleri');
    Route::get('/admin/tambahpegawai', [AdminController::class,'tambahpegawai'])->name('admin.tambahpegawai');
    Route::get('/admin/tambahstats', [AdminController::class,'tambahstats'])->name('admin.tambahstats');

    //statistic
    Route::get('/admin/tambahagama', [AdminController::class,'tambahagama'])->name('admin.tambahagama');

    //with id
    Route::get('/admin/editAgenda/{id}', [adminController::class,'editAgenda'])->name('admin.editAgenda');
    Route::get('/admin/deleteAgenda/{id}', [adminController::class,'deleteAgenda'])->name('admin.deleteAgenda');
    Route::get('/admin/selengkapnya/{id}', [AdminController::class,'bacaAduan'])->name('admin.bacaAduan');
    Route::get('/admin/deleteAduan/{id}', [AdminController::class,'deleteAduan'])->name('admin.deleteAduan');
    Route::get('/admin/editBerita/{id}', [AdminController::class,'editBerita'])->name('admin.editBerita');
    Route::get('/admin/deleteBerita/{id}', [adminController::class,'deleteBerita'])->name('admin.deleteBerita');
    Route::get('/admin/editGaleri/{id}', [AdminController::class,'editGaleri'])->name('admin.editGaleri');
    Route::get('/admin/deleteGaleri/{id}', [AdminController::class,'deleteGaleri'])->name('admin.deleteGaleri');
    Route::get('/admin/editKepegawaian/{id}', [AdminController::class,'editKepegawaian'])->name('admin.editKepegawaian');
    Route::get('/admin/deleteKepegawaian/{id}', [AdminController::class,'deleteKepegawaian'])->name('admin.deleteKepegawaian');

    //edit
    Route::get('/editAgenda/{id}', [AdminController::class, 'editAgenda'])->name('editAgenda');
    Route::post('/postEditAgenda/{id}', [AdminController::class, 'postEditAgenda'])->name('postEditAgenda');
    Route::get('/editBerita/{id}', [AdminController::class, 'editBerita'])->name('editBerita');
    Route::post('/postEditBerita/{id}', [AdminController::class, 'postEditBerita'])->name('postEditBerita');
    Route::get('/editGaleri/{id}', [AdminController::class, 'editGaleri'])->name('editGaleri');
    Route::post('/postEditGaleri/{id}', [AdminController::class, 'postEditGaleri'])->name('postEditGaleri');
    Route::get('/editKepegawaian/{id}', [AdminController::class, 'editKepegawaian'])->name('editKepegawaian');
    Route::post('/postEditKepegawaian/{id}', [AdminController::class, 'postEditKepegawaian'])->name('postEditKepegawaian');

    //tambah menambah
    Route::post('/tambahAgenda', [AdminController::class,'agenda'])->name('postTambahAgenda');
    Route::post('/tambahBerita', [AdminController::class,'berita'])->name('postTambahBerita');
    Route::post('/tambahGaleri', [AdminController::class,'galeri'])->name('postTambahGaleri');
    Route::post('/tambahPegawai', [AdminController::class,'kepegawaian'])->name('postTambahPegawai');

    //statistic
    Route::post('/tambahAgama', [AdminController::class,'agama'])->name('postTambahAgama');
    Route::get('/editagama/{id}', [AdminController::class, 'editagama'])->name('editagama');
    Route::post('/postEditagama/{id}', [AdminController::class, 'postEditagama'])->name('postEditagama');
    Route::get('/admin/editagama/{id}', [AdminController::class,'editagama'])->name('admin.editagama');
    Route::get('/admin/deleteagama/{id}', [AdminController::class,'deleteagama'])->name('admin.deleteagama');

    Route::post('/update-jumlah-penduduk', [AdminController::class, 'updateJumlahPenduduk'])->name('update.jumlah.penduduk');

});
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route::middleware([IsAdmin::class])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });



// Route::post('/admin/agenda/post', [AdminController::class, 'agenda'])->name('admin.postAgenda');


// Route::get('/agendaadmin', function () {
//     return view('admin.agenda');
// })->name('admin.agenda');
// Route::get('/berita', function () {
//     return view('admin.berita');
// })->name('admin.berita');
// Route::get('/statsdesaadmin', function () {
//     return view('admin.statsdesa');
// })->name('admin.stats');
// Route::get('/kepegawaian', function () {
//     return view('admin.kepegawaian');
// })->name('admin.kp');
// Route::get('/pengaduan', function () {
//     return view('admin.pengaduan');
// })->name('admin.pengaduan');

