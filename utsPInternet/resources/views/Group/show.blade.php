@extends('layouts.app')

@section('jumbotron', 'Detail Grup')
@section('content')
    <div class="row">
        <div class="card card-profile mt-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                        <div class="p-3 pe-md-0">
                            <img class="w-100 border-radius-md shadow-lg" src="https://source.unsplash.com/400x400?group" alt="image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                        <h4 class="mb-0">{{ $grup->nama_grup }} </h4>
                        <p class="mb-0">{{ $grup->deskripsi }}</p>
                        <h6>List Teman Yang Berada Di Grup Ini</h6>

                        <div class="container">
                            <div class="row row-cols-3 text-center" >
                                @foreach($anggotas as $anggota)
                              <div class="card col m-1 p-2" style="width: 30%">{{ $anggota->nama }}</div>
                                @endforeach
                            </div>
                          </div>

                        <a href="/group/{{ $grup->id }}/edit" class="card-link">Edit</a>
                        <form action="/group/{{ $grup->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus data {{ $grup->nama_grup }}?')" class="card-link border-0 bg-transparent"><a class="card-link marg">Hapus</a></button>
                        </form>
                    </div>
                </div>

            @endsection
