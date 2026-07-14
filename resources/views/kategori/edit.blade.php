<!DOCTYPE html>
<html>

<head>
    <title>Edit Kategori</title>
</head>

<body>

    <h1>Edit Kategori</h1>

    @if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="/kategori/{{ $kategori->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Kategori</label><br>
        <input type="text" name="nama_kategori" value="{{ $kategori->nama_kategori }}"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="/kategori">Kembali</a>

</body>

</html>