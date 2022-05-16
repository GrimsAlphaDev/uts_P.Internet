@extends('layouts.app')

@section('Jumbotron', 'Tambah Grup')

@section('content')

    <div class="card d-flex p-2">
        <form action="">
            @csrf
           
                <h2 class="text-center">Masukan Data Grup</h2>

            <div class="mb-3">
                <label for="nama_grup" class="form-label">nama_grup</label>
                <input type="text" class="form-control border border-1 border-black" id="nama_grup" name="nama_grup" placeholder="Masukan Nama Grup">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">deskripsi</label>
                <textarea name="deskripsi" class="form-control border border-1 border-black" id="deskripsi" cols="30" rows="10"></textarea>
            </div>

            <button class="btn btn-info" > SIMPAN </button>

        </form>
    </div>

@endsection
