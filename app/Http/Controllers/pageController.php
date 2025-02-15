<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;
use App\Models\berita;
use App\Models\agenda;
use App\Models\galerikegiatan;

class pageController extends Controller
{
    public function kontak(Request $kontak)
    {
        
        // Validasi input
        $kontak->validate([
            'name' => 'required|string|max:255',
            'nohp' => [
                'required',
                'string',
                'max:15',
                'regex:/^62\d{8,11}$/', // Harus diawali dengan 62 dan panjang total 10-13 digit
            ],
            'alamat' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ], [
            'name.required' => 'Kolom ini harus diisi.',
            'nohp.required' => 'Kolom ini harus diisi.',
            'nohp.regex' => 'Pastikan nomor hp diawali dengan 628xxx.',
            'alamat.required' => 'Kolom ini harus diisi.',
            'subject.required' => 'Kolom ini harus diisi.',
            'message.required' => 'Kolom ini harus diisi.',
        ]);

        // Simpan data ke database
        kontak::create([
            'name' => $kontak->name,
            'nohp' => $kontak->nohp,
            'alamat' => $kontak->alamat,
            'subject' => $kontak->subject,
            'message' => $kontak->message,
        ]);

        // Redirect kembali dengan notifikasi sukses
        return redirect()->back()->with('success', 'Pesan Anda telah terkirim.');
    }

    public function detailBerita($slug)
    {
        $berita = berita::where('slug', $slug)->firstOrFail();
        return view('publikasi.detailberita', compact('berita'));
    }

    public function detailAgenda($slug)
    {
        $agenda = agenda::where('slug', $slug)->firstOrFail();
        return view('publikasi.detailagenda', compact('agenda'));
    }

    public function detailGaleri($slug)
    {
        $galerikegiatan = galerikegiatan::where('slug', $slug)->firstOrFail();
        return view('publikasi.detailgaleri', compact('galerikegiatan'));
    }
}
