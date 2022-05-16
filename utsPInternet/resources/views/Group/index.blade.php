@extends('layouts.app')

@section('jumbotron', 'Group')
@section('subtext', 'List of group')

@section('content')

<a href="/group/create" class="btn btn-primary">Tambah Group</a>

    <div class="row">
        @for ($i = 0; $i < 6; $i++)
            <div class="m-2 col d-flex">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/grup/{{ $grup->id }}"> {{ $grup->nama_grup }} </a></h5>
                        <p class="card-text">{{ $grup->deskripsi }}</p>
                        <a href="/grup/{{ $grup->id }}/edit" class="card-link">Edit</a>
                        <a href="#" class="card-link">Hapus</a>
                    </div>
                </div>
            </div>
        @endfor
    </div>


@endsection
