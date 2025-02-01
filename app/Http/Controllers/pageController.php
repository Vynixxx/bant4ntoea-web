<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontak;

class pageController extends Controller
{
    public function kontak(Request $kontak)
    {
        // Validasi input
        $kontak->validate([
            'name' => 'required|string|max:255',
            'nohp' => 'required|string|max:15',
            'alamat' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
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
}
