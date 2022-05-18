@extends('layouts.app')

@section('jumbotron', 'Grup')
@section('subtext', 'Tambah Grup')

@section('content')

    <div class="card d-flex p-2">
        <form action="/group" method="POST">
            @csrf

            <h2 class="text-center">Masukan Data Grup</h2>

            <div class="mb-3">
                <label for="nama_grup" class="form-label">Nama Grup</label>
                <input type="text"
                    class="form-control border border-1 border-black ps-2    @error('nama_grup') is-invalid @enderror"
                    id="nama_grup" value="{{ old('nama') }}" name="nama_grup" placeholder="Masukan Nama Grup">
                @error('nama_grup')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <textarea name="deskripsi"
                    class="form-control border border-1 border-black ps-2 @error('deskripsi') is-invalid @enderror"
                    id="deskripsi" cols="30" rows="10">{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-info" type="submit"> SIMPAN </button>

        </form>
    </div>

@endsection
