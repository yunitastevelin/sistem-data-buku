<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahBuku = Buku::count();

        $jumlahKategori = Kategori::count();

        $totalStok = Buku::sum('stok');

        return view('dashboard', compact(
            'jumlahBuku',
            'jumlahKategori',
            'totalStok'
        ));
    }
}
