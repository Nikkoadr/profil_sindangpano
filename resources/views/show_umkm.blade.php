@extends('layouts.welcome.master')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Detail UMKM</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="{{ route('umkm.index') }}">UMKM</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">{{ $umkm->nama_umkm }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- UMKM Detail Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    
                    <!-- Nama UMKM -->
                    <div class="text-center mb-5">
                        <h1 class="mb-3">{{ $umkm->nama_umkm }}</h1>
                        <h5 class="text-muted">Produk: {{ $umkm->produk }}</h5>
                    </div>

                    <!-- Carousel Foto Varian -->
                    <div id="carouselVarian" class="carousel slide mb-5" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselVarian" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselVarian" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    <!-- Deskripsi Umum -->
                    <div class="mb-4">
                        <h3 class="fw-bold">Tentang {{ $umkm->nama_umkm }}</h3>
                        <p>{{ $umkm->deskripsi }}</p>
                    </div>
                    
                    <!-- Deskripsi Per Varian -->
                    @if($umkm->gambar == null)
                        <div class="alert alert-warning" role="alert">
                            Gambar UMKM tidak tersedia.
                        </div>
                    @else
                        <div class="mb-4">
                            @if($umkm->nama_umkm == 'Emping Hafilah') <h4 class="fw-bold">Varian Rasa : Original dan Pedas Manis</h4> @endif
                            <div class="row g-4">
                                    <div class="col-md-4">
                                        <div class="card shadow-sm h-100">
                                        <img src="{{ asset('storage/umkm/'.$umkm->gambar) }}" 
                                        alt="Varian Rasa " 
                                        class="d-block w-100 img-fluid rounded shadow">
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endif

                    <!-- Informasi Tambahan -->
                    <div class="mb-4">
                        <h4 class="fw-bold">Informasi UMKM</h4>
                        <ul class="list-unstyled">
                            <li><strong>NIB:</strong> @if($umkm->nama_umkm == 'Emping Hafilah') 1808250003825 @else - @endif</li>
                            <li><strong>Alamat:</strong> {{ $umkm->alamat ?? '-' }}</li>
                            <li><strong>Kontak:</strong> {{ $umkm->kontak ?? '-' }}</li>
                        </ul>
                        <div class="d-flex gap-3 mt-3">
                            @if($umkm->nama_umkm == 'Emping Hafilah') <img src="{{ asset('assets/img/halal_emping.png') }}" alt="Logo Halal" style="height:150px;"> @endif
                        </div>
                    </div>
                    <!-- Tombol Kembali -->
                    <div class="mt-5 text-center">
                        <a href="/umkm" class="btn btn-primary py-3 px-4">Kembali ke UMKM</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- UMKM Detail End -->
@endsection
