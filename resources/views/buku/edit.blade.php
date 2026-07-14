@extends('layouts.app')

@section('content')

<h2>Edit Buku</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/buku/{{ $buku->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Judul Buku</label>
        <input type="text" name="judul" class="form-control"
            value="{{ old('judul', $buku->judul) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Penulis</label>
        <input type="text" name="penulis" class="form-control"
            value="{{ old('penulis', $buku->penulis) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Penerbit</label>
        <input type="text" name="penerbit" class="form-control"
            value="{{ old('penerbit', $buku->penerbit) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control"
            value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control"
            value="{{ old('stok', $buku->stok) }}">
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select name="kategori_id" class="form-select">
            @foreach($kategori as $item)
            <option value="{{ $item->id }}"
                {{ $item->id == $buku->kategori_id ? 'selected' : '' }}>
                {{ $item->nama_kategori }}
            </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="/buku" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection