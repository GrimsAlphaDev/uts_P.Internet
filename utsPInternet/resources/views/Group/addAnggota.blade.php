@extends('layouts.app')

@section('jumbotron', 'Group')
@section('subtext', 'Tambah Anggota Grup')

@section('content')
    <h3 class="text-center mb-4">Tambahkan Anggota Pada Grup {{ $grup->nama_grup }}</h2>
        
        <form action="/group/updateAnggota/{{ $grup->id }}" method="POST">
            @method('PUT')
            @csrf
            <select name="anggota_id" class="form-select form-select-lg mb-3 border border-1" aria-label=".form-select-lg example">
                <option selected hidden>Pilih Teman Yang Ingin Ditambahkan Ke Grup</option>
                @foreach ($anggotas as $anggota)
                    <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                @endforeach
            </select>

            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>

    @endsection
