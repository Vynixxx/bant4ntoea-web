<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pageController;
use App\Http\Middleware\IsAdmin;
use App\Models\berita;
use App\Models\agenda;


Route::get('/', function () {
    $berita = berita::get();
    return view('home' , compact('berita'));
})->name('home');

Route::get('news', function () {
    $berita = berita::get();
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
Route::view('/statsdesa', 'statsdesa')->name('sd');
Route::view('/kontak', 'kontak')->name('kontak');
Route::post('/postkontak', [pageController::class, 'kontak'])->name('postKontak');
Route::view('/karakteristikdesa', 'desa')->name('desa');
Route::view('/galeri', '/publikasi/galeri')->name('galeri');
// Route::view('/agenda', '/publikasi/agenda')->name('agenda');
Route::get('/agenda', function () {
    $agenda = agenda::get();
    return view('/publikasi/agenda' , compact('agenda'));
})->name('agenda');
Route::get('/agenda/{slug}', [pageController::class, 'detailAgenda'])->name('detailAgenda');
Route::view('/sumberdayamanusia', 'sdm')->name('sdm');
Route::view('/lembagadesa', 'lemdes')->name('lemdes');


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
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/agenda', [AdminController::class,'adminAgenda'])->name('admin.agenda');
    Route::get('/admin/berita', [AdminController::class,'adminBerita'])->name('admin.berita');
    Route::get('/admin/pengaduan', [AdminController::class,'adminPengaduan'])->name('admin.pengaduan');
    Route::get('/admin/profil', [AdminController::class,'adminProfil'])->name('admin.profil');
    Route::get('/admin/tambahagenda', [AdminController::class,'tambahagenda'])->name('admin.tambahagenda');
    Route::get('/admin/tambahberita', [AdminController::class,'tambahberita'])->name('admin.tambahberita');
    Route::get('/admin/tambahpegawai', [AdminController::class,'tambahpegawai'])->name('admin.tambahpegawai');
    Route::get('/admin/tambahstats', [AdminController::class,'tambahstats'])->name('admin.tambahstats');
    //with id
    Route::get('/admin/editAgenda/{id}', [adminController::class,'editAgenda'])->name('admin.editAgenda');
    Route::get('/admin/deleteAgenda/{id}', [adminController::class,'deleteAgenda'])->name('admin.deleteAgenda');
    Route::get('/admin/selengkapnya/{id}', [AdminController::class,'bacaAduan'])->name('admin.bacaAduan');
    Route::get('/admin/deleteAduan/{id}', [AdminController::class,'deleteAduan'])->name('admin.deleteAduan');
    Route::get('/admin/editBerita/{id}', [AdminController::class,'editBerita'])->name('admin.editBerita');
    Route::get('/admin/deleteBerita/{id}', [adminController::class,'deleteBerita'])->name('admin.deleteBerita');

    //edit
    Route::get('/editAgenda/{id}', [AdminController::class, 'editAgenda'])->name('editAgenda');
    Route::post('/postEditAgenda/{id}', [AdminController::class, 'postEditAgenda'])->name('postEditAgenda');
    Route::get('/editBerita/{id}', [AdminController::class, 'editBerita'])->name('editBerita');
    Route::post('/postEditBerita/{id}', [AdminController::class, 'postEditBerita'])->name('postEditBerita');
    //tambah menambah
    Route::post('/tambahAgenda', [AdminController::class,'agenda'])->name('postTambahAgenda');
    Route::post('/tambahBerita', [AdminController::class,'berita'])->name('postTambahBerita');
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
Route::get('/statsdesaadmin', function () {
    return view('admin.statsdesa');
})->name('admin.stats');
Route::get('/kepegawaian', function () {
    return view('admin.kepegawaian');
})->name('admin.kp');
// Route::get('/pengaduan', function () {
//     return view('admin.pengaduan');
// })->name('admin.pengaduan');

