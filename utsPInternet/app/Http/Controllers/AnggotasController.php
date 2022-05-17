<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use App\Models\history;
use Illuminate\Http\Request;
use PHPUnit\TextUI\XmlConfiguration\Group;

class AnggotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Ambil Data Anggota Dari Table Anggota di database dan urutkan berdasarkan id yang paling besar
        $anggotas = Anggotas::orderBy('id', 'desc')->paginate(8);

        // Kembalikan view index.blade.php dan kirimkan data anggota
        return view('anggotas.index' , compact('anggotas'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //  Kembalikan view create.blade.php
        return view('anggotas.create');
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
            'nama' => 'required|unique:anggotas|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required|max:255'
        ]);

        // simpan ke database
        Anggotas::create($validatedData);

        // Redirect Ke Halaman Index
        return redirect('/teman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  Ambil Data Anggota Dari Table Anggota di database berdasarkan id yang dikirim
        $anggota = Anggotas::findOrFail($id);

        // Ambil Data Anggota Berada Di Dalam Grup Apa Saja
        $grup = history::where('anggotas_id', $anggota->id)->where('status', 'masuk')->get();

        //  Kembalikan ke tampilan show.blade.php dan kirimkan data anggota
        return view('anggotas.show', ['anggota' => $anggota, 'grup' => $grup]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //  Ambil Data Anggota Dari Table Anggota di database berdasarkan id yang dikirim
        $anggota = Anggotas::findOrFail($id);

        //  Kembalikan ke tampilan edit.blade.php dan kirimkan data anggota
        return view('anggotas.edit', compact('anggota'));
 
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

        // Validasi Data Yang Dikirim User
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'no_telp' => 'required|numeric',
            'alamat' => 'required|max:255'
        ]);

        // update data di database
        Anggotas::find($id)->update($validatedData);

        // redirect ke halaman index
        return redirect('/teman');

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
        Anggotas::find($id)->delete();
        // redirect ke halaman index
        return redirect('teman');
    }
}
