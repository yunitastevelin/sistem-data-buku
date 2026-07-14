<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kategori</title>
</head>

<body>

    <h1>Tambah Kategori</h1>

    @if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="/kategori" method="POST">
        @csrf

        <label>Nama Kategori</label><br>
        <input type="text" name="nama_kategori"><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="/kategori">Kembali</a>

</body>

</html>