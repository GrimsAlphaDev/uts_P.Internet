@extends('layouts.app')

@section('jumbotron', 'Anggota')
@section('subtext', 'Tambah Anggota')

@section('content')
    <div class="card d-flex p-2">
        <form method="POST" action="/teman">

            @csrf
            <h2 class="text-center">Masukan Data Anggota</h2>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text"
                    class="form-control border border-1 border-black ps-2 
                @error('nama') is-invalid @enderror"
                    value="{{ old('nama') }}" id="nama" name="nama" placeholder="Masukan Nama" autofocus>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telefon</label>
                <input type="text" class="form-control border border-1 border-black ps-2
                @error('no_telp') is-invalid @enderror " value="{{ old('no_telp') }}" id="no_telp"
                    placeholder="Masukan No Telefon" name="no_telp">
                    @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control border border-1 border-black ps-2 
                @error('alamat') is-invalid @enderror" id="alamat" cols="30" 
                    rows="10" name="alamat">{{ old('alamat') }}</textarea>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-info"> SIMPAN </button>

        </form>
    </div>

@endsection
