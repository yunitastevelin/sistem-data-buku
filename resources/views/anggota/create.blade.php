<!DOCTYPE html>
<html>

<head>
    <title>Tambah Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h1>👥 Tambah Anggota</h1>


        <form action="/anggota" method="POST">

            @csrf


            <div class="mb-3">
                <label class="form-label">
                    Nama Anggota
                </label>

                <input type="text" name="nama" class="form-control">
            </div>


            <div class="mb-3">
                <label class="form-label">
                    Alamat
                </label>

                <textarea name="alamat" class="form-control"></textarea>
            </div>


            <div class="mb-3">
                <label class="form-label">
                    No HP
                </label>

                <input type="text" name="no_hp" class="form-control">
            </div>


            <button class="btn btn-success">
                Simpan
            </button>


            <a href="/anggota" class="btn btn-secondary">
                Kembali
            </a>


        </form>


    </div>

</body>

</html>
