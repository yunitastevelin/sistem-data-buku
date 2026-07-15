<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();

        return view('anggota.index', compact('anggota'));
    }


    public function create()
    {
        return view('anggota.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);


        Anggota::create($request->all());


        return redirect('/anggota');
    }


    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);

        return view('anggota.edit', compact('anggota'));
    }


    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);

        $anggota->update($request->all());

        return redirect('/anggota');
    }


    public function destroy($id)
    {
        Anggota::destroy($id);

        return redirect('/anggota');
    }


    public function show($id)
    {
        //
    }
}