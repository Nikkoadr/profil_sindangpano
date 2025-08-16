<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('berita');
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
    'verify' => false,]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
