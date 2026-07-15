<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Anggota;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::with(['anggota', 'buku'])->get();

        return view('peminjaman.index', compact('peminjaman'));
    }


    public function create()
    {
        $buku = Buku::all();

        $anggota = Anggota::all();

        return view('peminjaman.create', compact('buku', 'anggota'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required',
        ]);


        Peminjaman::create([
            'anggota_id' => $request->anggota_id,
            'buku_id' => $request->buku_id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => null,
            'status' => 'Dipinjam'
        ]);


        return redirect('/peminjaman');
    }


    public function edit(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $buku = Buku::all();

        $anggota = Anggota::all();

        return view('peminjaman.edit', compact(
            'peminjaman',
            'buku',
            'anggota'
        ));
    }


    public function update(Request $request, string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);


        $peminjaman->update($request->all());


        return redirect('/peminjaman');
    }


    public function destroy(string $id)
    {
        $peminjaman = Peminjaman::findOrFail($id);

        $peminjaman->delete();


        return redirect('/peminjaman');
    }


    public function show(string $id)
    {
        //
    }
}