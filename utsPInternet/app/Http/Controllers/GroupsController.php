<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Ambil Data Grup Dari Table grups di database dan urutkan berdasarkan id yang paling besar
         $groups = Groups::orderBy('id', 'desc')->paginate(6);

         // Kembalikan ke tampilan index.blade.php dan kirimkan data grups
         return view('group.index' , compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //  Kembalikan Ke Tampilan create.blade.php
         return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validasi Data Yang Dikirim User
        $validatedData = $request->validate([
            'nama_grup' => 'required|unique:groups|max:255',
            'deskripsi' => 'required|max:255'
        ]);

        // simpan ke database Grup
        Groups::create($validatedData);

        // Redirect Ke Halaman Index
        return redirect('/group');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  Ambil Data grup Dari Table grup di database berdasarkan id yang dikirim
        $grup = Groups::findOrFail($id);

        // Ambil Data Teman Yang Berada Dalam Grup yang Dipilih
        $anggotas = Anggotas::where('groups_id', $id)->get();

        //  Kembalikan ke tampilan show.blade.php dan kirimkan data grup
        return view('group.show', ['grup' => $grup, 'anggotas' => $anggotas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Ambil Data grup Dari Table grup di database berdasarkan id yang dikirim
        $group = Groups::findOrFail($id);

        // Kembalikan ke tampilan edit.blade.php dan kirimkan data grup
        return view('group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //  Validasi Data Yang Dikirim User
        $validatedData = $request->validate([
            'nama_grup' => 'required|max:255',
            'deskripsi' => 'required|max:255'
        ]);

        //  Ambil Data Grup Dari Table grup di database berdasarkan id yang dikirim
        $grup = Groups::findOrFail($id);

        //  Update Data Grup Dari Table grup di database
        $grup->update($validatedData);

        //  Redirect Ke Halaman Index
        return redirect('/group');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Hapus Data Yang Dipilih
        Groups::find($id)->delete();
         
         // redirect ke halaman index
         return redirect('/group');
    }

    public function addAnggota($id) {
        
        // Ambil Data Grup Dari Table grup di database berdasarkan id yang dikirim
        $grup = Groups::findOrFail($id);

        // Ambil Data Anggota yang belum masuk ke dalam grup
        $anggotas = Anggotas::where('groups_id', null)->get();

        // Arahkan Ke Tampilan AddAnggota
        return view('group.addAnggota', ['grup' => $grup, 'anggotas' => $anggotas]);

    }

    public function updateAnggota(Request $request, $id) {

        // Ambil Data Grup Dari Table grup di database berdasarkan id yang dikirim
        $grup = Groups::findOrFail($id);

        // Ambil Data Anggota yang ingin dimasukan ke dalam grup
        $anggota = Anggotas::findOrFail($request->anggota_id);
        // Update Data Anggota yang sudah masuk ke dalam grup
        $anggota->update(['groups_id' => $grup->id]);

        // Kembalikan Ke Tampilan group
        return redirect("/group/{$grup->id}");
    }

}
