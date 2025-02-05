<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Admin;
use App\Models\User;
use App\Models\agenda;
use App\Models\berita;
use App\Models\galerikegiatan;
use App\Models\kepegawaian;
use App\Models\kontak;
use App\Models\penduduk;
use Illuminate\Support\Str;

//statistic
use App\Models\agama;
use App\Models\bsk;
use App\Models\buruh;
use App\Models\gb;
use App\Models\gd;
use App\Models\jamkes;
use App\Models\kesos;
use App\Models\kk;
use App\Models\kehamilan;
use App\Models\pekerjaan;
use App\Models\pendidikan;
use App\Models\pp;
use App\Models\pkh;
use App\Models\raskin;
use App\Models\sk;


class AdminController extends Controller
{
        // Menampilkan halaman login
        public function showLoginForm()
        {
            return view('admin.login');
        }

        // Logout
        public function logout(Request $request)
        {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }

        public function dashboard(){
        $jumlahPenduduk = penduduk::where('key', 'jumlah_penduduk')->value('value');
        $jumlahAgenda = agenda::count();
        $jumlahKontak = kontak::count();
        $berita = berita::orderBy('created_at', 'DESC')->limit(5)->get();
        if(Auth::check()&& Auth::user()->role === 'admin'){
            return view('admin.dashboard', compact('jumlahPenduduk', 'jumlahAgenda', 'jumlahKontak', 'berita'));
        }

        return redirect('/');
           
        }

        public function updateJumlahPenduduk(Request $request)
        {
            $request->validate([
                'jumlah' => 'required|integer|min:0',
            ]);

            // Update jumlah penduduk di tabel settings
            penduduk::where('key', 'jumlah_penduduk')->update(['value' => $request->jumlah]);

            return response()->json(['success' => true]);
        }

        // Proses login
        public function postLogin(Request $request){
        $credentials = $request->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);

        if(Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->role === 'admin'){
                $request->session()->regenerate();
                return redirect()->intended('admin/dashboard');
            }else{
                Auth::logout();
                return back()->withErrors([
                    'username'=> 'Error'
                ]);
            }
        }

        return back()->withErrors([
            'username'=>'Error'
        ]);
    }

    //adminControl
    public function tambahagenda()
    {
        return view('admin.tambahagenda');
    }
    public function tambahberita()
    {
        return view('admin.tambahberita');
    }
    public function tambahgaleri()
    {
        return view('admin.tambahgaleri');
    }
    public function tambahpegawai()
    {
        return view('admin.tambahpegawai');
    }
    public function tambahstats()
    {
        return view('admin.tambahstats');
    }

    //admin halaman
    public function adminAgenda()
    {
        $agenda = agenda::get();
        return view('admin.agenda', compact('agenda'));
    }

    public function adminBerita()
    {
        $berita = berita::get();
        return view('admin.berita', compact('berita'));
    }

    public function admingalerikegiatan()
    {
        $galerikegiatan = galerikegiatan::get();
        return view('admin.galerikegiatan', compact('galerikegiatan'));
    }

    public function adminkepegawaian()
    {
        $kepegawaian = kepegawaian::get();
        return view('admin.kepegawaian', compact('kepegawaian'));
    }

    public function adminPengaduan()
    {
        $kontak = kontak::get();
        return view('admin.pengaduan', compact('kontak'));
    }

    public function adminProfil()
    {
        $user = user::get();
        return view('admin.profil', compact('user'));
    }

    //tambah menambah
    public function agenda(Request $agenda)
    {
        // Validasi input
        $agenda->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'unique:agenda,slug',
            'tanggal' => 'required|date',
            'keterangan' => 'required|string',
        ]);

        // Simpan ke database
        agenda::create([
            'judul' => $agenda->judul,
            'slug' => $agenda->slug,
            'tanggal' => $agenda->tanggal,
            'keterangan' => $agenda->keterangan,
        ]);

        // Cek apakah berhasil disimpan
        if ($agenda) {
            return redirect()->route('admin.tambahagenda')->with('success', 'Agenda berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahagenda')->with('failed', 'Gagal menambahkan agenda.');
        }
    }

    public function berita(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'unique:berita,slug',
            'berita' => 'required|string',
            'gambar' => 'required|image|max:5120', // Maksimal ukuran 5MB
            'tanggal' => 'required|date',
            'tag' => 'required|string',
        ]);
    
        // Menyimpan berita ke database
        $berita = new Berita;
        $berita->judul = $request->input('judul');
        $berita->slug = $request->input('slug');
        $berita->berita = $request->input('berita');
        $berita->tanggal = $request->input('tanggal');
        $berita->tag = $request->input('tag');
    
        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $berita->gambar = $filename;
        }
    
        // Simpan ke database
        if ($berita->save()) {
            return redirect()->route('admin.tambahberita')->with('success', 'Berita berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahberita')->with('failed', 'Gagal menambahkan berita.');
        }
    }
    
    public function galeri(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'unique:galerikegiatan,slug',
            'isi' => 'required|string',
            'gambar' => 'required|image|max:5120', // Maksimal ukuran 5MB
            'tanggal' => 'required|date',
            'tag' => 'required|string',
        ]);
    
        // Menyimpan berita ke database
        $galerikegiatan = new galerikegiatan;
        $galerikegiatan->judul = $request->input('judul');
        $galerikegiatan->slug = $request->input('slug');
        $galerikegiatan->isi = $request->input('isi');
        $galerikegiatan->tanggal = $request->input('tanggal');
        $galerikegiatan->tag = $request->input('tag');
    
        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $galerikegiatan->gambar = $filename;
        }
    
        // Simpan ke database
        if ($galerikegiatan->save()) {
            return redirect()->route('admin.tambahgaleri')->with('success', 'Kegiatan berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahgaleri')->with('failed', 'Gagal menambahkan kegiatan.');
        }
    }

    public function kepegawaian(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|numeric|unique:kepegawaian,nip',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'asal' => 'required|string',
            'ttl' => 'required|date',
            'jabatan' => 'required|string',
            'pend' => 'required|string',
            'gambar' => 'required|image|max:5120', // Maksimal ukuran 5MB
        ]);
    
        // Menyimpan data kepegawaian ke database
        $kepegawaian = new Kepegawaian();
        $kepegawaian->nama = $request->input('nama');
        $kepegawaian->nip = $request->input('nip');
        $kepegawaian->jenis_kelamin = $request->input('jenis_kelamin');
        $kepegawaian->asal = $request->input('asal');
        $kepegawaian->ttl = $request->input('ttl');
        $kepegawaian->jabatan = $request->input('jabatan');
        $kepegawaian->pend = $request->input('pend');
    
        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $kepegawaian->gambar = $filename;
        }
    
        // Simpan ke database
        if ($kepegawaian->save()) {
            return redirect()->route('admin.tambahpegawai')->with('success', 'Pegawai berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahpegawai')->with('failed', 'Gagal menambahkan pegawai.');
        }
    }

    //edit
    public function editAgenda($id)
    {
        $agenda = agenda::find($id);
        return view('admin.editagenda', compact('agenda'));
    }
    public function postEditagenda(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'slug' => 'unique:berita,slug,' . $id, // Menambahkan pengecualian untuk slug yang sedang diedit
            'tanggal' => 'required',
            'keterangan' => 'required',
        ]);
        // Menemukan agenda berdasarkan ID
        $agenda = agenda::find($id);
        if (!$agenda) {
            return redirect()->route('admin.tambahagenda')->with('failed', 'Agenda tidak ditemukan.');
        }        
         // Update data agenda
        $agenda->judul = $request->input('judul');
        // Mengupdate slug otomatis berdasarkan judul
        $slug = Str::slug($request->input('judul')); // Menggunakan helper Str untuk generate slug
        $agenda->slug = $slug;

        $agenda->tanggal = $request->input('tanggal');
        $agenda->keterangan = $request->input('keterangan');

        // Simpan ke database
        if ($agenda->save()) {
            return back()->with('success', 'Agenda berhasil diupdate!');
        } else {
            return back()->with('failed', 'Agenda gagal diupdate!');
        }
    }

    public function editBerita($id)
    {
        $berita = berita::find($id);
        return view('admin.editberita', compact('berita'));
    }
    public function postEditBerita(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'unique:berita,slug,' . $id, // Menambahkan pengecualian untuk slug yang sedang diedit
            'berita' => 'required|string',
            'gambar' => 'nullable|image|max:5120', // Gambar opsional saat edit
            'tanggal' => 'required|date',
            'tag' => 'required|string',
        ]);
        
        // Menemukan berita berdasarkan ID
        $berita = berita::find($id);
        if (!$berita) {
            return redirect()->route('admin.tambahberita')->with('failed', 'Berita tidak ditemukan.');
        }

        // Update data berita
        $berita->judul = $request->input('judul');
        
        // Mengupdate slug otomatis berdasarkan judul
        $slug = Str::slug($request->input('judul')); // Menggunakan helper Str untuk generate slug
        $berita->slug = $slug;

        $berita->berita = $request->input('berita');
        $berita->tanggal = $request->input('tanggal');
        $berita->tag = $request->input('tag');

        // Proses penyimpanan gambar jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            if ($berita->gambar && file_exists(public_path('images/' . $berita->gambar))) {
                unlink(public_path('images/' . $berita->gambar));
            }

            // Menyimpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $berita->gambar = $filename;
        }

        // Simpan ke database
        if ($berita->save()) {
            return back()->with('success', 'Berita berhasil diupdate!');
        } else {
            return back()->with('failed', 'Berita gagal diupdate!');
        }
    }

    public function editGaleri($id)
    {
        $galerikegiatan = galerikegiatan::find($id);
        return view('admin.editGaleri', compact('galerikegiatan'));
    }
    public function postEditGaleri(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'slug' => 'unique:galerikegiatan,slug,' . $id, // Menambahkan pengecualian untuk slug yang sedang diedit
            'isi' => 'required|string',
            'gambar' => 'nullable|image|max:5120', // Gambar opsional saat edit
            'tanggal' => 'required|date',
            'tag' => 'required|string',
        ]);
        
        // Menemukan galerikegiatan berdasarkan ID
        $galerikegiatan = galerikegiatan::find($id);
        if (!$galerikegiatan) {
            return redirect()->route('admin.tambahgaleri')->with('failed', 'Kegiatan tidak ditemukan.');
        }

        // Update data galerikegiatan
        $galerikegiatan->judul = $request->input('judul');
        
        // Mengupdate slug otomatis berdasarkan judul
        $slug = Str::slug($request->input('judul')); // Menggunakan helper Str untuk generate slug
        $galerikegiatan->slug = $slug;

        $galerikegiatan->isi = $request->input('isi');
        $galerikegiatan->tanggal = $request->input('tanggal');
        $galerikegiatan->tag = $request->input('tag');

        // Proses penyimpanan gambar jika ada gambar baru
        if ($request->hasFile('gambar')) {
            // Menghapus gambar lama jika ada
            if ($galerikegiatan->gambar && file_exists(public_path('images/' . $galerikegiatan->gambar))) {
                unlink(public_path('images/' . $galerikegiatan->gambar));
            }

            // Menyimpan gambar baru
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $galerikegiatan->gambar = $filename;
        }

        // Simpan ke database
        if ($galerikegiatan->save()) {
            return back()->with('success', 'Kegiatan berhasil diupdate!');
        } else {
            return back()->with('failed', 'Kegiatan gagal diupdate!');
        }
    }

    public function editKepegawaian($id)
    {
        $kepegawaian = Kepegawaian::find($id);
        if (!$kepegawaian) {
            return redirect()->route('admin.tambahpegawai')->with('failed', 'Pegawai tidak ditemukan.');
        }
        return view('admin.editkepegawaian', compact('kepegawaian'));
    }

    public function postEditKepegawaian(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|numeric|unique:kepegawaian,nip,' . $id, // Pengecualian untuk data yang sedang diedit
            'asal' => 'required|string',
            'ttl' => 'required|date',
            'jabatan' => 'required|string',
            'pend' => 'required|string',
            'gambar' => 'nullable|image|max:5120', // Gambar bisa kosong jika tidak diperbarui
        ]);

        // Menemukan data kepegawaian berdasarkan ID
        $kepegawaian = Kepegawaian::find($id);
        if (!$kepegawaian) {
            return redirect()->route('admin.tambahpegawai')->with('failed', 'Pegawai tidak ditemukan.');
        }

        // Update data kepegawaian
        $kepegawaian->nama = $request->input('nama');
        $kepegawaian->nip = $request->input('nip');
        $kepegawaian->asal = $request->input('asal');
        $kepegawaian->ttl = $request->input('ttl');
        $kepegawaian->jabatan = $request->input('jabatan');
        $kepegawaian->pend = $request->input('pend');

        // Update gambar jika ada file baru
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $kepegawaian->gambar = $filename;
        }

        // Simpan ke database
        if ($kepegawaian->save()) {
            return back()->with('success', 'Data pegawai berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data pegawai gagal diperbarui!');
        }
    }


    //selengkapnya
    public function bacaAduan($id)
    {
        $kontak = kontak::find($id);
        return view('admin.bacaAduan', compact('kontak'));
    }

    //delete
    public function deleteAgenda($id)
    {
        $agenda = agenda::find($id);

        $agenda->delete();
        if ($agenda) {
            return back()->with('success', 'Data agenda berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data agenda!');
        }
    }
    public function deleteAduan($id)
    {
        $kontak = kontak::find($id);

        $kontak->delete();
        if ($kontak) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data!');
        }
    }
    public function deleteBerita($id)
    {
        $berita = berita::find($id);

        $berita->delete();
        if ($berita) {
            return back()->with('success', 'Berita berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus berita!');
        }
    }
    public function deleteGaleri($id)
    {
        $galerikegiatan = galerikegiatan::find($id);

        $galerikegiatan->delete();
        if ($galerikegiatan) {
            return back()->with('success', 'Kegiatan berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus kegiatan!');
        }
    }
    public function deleteKepegawaian($id)
    {
        $Kepegawaian = Kepegawaian::find($id);
        $Kepegawaian->delete();
        if ($Kepegawaian) {
            return back()->with('success', 'Pegawai berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus pegawai!');
        }
    }

    //statistic
    public function adminstatsdesa()
    {
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
        $raskin = raskin::get();
        $sk = sk::get();
        return view('admin.statsdesa', compact('agama', 'bsk', 'buruh', 'gb', 'gd', 'jamkes', 'kesos', 'kk', 'kehamilan', 'pekerjaan', 'pendidikan', 'pp', 'pkh', 'raskin', 'sk'));
    }
    //agama
    public function agama(Request $agama)
    {
        // Validasi input
        $agama->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        agama::create([
            'nama' => $agama->nama,
            'lk' => $agama->lk,
            'pr' => $agama->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($agama) {
            return redirect()->route('admin.tambahagama')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahagama')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahagama()
    {
        return view('admin.tambahagama');
    }
    public function editagama($id)
    {
        $agama = agama::find($id);
        if (!$agama) {
            return redirect()->route('admin.tambahagama')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editagama', compact('agama'));
    }

    public function postEditagama(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data agama berdasarkan ID
        $agama = agama::find($id);
        if (!$agama) {
            return redirect()->route('admin.tambahagama')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data agama
        $agama->nama = $request->input('nama');
        $agama->lk = $request->input('lk');
        $agama->pr = $request->input('pr');

        // Simpan ke database
        if ($agama->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deleteagama($id)
    {
        $agama = agama::find($id);
        $agama->delete();
        if ($agama) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //bantuan siswa miskin
    public function bsk(Request $bsk)
    {
        // Validasi input
        $bsk->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Simpan ke database
        bsk::create([
            'nama' => $bsk->nama,
            'jml' => $bsk->jml,
        ]);

        // Cek apakah berhasil disimpan
        if ($bsk) {
            return redirect()->route('admin.tambahbsk')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahbsk')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahbsk()
    {
        return view('admin.tambahbsk');
    }
    public function editbsk($id)
    {
        $bsk = bsk::find($id);
        if (!$bsk) {
            return redirect()->route('admin.tambahbsk')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editbsk', compact('bsk'));
    }

    public function postEditbsk(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Menemukan data bsk berdasarkan ID
        $bsk = bsk::find($id);
        if (!$bsk) {
            return redirect()->route('admin.tambahbsk')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data bsk
        $bsk->nama = $request->input('nama');
        $bsk->jml = $request->input('jml');

        // Simpan ke database
        if ($bsk->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletebsk($id)
    {
        $bsk = bsk::find($id);
        $bsk->delete();
        if ($bsk) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }
    
    //booruh
    public function buruh(Request $buruh)
    {
        // Validasi input
        $buruh->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Simpan ke database
        buruh::create([
            'nama' => $buruh->nama,
            'jml' => $buruh->jml,
        ]);

        // Cek apakah berhasil disimpan
        if ($buruh) {
            return redirect()->route('admin.tambahburuh')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahburuh')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahburuh()
    {
        return view('admin.tambahburuh');
    }
    public function editburuh($id)
    {
        $buruh = buruh::find($id);
        if (!$buruh) {
            return redirect()->route('admin.tambahburuh')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editburuh', compact('buruh'));
    }

    public function postEditburuh(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Menemukan data buruh berdasarkan ID
        $buruh = buruh::find($id);
        if (!$buruh) {
            return redirect()->route('admin.tambahburuh')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data buruh
        $buruh->nama = $request->input('nama');
        $buruh->jml = $request->input('jml');

        // Simpan ke database
        if ($buruh->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deleteburuh($id)
    {
        $buruh = buruh::find($id);
        $buruh->delete();
        if ($buruh) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //gizi buruk
    public function gb(Request $gb)
    {
        // Validasi input
        $gb->validate([
            'usia' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        gb::create([
            'usia' => $gb->usia,
            'lk' => $gb->lk,
            'pr' => $gb->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($gb) {
            return redirect()->route('admin.tambahgb')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahgb')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahgb()
    {
        return view('admin.tambahgb');
    }
    public function editgb($id)
    {
        $gb = gb::find($id);
        if (!$gb) {
            return redirect()->route('admin.tambahgb')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editgb', compact('gb'));
    }

    public function postEditgb(Request $request, $id)
    {
        $request->validate([
            'usia' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data gb berdasarkan ID
        $gb = gb::find($id);
        if (!$gb) {
            return redirect()->route('admin.tambahgb')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data gb
        $gb->usia = $request->input('usia');
        $gb->lk = $request->input('lk');
        $gb->pr = $request->input('pr');

        // Simpan ke database
        if ($gb->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletegb($id)
    {
        $gb = gb::find($id);
        $gb->delete();
        if ($gb) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //golongan darah
    public function gd(Request $gd)
    {
        // Validasi input
        $gd->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        gd::create([
            'nama' => $gd->nama,
            'lk' => $gd->lk,
            'pr' => $gd->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($gd) {
            return redirect()->route('admin.tambahgd')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahgd')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahgd()
    {
        return view('admin.tambahgd');
    }
    public function editgd($id)
    {
        $gd = gd::find($id);
        if (!$gd) {
            return redirect()->route('admin.tambahgd')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editgd', compact('gd'));
    }

    public function postEditgd(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data gd berdasarkan ID
        $gd = gd::find($id);
        if (!$gd) {
            return redirect()->route('admin.tambahgd')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data gd
        $gd->nama = $request->input('nama');
        $gd->lk = $request->input('lk');
        $gd->pr = $request->input('pr');

        // Simpan ke database
        if ($gd->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletegd($id)
    {
        $gd = gd::find($id);
        $gd->delete();
        if ($gd) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //jamkesmas
    public function jamkes(Request $jamkes)
    {
        // Validasi input
        $jamkes->validate([
            'nama' => 'required|string|max:255',
            'acc' => 'required|string',
            'jmlkp' => 'required|string',
        ]);

        // Simpan ke database
        jamkes::create([
            'nama' => $jamkes->nama,
            'acc' => $jamkes->acc,
            'jmlkp' => $jamkes->jmlkp,
        ]);

        // Cek apakah berhasil disimpan
        if ($jamkes) {
            return redirect()->route('admin.tambahjamkes')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahjamkes')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahjamkes()
    {
        return view('admin.tambahjamkes');
    }
    public function editjamkes($id)
    {
        $jamkes = jamkes::find($id);
        if (!$jamkes) {
            return redirect()->route('admin.tambahjamkes')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editjamkes', compact('jamkes'));
    }

    public function postEditjamkes(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'acc' => 'required|string',
            'jmlkp' => 'required|string',
        ]);

        // Menemukan data jamkes berdasarkan ID
        $jamkes = jamkes::find($id);
        if (!$jamkes) {
            return redirect()->route('admin.tambahjamkes')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data jamkes
        $jamkes->nama = $request->input('nama');
        $jamkes->acc = $request->input('acc');
        $jamkes->jmlkp = $request->input('jmlkp');

        // Simpan ke database
        if ($jamkes->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletejamkes($id)
    {
        $jamkes = jamkes::find($id);
        $jamkes->delete();
        if ($jamkes) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //kelas sosial
    public function kesos(Request $kesos)
    {
        // Validasi input
        $kesos->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Simpan ke database
        kesos::create([
            'nama' => $kesos->nama,
            'jml' => $kesos->jml,
        ]);

        // Cek apakah berhasil disimpan
        if ($kesos) {
            return redirect()->route('admin.tambahkesos')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahkesos')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahkesos()
    {
        return view('admin.tambahkesos');
    }
    public function editkesos($id)
    {
        $kesos = kesos::find($id);
        if (!$kesos) {
            return redirect()->route('admin.tambahkesos')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editkesos', compact('kesos'));
    }

    public function postEditkesos(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Menemukan data kesos berdasarkan ID
        $kesos = kesos::find($id);
        if (!$kesos) {
            return redirect()->route('admin.tambahkesos')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data kesos
        $kesos->nama = $request->input('nama');
        $kesos->jml = $request->input('jml');

        // Simpan ke database
        if ($kesos->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletekesos($id)
    {
        $kesos = kesos::find($id);
        $kesos->delete();
        if ($kesos) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //Kepala Keluarga
    public function kk(Request $kk)
    {
        // Validasi input
        $kk->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Simpan ke database
        kk::create([
            'nama' => $kk->nama,
            'jml' => $kk->jml,
        ]);

        // Cek apakah berhasil disimpan
        if ($kk) {
            return redirect()->route('admin.tambahkk')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahkk')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahkk()
    {
        return view('admin.tambahkk');
    }
    public function editkk($id)
    {
        $kk = kk::find($id);
        if (!$kk) {
            return redirect()->route('admin.tambahkk')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editkk', compact('kk'));
    }

    public function postEditkk(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Menemukan data kk berdasarkan ID
        $kk = kk::find($id);
        if (!$kk) {
            return redirect()->route('admin.tambahkk')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data kk
        $kk->nama = $request->input('nama');
        $kk->jml = $request->input('jml');

        // Simpan ke database
        if ($kk->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletekk($id)
    {
        $kk = kk::find($id);
        $kk->delete();
        if ($kk) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //Kehamilan
    public function kehamilan(Request $kehamilan)
    {
        // Validasi input
        $kehamilan->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Simpan ke database
        kehamilan::create([
            'nama' => $kehamilan->nama,
            'jml' => $kehamilan->jml,
        ]);

        // Cek apakah berhasil disimpan
        if ($kehamilan) {
            return redirect()->route('admin.tambahkehamilan')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahkehamilan')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahkehamilan()
    {
        return view('admin.tambahkehamilan');
    }
    public function editkehamilan($id)
    {
        $kehamilan = kehamilan::find($id);
        if (!$kehamilan) {
            return redirect()->route('admin.tambahkehamilan')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editkehamilan', compact('kehamilan'));
    }

    public function postEditkehamilan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Menemukan data kehamilan berdasarkan ID
        $kehamilan = kehamilan::find($id);
        if (!$kehamilan) {
            return redirect()->route('admin.tambahkehamilan')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data kehamilan
        $kehamilan->nama = $request->input('nama');
        $kehamilan->jml = $request->input('jml');

        // Simpan ke database
        if ($kehamilan->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletekehamilan($id)
    {
        $kehamilan = kehamilan::find($id);
        $kehamilan->delete();
        if ($kehamilan) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //pekerjaan
    public function pekerjaan(Request $pekerjaan)
    {
        // Validasi input
        $pekerjaan->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        pekerjaan::create([
            'nama' => $pekerjaan->nama,
            'lk' => $pekerjaan->lk,
            'pr' => $pekerjaan->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($pekerjaan) {
            return redirect()->route('admin.tambahpekerjaan')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahpekerjaan')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahpekerjaan()
    {
        return view('admin.tambahpekerjaan');
    }
    public function editpekerjaan($id)
    {
        $pekerjaan = pekerjaan::find($id);
        if (!$pekerjaan) {
            return redirect()->route('admin.tambahpekerjaan')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editpekerjaan', compact('pekerjaan'));
    }

    public function postEditpekerjaan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data pekerjaan berdasarkan ID
        $pekerjaan = pekerjaan::find($id);
        if (!$pekerjaan) {
            return redirect()->route('admin.tambahpekerjaan')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data pekerjaan
        $pekerjaan->nama = $request->input('nama');
        $pekerjaan->lk = $request->input('lk');
        $pekerjaan->pr = $request->input('pr');

        // Simpan ke database
        if ($pekerjaan->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletepekerjaan($id)
    {
        $pekerjaan = pekerjaan::find($id);
        $pekerjaan->delete();
        if ($pekerjaan) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //pendidikan
    public function pendidikan(Request $pendidikan)
    {
        // Validasi input
        $pendidikan->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        pendidikan::create([
            'nama' => $pendidikan->nama,
            'lk' => $pendidikan->lk,
            'pr' => $pendidikan->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($pendidikan) {
            return redirect()->route('admin.tambahpendidikan')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahpendidikan')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahpendidikan()
    {
        return view('admin.tambahpendidikan');
    }
    public function editpendidikan($id)
    {
        $pendidikan = pendidikan::find($id);
        if (!$pendidikan) {
            return redirect()->route('admin.tambahpendidikan')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editpendidikan', compact('pendidikan'));
    }

    public function postEditpendidikan(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data pendidikan berdasarkan ID
        $pendidikan = pendidikan::find($id);
        if (!$pendidikan) {
            return redirect()->route('admin.tambahpendidikan')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data pendidikan
        $pendidikan->nama = $request->input('nama');
        $pendidikan->lk = $request->input('lk');
        $pendidikan->pr = $request->input('pr');

        // Simpan ke database
        if ($pendidikan->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletependidikan($id)
    {
        $pendidikan = pendidikan::find($id);
        $pendidikan->delete();
        if ($pendidikan) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //Piramida Penduduk
    public function pp(Request $pp)
    {
        // Validasi input
        $pp->validate([
            'usia' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        pp::create([
            'usia' => $pp->usia,
            'lk' => $pp->lk,
            'pr' => $pp->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($pp) {
            return redirect()->route('admin.tambahpp')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahpp')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahpp()
    {
        return view('admin.tambahpp');
    }
    public function editpp($id)
    {
        $pp = pp::find($id);
        if (!$pp) {
            return redirect()->route('admin.tambahpp')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editpp', compact('pp'));
    }

    public function postEditpp(Request $request, $id)
    {
        $request->validate([
            'usia' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data pp berdasarkan ID
        $pp = pp::find($id);
        if (!$pp) {
            return redirect()->route('admin.tambahpp')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data pp
        $pp->usia = $request->input('usia');
        $pp->lk = $request->input('lk');
        $pp->pr = $request->input('pr');

        // Simpan ke database
        if ($pp->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletepp($id)
    {
        $pp = pp::find($id);
        $pp->delete();
        if ($pp) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //program keluarga harapan
    public function pkh(Request $pkh)
    {
        // Validasi input
        $pkh->validate([
            'nama' => 'required|string|max:255',
            'acc' => 'required|string',
            'jmlkp' => 'required|string',
        ]);

        // Simpan ke database
        pkh::create([
            'nama' => $pkh->nama,
            'acc' => $pkh->acc,
            'jmlkp' => $pkh->jmlkp,
        ]);

        // Cek apakah berhasil disimpan
        if ($pkh) {
            return redirect()->route('admin.tambahpkh')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahpkh')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahpkh()
    {
        return view('admin.tambahpkh');
    }
    public function editpkh($id)
    {
        $pkh = pkh::find($id);
        if (!$pkh) {
            return redirect()->route('admin.tambahpkh')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editpkh', compact('pkh'));
    }

    public function postEditpkh(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'acc' => 'required|string',
            'jmlkp' => 'required|string',
        ]);

        // Menemukan data pkh berdasarkan ID
        $pkh = pkh::find($id);
        if (!$pkh) {
            return redirect()->route('admin.tambahpkh')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data pkh
        $pkh->nama = $request->input('nama');
        $pkh->acc = $request->input('acc');
        $pkh->jmlkp = $request->input('jmlkp');

        // Simpan ke database
        if ($pkh->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletepkh($id)
    {
        $pkh = pkh::find($id);
        $pkh->delete();
        if ($pkh) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //raskin
    public function raskin(Request $raskin)
    {
        // Validasi input
        $raskin->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Simpan ke database
        raskin::create([
            'nama' => $raskin->nama,
            'jml' => $raskin->jml,
        ]);

        // Cek apakah berhasil disimpan
        if ($raskin) {
            return redirect()->route('admin.tambahraskin')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahraskin')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahraskin()
    {
        return view('admin.tambahraskin');
    }
    public function editraskin($id)
    {
        $raskin = raskin::find($id);
        if (!$raskin) {
            return redirect()->route('admin.tambahraskin')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editraskin', compact('raskin'));
    }

    public function postEditraskin(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jml' => 'required|string',
        ]);

        // Menemukan data raskin berdasarkan ID
        $raskin = raskin::find($id);
        if (!$raskin) {
            return redirect()->route('admin.tambahraskin')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data raskin
        $raskin->nama = $request->input('nama');
        $raskin->jml = $request->input('jml');

        // Simpan ke database
        if ($raskin->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deleteraskin($id)
    {
        $raskin = raskin::find($id);
        $raskin->delete();
        if ($raskin) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

    //status perkawinan
    public function sk(Request $sk)
    {
        // Validasi input
        $sk->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Simpan ke database
        sk::create([
            'nama' => $sk->nama,
            'lk' => $sk->lk,
            'pr' => $sk->pr,
        ]);

        // Cek apakah berhasil disimpan
        if ($sk) {
            return redirect()->route('admin.tambahsk')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahsk')->with('failed', 'Gagal menambahkan Data.');
        }
    }
    public function tambahsk()
    {
        return view('admin.tambahsk');
    }
    public function editsk($id)
    {
        $sk = sk::find($id);
        if (!$sk) {
            return redirect()->route('admin.tambahsk')->with('failed', 'Data tidak ditemukan.');
        }
        return view('admin.editsk', compact('sk'));
    }

    public function postEditsk(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'lk' => 'required|string',
            'pr' => 'required|string',
        ]);

        // Menemukan data sk berdasarkan ID
        $sk = sk::find($id);
        if (!$sk) {
            return redirect()->route('admin.tambahsk')->with('failed', 'Data tidak ditemukan.');
        }

        // Update data sk
        $sk->nama = $request->input('nama');
        $sk->lk = $request->input('lk');
        $sk->pr = $request->input('pr');

        // Simpan ke database
        if ($sk->save()) {
            return back()->with('success', 'Data berhasil diperbarui!');
        } else {
            return back()->with('failed', 'Data gagal diperbarui!');
        }
    }
    public function deletesk($id)
    {
        $sk = sk::find($id);
        $sk->delete();
        if ($sk) {
            return back()->with('success', 'Data berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus Data!');
        }
    }

}
