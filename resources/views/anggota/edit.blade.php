<!DOCTYPE html>
<html>

<head>
    <title>Edit Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h1>✏️ Edit Anggota</h1>

        <form action="/anggota/{{ $anggota->id }}" method="POST">

            @csrf
            @method('PUT')


            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}">
            </div>


            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control">{{ $anggota->alamat }}</textarea>
            </div>


            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="no_hp" class="form-control" value="{{ $anggota->no_hp }}">
            </div>


            <button class="btn btn-warning">
                Update
            </button>


            <a href="/anggota" class="btn btn-secondary">
                Kembali
            </a>


        </form>

    </div>

</body>

</html>
