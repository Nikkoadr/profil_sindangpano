@extends('layouts.welcome.master')
@section('content')
<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Wisata Desa</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="{{ url('/') }}">Beranda</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Wisata</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Wisata Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <!-- Pencarian Wisata -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <form action="#" method="GET" class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Cari wisata..." required>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>

        <!-- Daftar Wisata -->
        <div class="row g-4">
            @foreach ($wisata as $row)
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                <div class="service-item bg-light h-100">
                    <a href="#" class="service-img position-relative mb-3">
                        @if($row->gambar)
                            <img class="img-fluid w-100" src="{{ asset('storage/wisata/'.$row->gambar) }}" alt="{{ $row->nama_wisata }}">
                        @else
                            <img class="img-fluid w-100" src="{{ asset('assets/img/logo.png') }}" alt="{{ $row->nama_wisata }}">
                        @endif
                        <h4 class="px-2">{{ $row->nama_wisata }}</h4>
                    </a>
                    <p class="px-3 mb-1"><i class="fas fa-map-marker-alt text-primary"></i> {{ $row->alamat }}</p>
                    <p class="px-3 mb-2"><i class="fas fa-phone text-primary"></i> {{ $row->kontak }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Wisata End -->
@endsection
