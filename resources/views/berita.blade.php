@extends('layouts.welcome.master')
@section('content')
<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Berita Terbaru</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="#">Beranda</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Berita Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <!-- Pencarian Berita -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <form action="/berita/cari" method="GET" class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Cari berita..." required>
                    <button type="submit" class="btn btn-primary">Cari</button>
                </form>
            </div>
        </div>

            <!-- Daftar 6 Berita -->
            <div class="row g-4">
                @foreach ($berita as $row)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('/storage/berita/'.$row->gambar) }}" alt="{{ $row->judul }}">
                            <h4 class="px-2">{{ $row->judul }}</h4>
                        </a>
                        <p class="px-3 pb-3">{{ Str::limit(strip_tags($row->isi), 120, '...') }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Berita End -->

@endsection