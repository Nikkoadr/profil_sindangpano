<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
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
        $berita = Berita::orderBy('created_at', 'desc')->get();
        return view('admin.berita.index', compact('berita'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        $filename = $request->file('gambar')->hashName();
        $request->file('gambar')->storeAs('berita', $filename, 'public');

        Berita::create([
            'judul'   => $validated['judul'],
            'slug'    => Str::slug($validated['judul']),
            'isi'     => $validated['isi'],
            'gambar'  => $filename,
            'penulis' => Auth::user()->name,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }


    public function edit(string $id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'updated_at' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            
        ]);

        $berita = Berita::findOrFail($id);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists('berita/' . $berita->gambar)) {
                Storage::disk('public')->delete('berita/' . $berita->gambar);
            }

            $filename = $request->file('gambar')->hashName();
            $request->file('gambar')->storeAs('berita', $filename, 'public');
            $validated['gambar'] = $filename;
        } else {
            $validated['gambar'] = $berita->gambar;
        }

        $berita->update([
            'judul' => $validated['judul'],
            'isi' => $validated['isi'],
            'gambar' => $validated['gambar'],
            'updated_at' => $validated['updated_at'],
            'penulis' => Auth::user()->name,
        ]);

        return redirect()->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui!');
    }


    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
