<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $umkm = Umkm::orderBy('created_at', 'desc')->get();
        return view('admin.umkm.index', compact('umkm'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'alamat' => 'required',
            'kontak' => 'required',
            'produk' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $filename = $request->file('gambar')->hashName();
        $request->file('gambar')->storeAs('umkm', $filename, 'public');

        Umkm::create([
            'nama_umkm' => $validated['nama_umkm'],
            'alamat'    => $validated['alamat'],
            'kontak'    => $validated['kontak'],
            'produk'    => $validated['produk'],
            'deskripsi' => $validated['deskripsi'],
            'gambar'    => $filename,
        ]);

        return redirect()->route('umkm.index')
            ->with('success', 'UMKM berhasil ditambahkan.');
    }


    public function edit(string $id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'alamat' => 'required',
            'kontak' => 'required',
            'produk' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $umkm = Umkm::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($umkm->gambar && Storage::disk('public')->exists('umkm/' . $umkm->gambar)) {
                Storage::disk('public')->delete('umkm/' . $umkm->gambar);
            }

            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->storeAs('umkm', $filename, 'public');
            $validated['gambar'] = $filename;
        } else {
            $validated['gambar'] = $umkm->gambar;
        }

        $umkm->update([
            'nama_umkm' => $validated['nama_umkm'],
            'alamat' => $validated['alamat'],
            'kontak' => $validated['kontak'],
            'produk' => $validated['produk'],
            'deskripsi' => $validated['deskripsi'],
            'gambar' => $validated['gambar'],
        ]);

        return redirect()->route('umkm.index')
            ->with('success', 'UMKM berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);

        if ($umkm->gambar && Storage::disk('public')->exists($umkm->gambar)) {
            Storage::disk('public')->delete($umkm->gambar);
        }

        $umkm->delete();

        return redirect()->route('umkm.index')->with('success', 'UMKM berhasil dihapus.');
    }
}
