@extends('layouts.app')

@section('content')

<h2>Edit Kategori</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/kategori/{{ $kategori->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input
            type="text"
            name="nama_kategori"
            class="form-control"
            value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="/kategori" class="btn btn-secondary">
        Kembali
    </a>
</form>

@endsection