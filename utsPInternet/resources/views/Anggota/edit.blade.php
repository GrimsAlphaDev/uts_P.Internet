@extends('layouts.app')

@section('Jumbotron', 'Edit Anggota')

@section('content')

    <div class="card d-flex p-2">
        <form action="">
            @csrf
            <center>
                <h2>Edit Data Anggota</h2>
            </center>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text"
                    class="form-control border border-1 border-black
            @error('nama') is-invalid @enderror"
                    value="{{ old('nama', $anggota->nama) }}" id="nama" placeholder="Masukan Nama">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telefon</label>
                <input type="text"
                    class="form-control border border-1 border-black
            @error('no_telp') is-invalid @enderror"
                    value="{{ old('no_telp', $anggota->no_telp) }}" id="no_telp" placeholder="Masukan No Telefon">
                @error('no_telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat"
                    class="form-control border border-1 border-black
            @error('alamat') is-invalid @enderror"
                    id="alamat" cols="30" rows="10">{{ old('alamat', $anggota->alamat) }}</textarea>
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-info" type="submit"> SIMPAN </button>

        </form>

    @endsection
