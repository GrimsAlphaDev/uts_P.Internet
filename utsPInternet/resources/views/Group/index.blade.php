@extends('layouts.app')

@section('jumbotron', 'Group')
@section('subtext', 'List of group')

@section('content')

    <a href="/group/create" class="btn btn-primary">Tambah Group</a>

    <div class="container ">
        <div class="row row-cols-3 ">
            @foreach ($groups as $group)
                <div class="col card m-2" style="width: 19.5rem">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/group/{{ $group->id }}"> {{ $group->nama_grup }} </a></h5>
                        <p class="card-text">{{ $group->deskripsi }}</p>

                        <!-- Tambah Anggota Grup -->
                        <a href="/group/{{ $group->id }}/add" class="btn btn-primary">Tambah Anggota</a><br>

                        <a href="/group/{{ $group->id }}/edit" class="card-link block">Edit</a>
                        <form action="group/{{ $group->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                                onclick="return confirm('Apakah yakin ingin menghapus data {{ $group->nama_grup }}?')"
                                class="card-link border-0 bg-transparent"><a class="card-link marg">Hapus</a></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="">
        {{ $groups->links() }}
    </div>
    </div>




@endsection
