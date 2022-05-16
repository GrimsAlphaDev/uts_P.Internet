@extends('layouts.app')

@section('Jumbotron', 'Edit Group')

@section('content')

    <div class="card d-flex p-2">
        <form action="/group/{{ $group->id }}" method="post">
            @method('PUT')
            @csrf
           
                <h2 class="text-center">Edit Data Group</h2>

            <div class="mb-3">
                <label for="nama_grup" class="form-label">Nama Group</label>
                <input type="text"
                    class="form-control border border-1 border-black ps-2
            @error('nama_grup') is-invalid @enderror"
                    value="{{ old('nama_grup', $group->nama_grup) }}" id="nama_grup" name="nama_grup" placeholder="Masukan nama_grup">
                @error('nama_grup')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <textarea name="deskripsi"
                    class="form-control border border-1 border-black ps-2
            @error('deskripsi') is-invalid @enderror"
                    id="deskripsi" cols="30" rows="10">{{ old('deskripsi', $group->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-info" type="submit"> SIMPAN </button>

        </form>

    @endsection
