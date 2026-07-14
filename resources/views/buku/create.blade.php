<!DOCTYPE html>
<html>

<head>
    <title>Tambah Buku</title>
</head>

<body>

    <h1>Tambah Buku</h1>

    @if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="/buku" method="POST">
        @csrf

        <label>Judul Buku</label><br>
        <input type="text" name="judul"><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis"><br><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit"><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit"><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok"><br><br>

        <label>Kategori</label><br>
        <select name="kategori_id">
            @foreach($kategori as $item)
            <option value="{{ $item->id }}">
                {{ $item->nama_kategori }}
            </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="/buku">Kembali</a>

</body>

</html>