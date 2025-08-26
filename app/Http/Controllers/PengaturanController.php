<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengaturanController extends Controller
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
        $pengaturan = Pengaturan::first();
        return view('admin.pengaturan.index', compact('pengaturan'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama'    => 'required|string|max:255',
            'alamat'  => 'nullable|string',
            'no_telp' => 'nullable|string|max:50',
            'email'   => 'nullable|email|max:255',
            'logo'    => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $pengaturan = Pengaturan::findOrFail($id);

        // handle logo
        if ($request->hasFile('logo')) {
            // hapus logo lama jika ada
            if ($pengaturan->logo && Storage::disk('public')->exists('logo/' . $pengaturan->logo)) {
                Storage::disk('public')->delete('logo/' . $pengaturan->logo);
            }

            $filename = $request->file('logo')->hashName();
            $request->file('logo')->storeAs('logo', $filename, 'public');
            $validated['logo'] = $filename;
        } else {
            $validated['logo'] = $pengaturan->logo;
        }

        $pengaturan->update($validated);

        return redirect()->back()->with('success', 'Pengaturan berhasil diperbarui!');
    }
}
