@extends('layouts.app')

@section('content')
    <h2 class="mb-3">📂 Data Kategori</h2>

    <a href="/" class="btn btn-dark mb-3">
        🏠 Kembali ke Dashboard
    </a>

    <a href="/kategori/create" class="btn btn-primary mb-3">
        + Tambah Kategori
    </a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_kategori }}</td>
                    <td>
                        <a href="/kategori/{{ $item->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/kategori/{{ $item->id }}" method="POST" style="display:inline;">
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
