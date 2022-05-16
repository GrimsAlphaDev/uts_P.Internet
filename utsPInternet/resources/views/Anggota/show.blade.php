@extends('layouts.app')

@section('Jumbotron', 'Detail Anggota')

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
                        <h5 class="mb-0">Nama </h5>
                        <h6 class="text-info">No Telp</h6>
                        <p class="mb-0">Alamat</p>
                        <a href="#" class="card-link">Edit</a>
                        <a href="#" class="card-link">Hapus</a>
                    </div>
                </div>

            @endsection
