@extends('layouts.admin.master')
@section('title', 'Edit Berita')

@section('link')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Edit wisata</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Form Edit wisata</h3>
                </div>
                <form action="{{ route('wisata.update', $wisata->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama wisata</label>
                            <input type="text" name="nama_wisata" class="form-control" value="{{ old('nama_wisata', $wisata->nama_wisata) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $wisata->alamat) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Kontak</label>
                            <input type="text" name="kontak" class="form-control" value="{{ old('kontak', $wisata->kontak) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Upload Gambar</label>
                            <div class="input-group mb-2">
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                    <label class="custom-file-label" for="gambar">Pilih file</label>
                                </div>
                            </div>
                            @if($wisata->gambar)
                                <img src="{{ asset('storage/wisata/'.$wisata->gambar) }}" width="120" class="mt-2 rounded shadow">
                            @endif
                            @error('gambar')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('wisata.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
