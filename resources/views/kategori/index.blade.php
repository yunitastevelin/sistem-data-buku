<!DOCTYPE html>
<html>

<head>
    <title>Data Kategori</title>
</head>

<body>

    <h1>Data Kategori</h1>

    <a href="/kategori/create">+ Tambah Kategori</a>

    <br><br>

    @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        @foreach($kategori as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_kategori }}</td>
            <td>
                <a href="/kategori/{{ $item->id }}/edit">Edit</a>

                <form action="/kategori/{{ $item->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</body>

</html>