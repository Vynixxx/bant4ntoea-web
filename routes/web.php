<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\pageController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('news', function () {
    return view('/publikasi/news');
})->name('news');
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
Route::view('/agenda', '/publikasi/agenda')->name('agenda');
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

// Route::middleware(['auth', 'admin'])->group(function () {   
//     Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });
Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/agenda', [AdminController::class,'adminAgenda'])->name('admin.agenda');
    Route::get('/admin/berita', [AdminController::class,'adminBerita'])->name('admin.berita');
    Route::get('/admin/pengaduan', [AdminController::class,'adminPengaduan'])->name('admin.pengaduan');
});
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Route::middleware([IsAdmin::class])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
// });
Route::get('/admin/tambahagenda', [AdminController::class,'tambahagenda'])->name('admin.tambahagenda');
Route::get('/admin/tambahberita', [AdminController::class,'tambahberita'])->name('admin.tambahberita');
Route::get('/admin/tambahpegawai', [AdminController::class,'tambahpegawai'])->name('admin.tambahpegawai');
Route::get('/admin/tambahstats', [AdminController::class,'tambahstats'])->name('admin.tambahstats');


// Route::post('/admin/agenda/post', [AdminController::class, 'agenda'])->name('admin.postAgenda');

Route::get('/admin/editAgenda/{id}', [adminController::class,'editAgenda'])->name('admin.editAgenda');
Route::get('/admin/deleteAgenda/{id}', [adminController::class,'deleteAgenda'])->name('admin.deleteAgenda');
Route::get('/admin/selengkapnya/{id}', [AdminController::class,'bacaAduan'])->name('admin.bacaAduan');
Route::get('/admin/deleteAduan/{id}', [AdminController::class,'deleteAduan'])->name('admin.deleteAduan');

Route::post('/tambahAgenda', [AdminController::class,'agenda'])->name('postTambahAgenda');
Route::post('/tambahBerita', [AdminController::class,'berita'])->name('postTambahBerita');

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

