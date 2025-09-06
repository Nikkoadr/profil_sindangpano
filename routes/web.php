<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\PengaturanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Berita;
use App\Models\Wisata;
use App\Models\Umkm;
use App\Models\Pengaturan;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\Show_guestController;

Route::get('/', function () {
    $pengaturan = Pengaturan::first();
    $berita = Berita::orderBy('updated_at', 'desc')->take(6)->get();;
    $wisata = Wisata::latest()->take(4)->get();
    $umkm = Umkm::latest()->take(4)->get();
    return view('welcome', compact('berita', 'wisata', 'umkm', 'pengaturan'));
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/berita/search', [PencarianController::class, 'search_berita'])->name('berita.search');
Route::get('/umkm/search', [PencarianController::class, 'search_umkm'])->name('umkm.search');
Route::get('/wisata/search', [PencarianController::class, 'search_wisata'])->name('wisata.search');

Route::get('/berita', function () {
    $berita = Berita::orderBy('updated_at', 'desc')->take(6)->get();
    return view('berita', compact('berita'));
});
Route::get('/wisata', function () {
    $wisata = Wisata::latest()->take(6)->get();
    return view('wisata', compact('wisata'));
});
Route::get('/umkm', function () {
    $umkm = Umkm::latest()->take(6)->get();
    return view('umkm', compact('umkm'));
});

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/struktur', function () {
    return view('struktur');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/welcome/berita/show/{id}', [Show_guestController::class, 'show_berita_guest'])->name('berita.show_berita_guest');

Route::resource('/home/berita', BeritaController::class);
Route::resource('/home/umkm', UmkmController::class);
Route::resource('/home/wisata', WisataController::class);
Route::resource('/home/pengaturan', PengaturanController::class)->only(['index', 'update']);
