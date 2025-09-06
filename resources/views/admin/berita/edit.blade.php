@extends('layouts.admin.master')
@section('title', 'Edit Berita')

@section('link')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Edit Berita</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Form Edit Berita</h3>
                </div>
                <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ old('judul', $berita->judul) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Isi</label>
                            <textarea name="isi" id="editorIsi" rows="5" class="form-control" required>{{ old('isi', $berita->isi) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="gambar">Upload Gambar</label>
                            <div class="input-group mb-2">
                                <div class="custom-file">
                                    <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                    <label class="custom-file-label" for="gambar">Pilih file</label>
                                </div>
                            </div>
                            @if($berita->gambar)
                                <img src="{{ asset('storage/berita/'.$berita->gambar) }}" width="120" class="mt-2 rounded shadow">
                            @endif
                            @error('gambar')
                                <small class="text-danger d-block">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" value="{{ $berita->penulis }}" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="updated_at" class="form-control" value="{{ $berita->updated_at->format('Y-m-d') }}" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });

    ClassicEditor
        .create(document.querySelector('#editorIsi'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
