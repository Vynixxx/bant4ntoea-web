<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Admin;
use App\Models\User;
use App\Models\agenda;
use App\Models\berita;
use App\Models\galerikegiatan;
use App\Models\kontak;
use App\Models\penduduk;
use Illuminate\Support\Str;


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
}
