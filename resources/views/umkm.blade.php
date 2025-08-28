@extends('layouts.welcome.master')
@section('content')

<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <h1 class="display-3 text-white">UMKM Desa</h1>
    </div>
</div>

<div class="container py-5">
    <!-- Search -->
    <div class="row mb-4">
        <div class="col-md-8 mx-auto">
            <input type="text" id="search-umkm" class="form-control" placeholder="Cari UMKM...">
        </div>
    </div>

    <!-- UMKM List -->
    <div class="row g-4" id="umkm-list">
        @foreach ($umkm as $row)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm">
                    <img class="card-img-top" 
                        src="{{ $row->gambar ? asset('storage/umkm/'.$row->gambar) : asset('assets/img/logo.png') }}" 
                        alt="{{ $row->nama_umkm }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $row->nama_umkm }}</h5>
                        <p class="card-text"><strong>Produk:</strong> {{ $row->produk }}</p>
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
    $('#search-umkm').on('keyup', function(){
        let q = $(this).val();
        $.get("{{ route('umkm.search') }}", {q:q}, function(res){
            let html = '';
            if(res.length > 0){
                res.forEach(row => {
                    let img = row.gambar 
                        ? "{{ asset('storage/umkm') }}/" + row.gambar 
                        : "{{ asset('assets/img/logo.png') }}";
                    html += `
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <img class="card-img-top" src="${img}" alt="${row.nama_umkm}">
                                <div class="card-body">
                                    <h5 class="card-title">${row.nama_umkm}</h5>
                                    <p class="card-text"><strong>Produk:</strong> ${row.produk ?? ''}</p>
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
                html = `<div class="col-12 text-center"><p>Tidak ada UMKM ditemukan.</p></div>`;
            }
            $('#umkm-list').html(html);
        });
    });
});
</script>
@endsection
