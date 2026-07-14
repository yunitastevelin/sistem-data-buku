<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::with('kategori')->get();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'kategori_id' => 'required',
        ]);

        Buku::create($request->all());

        return redirect('/buku')->with('success', 'Data buku berhasil ditambahkan');
    }

    public function edit(Buku $buku)
    {
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'kategori'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'stok' => 'required',
            'kategori_id' => 'required',
        ]);

        $buku->update($request->all());

        return redirect('/buku')->with('success', 'Data buku berhasil diubah');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect('/buku')->with('success', 'Data buku berhasil dihapus');
    }
}
