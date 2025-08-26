@extends('layouts.welcome.master')
@section('content')
<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">UMKM Desa</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">UMKM</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- UMKM Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <!-- Pencarian UMKM -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <form action="#" method="GET" class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Cari UMKM..." required>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>

        <!-- Daftar UMKM -->
        <div class="row g-4">
            @foreach ($umkm as $row)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item bg-light h-100">
                    <a href="#" class="service-img position-relative mb-3">
                        @if($row->gambar)
                            <img class="img-fluid w-100" src="{{ asset('storage/umkm/'.$row->gambar) }}" alt="{{ $row->nama_umkm }}">
                        @else
                            <img class="img-fluid w-100" src="{{ asset('assets/img/logo.png') }}" alt="{{ $row->nama_umkm }}">
                        @endif
                        <h4 class="px-2">{{ $row->nama_umkm }}</h4>
                    </a>
                    <p class="px-3 mb-1"><i class="fas fa-map-marker-alt text-primary"></i> {{ $row->alamat }}</p>
                    <p class="px-3 mb-2"><i class="fas fa-phone text-primary"></i> {{ $row->kontak }}</p>
                    <p class="px-3 pb-3">{{ Str::limit(strip_tags($row->deskripsi), 100, '...') }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- UMKM End -->
@endsection
