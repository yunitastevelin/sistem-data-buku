@extends('layouts.app')

@section('content')
    <h2 class="mb-4">📚 Dashboard Sistem Data Buku</h2>

    <div class="row">

        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5>Jumlah Buku</h5>
                    <h2>{{ $jumlahBuku }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5>Jumlah Kategori</h5>
                    <h2>{{ $jumlahKategori }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <div class="card-body">
                    <h5>Total Stok Buku</h5>
                    <h2>{{ $totalStok }}</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <a href="/kategori" class="btn btn-success">📂 Kelola Kategori</a>
        <a href="/buku" class="btn btn-primary">📚 Kelola Buku</a>
    </div>
@endsection
