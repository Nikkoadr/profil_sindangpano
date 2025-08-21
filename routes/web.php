<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Models\Berita;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/berita', function () {
    $berita = Berita::latest()->take(6)->get();
    return view('berita', compact('berita'));
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
Route::resource('/home/berita', BeritaController::class);
