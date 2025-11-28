<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pageController;
use App\Http\Middleware\IsAdmin;
use App\Models\berita;
use App\Models\agama;
use App\Models\bsk;
use App\Models\buruh;
use App\Models\gb;
use App\Models\gd;
use App\Models\jamkes;
use App\Models\kehamilan;
use App\Models\kesos;
use App\Models\kk;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\pkh;
use App\Models\pp;
use App\Models\raskin;
use App\Models\sk;
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
    $bsk = bsk::get();
    $buruh = buruh::get();
    $gb = gb::get();
    $gd = gd::get();
    $jamkes = jamkes::get();
    $kesos = kesos::get();
    $kk = kk::get();
    $kehamilan = kehamilan::get();
    $pekerjaan = pekerjaan::get();
    $pendidikan = pendidikan::get();
    $pp = pp::get();
    $pkh = pkh::get();
    $pp = pp::get();
    $raskin = raskin::get();
    $sk = sk::get();
    return view('statsdesa' , compact('agama', 'bsk', 'buruh', 'gb', 'gd', 'jamkes', 'kesos', 'kk', 'kehamilan', 'pekerjaan', 'pendidikan', 'pp', 'pkh', 'pp', 'raskin', 'sk'));
})->name('sd');
Route::view('/kontak', 'kontak')->name('kontak');
Route::post('/postkontak', [pageController::class, 'kontak'])->name('postKontak');
Route::view('/karakteristikdesa', 'desa')->name('desa');
Route::get('/galeri', function () {
    $galerikegiatan = galerikegiatan::orderBy('created_at', 'DESC')->get();
    return view('/publikasi/galeri' , compact('galerikegiatan'));
})->name('galeri');
Route::get('/galeri/{slug}', [pageController::class, 'detailGaleri'])->name('detailGaleri');
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

// regulasi
Route::view('/uu', 'regulasi/uu')->name('regulasiuu');
Route::view('/camat', 'regulasi/camat')->name('regulasicamat');
Route::view('/bupati', 'regulasi/bupati')->name('regulasibupati');
Route::view('/gubernur', 'regulasi/gubernur')->name('regulasigubernur');
Route::view('/presiden', 'regulasi/presiden')->name('regulasipresiden');

// admin
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/postLogin', [AdminController::class, 'postLogin'])->name('admin.postLogin');

Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

//error page
Route::get('/admin/logout', function() {
    abort(404);
});
Route::get('/tambahAgenda', function() {
    abort(404);
});
Route::get('/tambahBerita', function() {
    abort(404);
});
Route::get('/tambahGaleri', function() {
    abort(404);
});
Route::get('/tambahPegawai', function() {
    abort(404);
});
Route::get('/postkontak', function() {
    abort(404);
});
Route::get('/tambahbsk', function() {
    abort(404);
});
Route::get('/tambahburuh', function() {
    abort(404);
});
Route::get('/tambahgb', function() {
    abort(404);
});
Route::get('/tambahgd', function() {
    abort(404);
});
Route::get('/tambahjamkes', function() {
    abort(404);
});
Route::get('/tambahkesos', function() {
    abort(404);
});
Route::get('/tambahkk', function() {
    abort(404);
});
Route::get('/tambahkehamilan', function() {
    abort(404);
});
Route::get('/tambahpekerjaan', function() {
    abort(404);
});
Route::get('/tambahpendidikan', function() {
    abort(404);
});
Route::get('/tambahpp', function() {
    abort(404);
});
Route::get('/tambahpkh', function() {
    abort(404);
});
Route::get('/tambahraskin', function() {
    abort(404);
});
Route::get('/update-jumlah-penduduk', function() {
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

    //with id
    Route::get('/admin/editAgenda/{id}', [adminController::class,'editAgenda'])->name('admin.editAgenda');
    Route::get('/admin/deleteAgenda/{id}', [adminController::class,'deleteAgenda'])->name('admin.deleteAgenda');
    Route::get('/admin/selengkapnya/{id}', [AdminController::class,'bacaAduan'])->name('admin.bacaAduan');
    Route::post('/admin/deleteAduan/{id}', [AdminController::class,'deleteAduan'])->name('admin.deleteAduan');
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
    Route::get('/admin/tambahagama', [AdminController::class,'tambahagama'])->name('admin.tambahagama');
    Route::post('/tambahAgama', [AdminController::class,'agama'])->name('postTambahAgama');
    Route::get('/editagama/{id}', [AdminController::class, 'editagama'])->name('editagama');
    Route::post('/postEditagama/{id}', [AdminController::class, 'postEditagama'])->name('postEditagama');
    Route::get('/admin/editagama/{id}', [AdminController::class,'editagama'])->name('admin.editagama');
    Route::get('/admin/deleteagama/{id}', [AdminController::class,'deleteagama'])->name('admin.deleteagama');

    Route::get('/admin/tambahbsk', [AdminController::class,'tambahbsk'])->name('admin.tambahbsk');
    Route::post('/tambahbsk', [AdminController::class,'bsk'])->name('postTambahbsk');
    Route::get('/editbsk/{id}', [AdminController::class, 'editbsk'])->name('editbsk');
    Route::post('/postEditbsk/{id}', [AdminController::class, 'postEditbsk'])->name('postEditbsk');
    Route::get('/admin/editbantuan/{id}', [AdminController::class,'editbsk'])->name('admin.editbsk');
    Route::get('/admin/deletebantuan/{id}', [AdminController::class,'deletebsk'])->name('admin.deletebsk');

    Route::get('/admin/tambahburuh', [AdminController::class,'tambahburuh'])->name('admin.tambahburuh');
    Route::post('/tambahburuh', [AdminController::class,'buruh'])->name('postTambahburuh');
    Route::get('/editburuh/{id}', [AdminController::class, 'editburuh'])->name('editburuh');
    Route::post('/postEditburuh/{id}', [AdminController::class, 'postEditburuh'])->name('postEditburuh');
    Route::get('/admin/editburuh/{id}', [AdminController::class,'editburuh'])->name('admin.editburuh');
    Route::get('/admin/deleteburuh/{id}', [AdminController::class,'deleteburuh'])->name('admin.deleteburuh');

    Route::get('/admin/tambahgb', [AdminController::class,'tambahgb'])->name('admin.tambahgb');
    Route::post('/tambahgb', [AdminController::class,'gb'])->name('postTambahgb');
    Route::get('/editgb/{id}', [AdminController::class, 'editgb'])->name('editgb');
    Route::post('/postEditgb/{id}', [AdminController::class, 'postEditgb'])->name('postEditgb');
    Route::get('/admin/editgiziburuk/{id}', [AdminController::class,'editgb'])->name('admin.editgb');
    Route::get('/admin/deletegiziburuk/{id}', [AdminController::class,'deletegb'])->name('admin.deletegb');

    Route::get('/admin/tambahgd', [AdminController::class,'tambahgd'])->name('admin.tambahgd');
    Route::post('/tambahgd', [AdminController::class,'gd'])->name('postTambahgd');
    Route::get('/editgd/{id}', [AdminController::class, 'editgd'])->name('editgd');
    Route::post('/postEditgd/{id}', [AdminController::class, 'postEditgd'])->name('postEditgd');
    Route::get('/admin/editgoldar/{id}', [AdminController::class,'editgd'])->name('admin.editgd');
    Route::get('/admin/deletegoldar/{id}', [AdminController::class,'deletegd'])->name('admin.deletegd');

    Route::get('/admin/tambahjamkes', [AdminController::class,'tambahjamkes'])->name('admin.tambahjamkes');
    Route::post('/tambahjamkes', [AdminController::class,'jamkes'])->name('postTambahjamkes');
    Route::get('/editjamkes/{id}', [AdminController::class, 'editjamkes'])->name('editjamkes');
    Route::post('/postEditjamkes/{id}', [AdminController::class, 'postEditjamkes'])->name('postEditjamkes');
    Route::get('/admin/editjamkes/{id}', [AdminController::class,'editjamkes'])->name('admin.editjamkes');
    Route::get('/admin/deletejamkes/{id}', [AdminController::class,'deletejamkes'])->name('admin.deletejamkes');

    Route::get('/admin/tambahkesos', [AdminController::class,'tambahkesos'])->name('admin.tambahkesos');
    Route::post('/tambahkesos', [AdminController::class,'kesos'])->name('postTambahkesos');
    Route::get('/editkesos/{id}', [AdminController::class, 'editkesos'])->name('editkesos');
    Route::post('/postEditkesos/{id}', [AdminController::class, 'postEditkesos'])->name('postEditkesos');
    Route::get('/admin/editkesos/{id}', [AdminController::class,'editkesos'])->name('admin.editkesos');
    Route::get('/admin/deletekesos/{id}', [AdminController::class,'deletekesos'])->name('admin.deletekesos');

    Route::get('/admin/tambahkk', [AdminController::class,'tambahkk'])->name('admin.tambahkk');
    Route::post('/tambahkk', [AdminController::class,'kk'])->name('postTambahkk');
    Route::get('/editkk/{id}', [AdminController::class, 'editkk'])->name('editkk');
    Route::post('/postEditkk/{id}', [AdminController::class, 'postEditkk'])->name('postEditkk');
    Route::get('/admin/editkk/{id}', [AdminController::class,'editkk'])->name('admin.editkk');
    Route::get('/admin/deletekk/{id}', [AdminController::class,'deletekk'])->name('admin.deletekk');

    Route::get('/admin/tambahkehamilan', [AdminController::class,'tambahkehamilan'])->name('admin.tambahkehamilan');
    Route::post('/tambahkehamilan', [AdminController::class,'kehamilan'])->name('postTambahkehamilan');
    Route::get('/editkehamilan/{id}', [AdminController::class, 'editkehamilan'])->name('editkehamilan');
    Route::post('/postEditkehamilan/{id}', [AdminController::class, 'postEditkehamilan'])->name('postEditkehamilan');
    Route::get('/admin/editkehamilan/{id}', [AdminController::class,'editkehamilan'])->name('admin.editkehamilan');
    Route::get('/admin/deletekehamilan/{id}', [AdminController::class,'deletekehamilan'])->name('admin.deletekehamilan');
    
    Route::get('/admin/tambahpekerjaan', [AdminController::class,'tambahpekerjaan'])->name('admin.tambahpekerjaan');
    Route::post('/tambahpekerjaan', [AdminController::class,'pekerjaan'])->name('postTambahpekerjaan');
    Route::get('/editpekerjaan/{id}', [AdminController::class, 'editpekerjaan'])->name('editpekerjaan');
    Route::post('/postEditpekerjaan/{id}', [AdminController::class, 'postEditpekerjaan'])->name('postEditpekerjaan');
    Route::get('/admin/editpekerjaan/{id}', [AdminController::class,'editpekerjaan'])->name('admin.editpekerjaan');
    Route::get('/admin/deletepekerjaan/{id}', [AdminController::class,'deletepekerjaan'])->name('admin.deletepekerjaan');

    Route::get('/admin/tambahpendidikan', [AdminController::class,'tambahpendidikan'])->name('admin.tambahpendidikan');
    Route::post('/tambahpendidikan', [AdminController::class,'pendidikan'])->name('postTambahpendidikan');
    Route::get('/editpendidikan/{id}', [AdminController::class, 'editpendidikan'])->name('editpendidikan');
    Route::post('/postEditpendidikan/{id}', [AdminController::class, 'postEditpendidikan'])->name('postEditpendidikan');
    Route::get('/admin/editpendidikan/{id}', [AdminController::class,'editpendidikan'])->name('admin.editpendidikan');
    Route::get('/admin/deletependidikan/{id}', [AdminController::class,'deletependidikan'])->name('admin.deletependidikan');

    Route::get('/admin/tambahpp', [AdminController::class,'tambahpp'])->name('admin.tambahpp');
    Route::post('/tambahpp', [AdminController::class,'pp'])->name('postTambahpp');
    Route::get('/editpp/{id}', [AdminController::class, 'editpp'])->name('editpp');
    Route::post('/postEditpp/{id}', [AdminController::class, 'postEditpp'])->name('postEditpp');
    Route::get('/admin/editpp/{id}', [AdminController::class,'editpp'])->name('admin.editpp');
    Route::get('/admin/deletepp/{id}', [AdminController::class,'deletepp'])->name('admin.deletepp');

    Route::get('/admin/tambahpkh', [AdminController::class,'tambahpkh'])->name('admin.tambahpkh');
    Route::post('/tambahpkh', [AdminController::class,'pkh'])->name('postTambahpkh');
    Route::get('/editpkh/{id}', [AdminController::class, 'editpkh'])->name('editpkh');
    Route::post('/postEditpkh/{id}', [AdminController::class, 'postEditpkh'])->name('postEditpkh');
    Route::get('/admin/editpkh/{id}', [AdminController::class,'editpkh'])->name('admin.editpkh');
    Route::get('/admin/deletepkh/{id}', [AdminController::class,'deletepkh'])->name('admin.deletepkh');

    Route::get('/admin/tambahraskin', [AdminController::class,'tambahraskin'])->name('admin.tambahraskin');
    Route::post('/tambahraskin', [AdminController::class,'raskin'])->name('postTambahraskin');
    Route::get('/editraskin/{id}', [AdminController::class, 'editraskin'])->name('editraskin');
    Route::post('/postEditraskin/{id}', [AdminController::class, 'postEditraskin'])->name('postEditraskin');
    Route::get('/admin/editraskin/{id}', [AdminController::class,'editraskin'])->name('admin.editraskin');
    Route::get('/admin/deleteraskin/{id}', [AdminController::class,'deleteraskin'])->name('admin.deleteraskin');

    Route::get('/admin/tambahsk', [AdminController::class,'tambahsk'])->name('admin.tambahsk');
    Route::post('/tambahsk', [AdminController::class,'sk'])->name('postTambahsk');
    Route::get('/editsk/{id}', [AdminController::class, 'editsk'])->name('editsk');
    Route::post('/postEditsk/{id}', [AdminController::class, 'postEditsk'])->name('postEditsk');
    Route::get('/admin/editsk/{id}', [AdminController::class,'editsk'])->name('admin.editsk');
    Route::get('/admin/deletesk/{id}', [AdminController::class,'deletesk'])->name('admin.deletesk');

    Route::post('/update-jumlah-penduduk', [AdminController::class, 'updateJumlahPenduduk'])->name('update.jumlah.penduduk');

});
