<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Umkm;

class Show_guestController extends Controller
{
    public function show_berita_guest($id)
    {
        $berita = Berita::findOrFail($id);
        return view('show_berita', compact('berita'));
    }

    public function show_umkm($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('show_umkm', compact('umkm'));
    }
}
