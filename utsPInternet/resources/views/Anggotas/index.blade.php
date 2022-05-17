@extends('layouts.app')

@section('jumbotron', 'Teman')
@section('subtext', 'List Teman')

@section('content')

    <a href="/teman/create" class="btn btn-primary">Tambah Teman</a>

    <div class="container ">
        <div class="row row-cols-4 ">
            @foreach ($anggotas as $anggota)
                <div class="col card m-2" style="width: 14.4rem">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/teman/{{ $anggota->id }}"> {{ $anggota->nama }} </a></h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $anggota->no_telp }}</h6>
                        <p class="card-text">{{ $anggota->alamat }}</p>
                        <a href="teman/{{ $anggota->id }}/edit" class="card-link">Edit</a>
                        <form action="teman/{{ $anggota->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Apakah yakin ingin menghapus data {{ $anggota->nama }}?')"
                                class="card-link border-0 bg-transparent"><a class="card-link marg">Hapus</a></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    
    <div class="">
        {{ $anggotas->links() }}
    </div>
    </div>


@endsection
