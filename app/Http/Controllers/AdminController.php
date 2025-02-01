<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Admin;
use App\Models\User;
use App\Models\agenda;
use App\Models\berita;
use App\Models\kontak;


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
        if(Auth::check()&& Auth::user()->role === 'admin'){
            return view('admin.dashboard');
        }

        return redirect('/');
           
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

    public function adminPengaduan()
    {
        $kontak = kontak::get();
        return view('admin.pengaduan', compact('kontak'));
    }

    //tambah menambah
    public function agenda(Request $agenda)
    {
        // Validasi input
        $agenda->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'keterangan' => 'required|string',
        ]);

        // Simpan ke database
        agenda::create([
            'judul' => $agenda->judul,
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
    public function berita(Request $berita)
    {
        // Validasi input
        $berita->validate([
            'judul' => 'required|string|max:255',
            'berita' => 'required|string',
            'gambar' => 'required|image|max:5120', // Maksimal ukuran 5MB
            'tanggal' => 'required|date',
            'tag' => 'required|string',
        ]);
        // Menyimpan berita ke database
        $berita = new Berita;
        $berita->judul = $validated['judul'];
        $berita->berita = $validated['berita'];
        $berita->tanggal = $validated['tanggal'];
        $berita->tag = $validated['tag'];

        // Proses penyimpanan gambar
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // Menyimpan gambar ke folder 'images/'
            $file->move(public_path('images'), $filename);
            // Menyimpan nama gambar ke database
            $berita->gambar = $filename;
        }

        // Cek apakah berhasil disimpan
        if ($berita) {
            return redirect()->route('admin.tambahberita')->with('success', 'Berita berhasil ditambahkan!');
        } else {
            return redirect()->route('admin.tambahberita')->with('failed', 'Gagal menambahkan berita.');
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
            'name' => 'required',
            'email' => 'required',
            'spesialis' => 'required',
        ]);
        $agenda = agenda::find($id);
        $agenda->name = $request->name;
        $agenda->email = $request->email;
        $agenda->spesialis = $request->spesialis;

        $agenda->save();
        if ($agenda) {
            return back()->with('success', 'agenda berhasil diupdate!');
        } else {
            return back()->with('failed', 'agenda gagal diupdate!');
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
}
