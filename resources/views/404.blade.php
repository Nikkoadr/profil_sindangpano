@extends('layouts.welcome.master')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">404 Error</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Welcome</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">404 Error</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
        <!-- 404 Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Halaman Tidak Ada</h1>
                    <p class="mb-4">Maaf, halaman yang Anda cari tidak ada di situs web kami! Silakan kunjungi halaman utama kami atau coba gunakan mesin pencari.</p>
                    <a class="btn btn-primary py-3 px-4" href="/">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection