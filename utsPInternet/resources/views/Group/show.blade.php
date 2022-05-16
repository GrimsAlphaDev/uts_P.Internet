@extends('layouts.app')

@section('Jumbotron', 'Detail Grup')

@section('content')
    <div class="row">
        <div class="card card-profile mt-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                        <div class="p-3 pe-md-0">
                            <img class="w-100 border-radius-md shadow-lg" src="{{ asset('style/img/bg.jpg') }}" alt="image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                        <h5 class="mb-0">{{ $grup->nama_grup }} </h5>
                        <p class="mb-0">{{ $grup->deskripsi }}</p>
                        <a href="/anggota/{{ $grup->id }}/edit" class="card-link">Edit</a>
                        <a href="#" class="card-link">Hapus</a>
                    </div>
                </div>

            @endsection
