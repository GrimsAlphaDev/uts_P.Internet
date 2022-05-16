@extends('layouts.app')

@section('Jumbotron', 'Anggota')

@section('content')
    <div class="card d-flex p-2">
        <form action="">
            @csrf
            <center>
                <h2>Masukan Data Anggota</h2>
            </center>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control border border-1 border-black ps-2" id="nama" placeholder="Masukan Nama">
            </div>

            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telefon</label>
                <input type="text" class="form-control border border-1 border-black ps-2" id="no_telp" placeholder="Masukan No Telefon">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control border border-1 border-black ps-2" id="alamat" cols="30" rows="10"></textarea>
            </div>

            <button class="btn btn-info" > SIMPAN </button>

        </form>
    </div>

@endsection
