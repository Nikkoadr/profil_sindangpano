<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Umkm;
use App\Models\Wisata;

class PencarianController extends Controller
{
    public function search_berita(Request $request)
    {
        $q = $request->get('q');
        $berita = Berita::where('judul', 'like', "%$q%")
            ->orWhere('isi', 'like', "%$q%")
            ->get(['id', 'judul', 'isi', 'gambar']);

        return response()->json($berita);
    }
    public function search_umkm(Request $request)
    {
        $q = $request->get('q');
        $umkm = Umkm::where('nama_umkm', 'like', "%$q%")
            ->orWhere('produk', 'like', "%$q%")
            ->get(['id', 'nama_umkm', 'produk', 'deskripsi', 'gambar']);

        return response()->json($umkm);
    }

    public function search_wisata(Request $request)
    {
        $q = $request->q;
        $data = Wisata::where('nama_wisata', 'like', "%$q%")
            ->orWhere('deskripsi', 'like', "%$q%")
            ->orWhere('alamat', 'like', "%$q%")
            ->get();

        return response()->json($data);
    }
}
