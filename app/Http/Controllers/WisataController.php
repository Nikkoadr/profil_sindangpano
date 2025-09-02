<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
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
        $wisata = Wisata::orderBy('created_at', 'desc')->get();
        return view('admin.wisata.index', compact('wisata'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'alamat' => 'required',
            'kontak' => 'required',
            'gambar' => 'required|image',
        ]);

        $filename = $request->file('gambar')->hashName();
        $request->file('gambar')->storeAs('wisata', $filename, 'public');

        Wisata::create([
            'nama_wisata' => $validated['nama_wisata'],
            'alamat'    => $validated['alamat'],
            'kontak'    => $validated['kontak'],
            'gambar'    => $filename,
        ]);

        return redirect()->route('wisata.index')
            ->with('success', 'wisata berhasil ditambahkan.');
    }


    public function edit(string $id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_wisata' => 'required|string|max:255',
            'alamat' => 'required',
            'kontak' => 'required',
            'gambar' => 'nullable|image',
        ]);

        $wisata = Wisata::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($wisata->gambar && Storage::disk('public')->exists('wisata/' . $wisata->gambar)) {
                Storage::disk('public')->delete('wisata/' . $wisata->gambar);
            }

            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->storeAs('wisata', $filename, 'public');
            $validated['gambar'] = $filename;
        } else {
            $validated['gambar'] = $wisata->gambar;
        }

        $wisata->update([
            'nama_wisata' => $validated['nama_wisata'],
            'alamat' => $validated['alamat'],
            'kontak' => $validated['kontak'],
            'gambar' => $validated['gambar'],
        ]);

        return redirect()->route('wisata.index')
            ->with('success', 'wisata berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        if ($wisata->gambar && Storage::disk('public')->exists($wisata->gambar)) {
            Storage::disk('public')->delete($wisata->gambar);
        }

        $wisata->delete();

        return redirect()->route('wisata.index')->with('success', 'wisata berhasil dihapus.');
    }
}
