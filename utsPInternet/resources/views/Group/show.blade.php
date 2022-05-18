@extends('layouts.app')

@section('jumbotron', 'Detail Grup')
@section('content')
    <div class="row">
        <div class="card card-profile mt-4">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mt-n5">
                    <a href="javascript:;">
                        <div class="p-3 pe-md-0">
                            <img class="w-100 border-radius-md shadow-lg" src="https://source.unsplash.com/400x400?group"
                                alt="image">
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6 col-12 my-auto">
                    <div class="card-body ps-lg-0">
                        <h4 class="mb-0">{{ $grup->nama_grup }} </h4>
                        <p class="mt-2 mb-2">{{ $grup->deskripsi }}</p>
                        <h5>Jumlah Orang Yang Keluar Dari Grup : {{ $keluar }}  Orang</h5>

                        <div class="container text-center">
                            <div class="row cols-2">
                                <div class="card m-2" style="width: 18rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Jumlah Anggota Yang Pernah Join Kedalam Grup
                                        </h6>
                                        <p>{{ $history }}</p>
                                    </div>
                                </div>
                                <div class="card m-2" style="width: 18rem;">
                                    <div class="card-body">
                                        <h6 class="card-title">Jumlah Anggota Yang Berada Dalam Grup </h6>
                                        <p>{{ $jumlah }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h6>List Teman Yang Berada Di Grup Ini : </h6>
                        <div class="container mb-5">
                            <div class="row row-cols-3 text-center">
                                @foreach ($anggotas as $anggota)
                                    <div class="card col m-1 p-2" style="width: 30%">
                                        <p> <a href="../teman/{{ $anggota->id }}">{{ $anggota->nama }} </a></p>
                                        </ul>
                                        <form action="/group/deleteAnggota/{{ $anggota->id }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="id_grup" value="{{ $grup->id }}">
                                            <button type="submit"
                                                onclick="return confirm('Apakah yakin ingin menghapus {{ $anggota->nama }} dari Grup ?')"
                                                class="card-link border-0 bg-transparent"><a
                                                    class="card-link marg">Hapus</a></button>
                                        </form>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{ $anggotas->links() }}

                    </div>

                    <!-- Tambah Anggota Grup -->
                    <a href="/group/{{ $grup->id }}/add" class="btn btn-primary" style="width: 100%">Tambah Anggota</a>

                    {{-- Edit Grup --}}
                    <a href="/group/{{ $grup->id }}/edit" class="btn btn-warning " style="width: 100%">Edit Grup</a>

                    {{-- Hapus Gruo --}}
                    <form action="/group/{{ $grup->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                            onclick="return confirm('Apakah yakin ingin menghapus data {{ $grup->nama_grup }}?')"
                            class="btn btn-danger" style="width: 100%">Hapus Grup</button>
                    </form>
                </div>
            </div>

        @endsection
