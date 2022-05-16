<?php

namespace App\Http\Controllers;

use App\Models\Anggotas;
use Illuminate\Http\Request;

class AnggotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggotas::orderBy('id', 'desc')->paginate(3);
        return view('anggotas.index' , compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
            'no_telp' => 'required|numeric|max:20',
            'alamat' => 'required|max:255'
        ]);

        // simpan ke database
        Anggotas::create($validatedData);

        // Redirect Ke Halaman Index
        return redirect('/anggotas/index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggotas::findOrFail($id);
        return view('anggotas.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validatedData = Anggotas::findOrFail($id);
        return view('anggotas.edit', compact('validatedData'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Anggotas $anggota)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'no_telp' => 'required|numeric|max:20',
            'alamat' => 'required|max:255'
        ]);

        // update data
        Anggotas::where('id', $anggota->id)
                ->update($validatedData);

        // redirect ke halaman index
        return redirect('/anggotas/index');
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
        return redirect('/anggotas/index');
    }
}
