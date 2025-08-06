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
                <!-- Berita 1 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 1">
                            <h4 class="px-2">Gotong Royong Bersihkan Jalan Desa</h4>
                        </a>
                        <p class="px-3 pb-3">Warga Desa Sindangpano mengadakan kegiatan bersih desa dalam rangka menyambut HUT Kemerdekaan RI ke-80.</p>
                    </div>
                </div>
                <!-- Berita 2 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 2">
                            <h4 class="px-2">Musyawarah Rencana Pembangunan</h4>
                        </a>
                        <p class="px-3 pb-3">Pemerintah Desa menggelar Musrenbang dalam merancang pembangunan desa tahun anggaran 2026.</p>
                    </div>
                </div>
                <!-- Berita 3 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 3">
                            <h4 class="px-2">Pelatihan UMKM untuk Pemuda</h4>
                        </a>
                        <p class="px-3 pb-3">Karang Taruna bekerja sama dengan Dinas Perdagangan menggelar pelatihan kewirausahaan digital.</p>
                    </div>
                </div>
                <!-- Berita 4 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 4">
                            <h4 class="px-2">Launching Website Desa</h4>
                        </a>
                        <p class="px-3 pb-3">Website resmi Desa Sindangpano diluncurkan untuk meningkatkan layanan informasi publik.</p>
                    </div>
                </div>
                <!-- Berita 5 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 5">
                            <h4 class="px-2">Lomba 17 Agustus Kembali Digelar</h4>
                        </a>
                        <p class="px-3 pb-3">Berbagai perlombaan rakyat akan digelar oleh panitia kemerdekaan di balai desa Sindangpano.</p>
                    </div>
                </div>
                <!-- Berita 6 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 6">
                            <h4 class="px-2">Posyandu Balita Aktif Kembali</h4>
                        </a>
                        <p class="px-3 pb-3">Kader kesehatan menghidupkan kembali kegiatan Posyandu dengan pemantauan gizi rutin balita.</p>
                    </div>
                </div>
                <!-- Berita 7 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 6">
                            <h4 class="px-2">Posyandu Balita Aktif Kembali</h4>
                        </a>
                        <p class="px-3 pb-3">Kader kesehatan menghidupkan kembali kegiatan Posyandu dengan pemantauan gizi rutin balita.</p>
                    </div>
                </div>
                <!-- Berita 8 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 6">
                            <h4 class="px-2">Posyandu Balita Aktif Kembali</h4>
                        </a>
                        <p class="px-3 pb-3">Kader kesehatan menghidupkan kembali kegiatan Posyandu dengan pemantauan gizi rutin balita.</p>
                    </div>
                </div>
                <!-- Berita 9 -->
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light h-100">
                        <a href="#" class="service-img position-relative mb-3">
                            <img class="img-fluid w-100" src="{{ asset('assets/img/newsletter.jpg') }}" alt="Berita 6">
                            <h4 class="px-2">Posyandu Balita Aktif Kembali</h4>
                        </a>
                        <p class="px-3 pb-3">Kader kesehatan menghidupkan kembali kegiatan Posyandu dengan pemantauan gizi rutin balita.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Berita End -->


@endsection