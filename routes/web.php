<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return redirect('/kategori');
});

Route::resource('kategori', KategoriController::class);
Route::resource('buku', BukuController::class);
