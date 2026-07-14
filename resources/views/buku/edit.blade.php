<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
</head>

<body>

    <h1>Edit Buku</h1>

    @if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="/buku/{{ $buku->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul Buku</label><br>
        <input type="text" name="judul" value="{{ $buku->judul }}"><br><br>

        <label>Penulis</label><br>
        <input type="text" name="penulis" value="{{ $buku->penulis }}"><br><br>

        <label>Penerbit</label><br>
        <input type="text" name="penerbit" value="{{ $buku->penerbit }}"><br><br>

        <label>Tahun Terbit</label><br>
        <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}"><br><br>

        <label>Stok</label><br>
        <input type="number" name="stok" value="{{ $buku->stok }}"><br><br>

        <label>Kategori</label><br>
        <select name="kategori_id">
            @foreach($kategori as $item)
            <option value="{{ $item->id }}"
                {{ $item->id == $buku->kategori_id ? 'selected' : '' }}>
                {{ $item->nama_kategori }}
            </option>
            @endforeach
        </select>

        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="/buku">Kembali</a>

</body>

</html>