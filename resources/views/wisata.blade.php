@extends('layouts.welcome.master')
@section('content')

<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Wisata Sindangpano</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="#">Beranda</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Wisata Sindangpano</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <!-- Search -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <input type="text" id="search-wisata" class="form-control" placeholder="Cari Wisata...">
        </div>
    </div>

    <!-- Wisata List -->
    <div class="row g-4" id="wisata-list">
        @foreach ($wisata as $row)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img class="card-img-top" 
                        src="{{ $row->gambar ? asset('storage/wisata/'.$row->gambar) : asset('assets/img/logo.png') }}" 
                        alt="{{ $row->nama_wisata }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->nama_wisata }}</h5>
                        <p>{{ Str::limit($row->deskripsi, 100) }}</p>
                    </div>
                    <div class="card-footer small text-muted">
                        📍 {{ $row->alamat }} <br>
                        ☎ {{ $row->kontak }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function(){
    $('#search-wisata').on('keyup', function(){
        let q = $(this).val();
        $.get("{{ route('wisata.search') }}", {q:q}, function(res){
            let html = '';
            if(res.length > 0){
                res.forEach(row => {
                    let img = row.gambar 
                        ? "{{ asset('storage/wisata') }}/" + row.gambar 
                        : "{{ asset('assets/img/logo.png') }}";
                    html += `
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <img class="card-img-top" src="${img}" alt="${row.nama_wisata}">
                                <div class="card-body">
                                    <h5 class="card-title">${row.nama_wisata}</h5>
                                    <p>${row.deskripsi ? row.deskripsi.substring(0,100)+'...' : ''}</p>
                                </div>
                                <div class="card-footer small text-muted">
                                    📍 ${row.alamat ?? '-'} <br>
                                    ☎ ${row.kontak ?? '-'}
                                </div>
                            </div>
                        </div>`;
                });
            } else {
                html = `<div class="col-12 text-center"><p>Tidak ada wisata ditemukan.</p></div>`;
            }
            $('#wisata-list').html(html);
        });
    });
});
</script>
@endsection
