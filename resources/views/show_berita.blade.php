@extends('layouts.welcome.master')
@section('content')
    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Detail Berita</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="{{ route('berita.index') }}">Berita</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">{{ $berita->judul }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Berita Detail Start -->
    <div class="container-fluid py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-5">
                        <h1 class="mb-3">{{ $berita->judul }}</h1>
                        <p class="text-muted">
                            <i class="bi bi-calendar-event me-2"></i>{{ $berita->created_at->format('d M Y') }}
                            &nbsp; | &nbsp;
                            <i class="bi bi-person-circle me-2"></i> {{ $berita->penulis ?? 'Admin' }}
                        </p>
                    </div>
                    <div class="mb-4 text-center">
                        @if($berita->gambar)
                            <img src="{{ asset('storage/berita/'.$berita->gambar) }}" alt="{{ $berita->judul }}" class="img-fluid rounded shadow">
                        @endif
                    </div>
                    <div class="content-berita">
                        {!! $berita->isi !!}
                    </div>
                    <div class="mt-5 text-center">
                        <a href="{{ route('berita.index') }}" class="btn btn-primary py-3 px-4">Kembali ke Berita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Berita Detail End -->
@endsection
