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

        <!-- Pencarian -->
        <div class="row mb-4">
            <div class="col-md-8 mx-auto">
                <div class="input-group">
                    <input type="text" id="search" class="form-control" placeholder="Cari berita...">
                </div>
            </div>
        </div>

        <!-- Daftar Berita -->
        <div class="row g-4" id="berita-list">
            @foreach ($berita as $row)
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100">
                        <div class="service-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" 
                                 src="{{ $row->gambar ? asset('storage/berita/'.$row->gambar) : asset('assets/img/logo.png') }}" 
                                 alt="{{ $row->judul }}">
                        </div>
                        <div class="p-4">
                            <h4 class="mb-3">{{ $row->judul }}</h4>
                            <p>{{ Str::limit(strip_tags($row->isi), 100, '...') }}</p>
                            <a href="{{ route('berita.show_berita_guest', $row->id) }}" class="btn btn-primary rounded-pill">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
<!-- Berita End -->

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $('#search').on('keyup', function(){
        let query = $(this).val();

        $.ajax({
            url: "{{ route('berita.search') }}",
            type: "GET",
            data: { q: query },
            success: function(res){
                let html = "";
                if(res.length > 0){
                    res.forEach(function(row){
                        let img = row.gambar 
                            ? "{{ asset('storage/berita') }}/" + row.gambar 
                            : "{{ asset('assets/img/logo.png') }}";

                        html += `
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="service-item bg-light rounded h-100">
                                    <div class="service-img position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="${img}" alt="${row.judul}">
                                    </div>
                                    <div class="p-4">
                                        <h4 class="mb-3">${row.judul}</h4>
                                        <p>${row.isi.substring(0,100)}...</p>
                                        <a href="/berita/${row.id}" class="btn btn-primary rounded-pill">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>`;
                    });
                } else {
                    html = `<div class="col-12 text-center"><p>Tidak ada berita ditemukan.</p></div>`;
                }
                $('#berita-list').html(html);
            }
        });
    });
});
</script>
@endsection
