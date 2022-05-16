@extends('layouts.app')

@section('jumbotron', 'Anggota')

@section('content')

<a href="" class="btn btn-primary">Tambah Anggota</a>

    <div class="row">
        @for ($i = 0; $i < 6; $i++)
            <div class="m-2 col d-flex">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href=""> Nama Anggota </a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">No Telp</h6>
                        <p class="card-text">Alamat</p>
                        <a href="#" class="card-link">Edit</a>
                        <a href="#" class="card-link">Hapus</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>


@endsection
