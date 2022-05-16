@extends('layouts.app')

@section('jumbotron', 'Anggota')
@section('subtext', 'List Anggota')

@section('content')

<a href="/anggota/create" class="btn btn-primary">Tambah Anggota</a>

    <div class="row">
        @foreach($anggotas as $anggota)
            <div class="m-2 col d-flex">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/anggota/{{ $anggota->id }}"> {{ $anggota->nama }} </a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $anggota->no_telp }}</h6>
                        <p class="card-text">{{ $anggota->alamat }}</p>
                        <a href="anggota/{{ $anggota->id }}/edit" class="card-link">Edit</a>
                        <form action="anggota/{{ $anggota->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="card-link border-0 bg-transparent"><a class="card-link marg">Hapus</a></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="">
            {{ $anggotas->links() }}
        </div>
    </div>


@endsection
