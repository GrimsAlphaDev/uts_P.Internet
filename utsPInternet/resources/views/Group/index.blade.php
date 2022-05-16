@extends('layouts.app')

@section('jumbotron', 'Group')
@section('subtext', 'List of group')

@section('content')

<a href="/group/create" class="btn btn-primary">Tambah Group</a>

    <div class="row">
        @foreach ($groups as $group)
            <div class="m-2 col d-flex">
                <div class="card m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/group/{{ $group->id }}"> {{ $group->nama_grup }} </a></h5>
                        <p class="card-text">{{ $group->deskripsi }}</p>
                        <a href="/group/{{ $group->id }}/edit" class="card-link">Edit</a>
                        <form action="group/{{ $group->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('Apakah yakin ingin menghapus data {{ $group->nama_grup }}?')" class="card-link border-0 bg-transparent"><a class="card-link marg">Hapus</a></button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="">
            {{ $groups->links() }}
        </div>
    </div>


@endsection
