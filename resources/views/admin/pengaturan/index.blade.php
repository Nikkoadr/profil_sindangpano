@extends('layouts.admin.master')
@section('title', 'Pengaturan Aplikasi')

@section('link')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@endsection

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Pengaturan Aplikasi</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-secondary">
                    <h3 class="card-title">Form Pengaturan</h3>
                </div>

                <form action="{{ route('pengaturan.update', $pengaturan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Logo</label>
                            <div class="mb-2">
                                @if($pengaturan->logo)
                                    <img src="{{ asset('storage/logo/'.$pengaturan->logo) }}" width="120" class="img-thumbnail">
                                @else
                                    <img src="{{ asset('assets/img/logo.png') }}" width="120" class="img-thumbnail">
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="logo" class="custom-file-input" id="logo">
                                    <label class="custom-file-label" for="logo">Pilih file</label>
                                </div>
                            </div>
                            @error('logo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nama Aplikasi</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama', $pengaturan->nama) }}" required>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" rows="2">{{ old('alamat', $pengaturan->alamat) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>No. Telepon</label>
                            <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $pengaturan->no_telp) }}">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email', $pengaturan->email) }}">
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan Perubahan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });

    // Notifikasi sukses/error
    @if(session('success'))
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
    @endif

    @if ($errors->any())
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: 'Terjadi kesalahan validasi!',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
    @endif
</script>
@endsection
