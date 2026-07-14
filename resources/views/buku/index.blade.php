@extends('layouts.app')

@section('content')

<h2 class="mb-3">Data Buku</h2>

<a href="/buku/create" class="btn btn-primary mb-3">
    + Tambah Buku
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($buku as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->penulis }}</td>
            <td>{{ $item->penerbit }}</td>
            <td>{{ $item->tahun_terbit }}</td>
            <td>{{ $item->kategori->nama_kategori }}</td>
            <td>{{ $item->stok }}</td>
            <td>
                <a href="/buku/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/buku/{{ $item->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection