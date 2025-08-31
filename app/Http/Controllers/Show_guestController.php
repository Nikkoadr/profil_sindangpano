<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class Show_guestController extends Controller
{
    public function show_berita_guest($id)
    {
        $berita = Berita::findOrFail($id);
        return view('show_berita', compact('berita'));
    }
}
