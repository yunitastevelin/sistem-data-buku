<!DOCTYPE html>
<html>

<head>
    <title>Tambah Peminjaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h1 class="mb-4">📦 Tambah Peminjaman</h1>


        <form action="/peminjaman" method="POST">

            @csrf


            <div class="mb-3">

                <label class="form-label">
                    Anggota
                </label>

                <select name="anggota_id" class="form-control">

                    <option value="">
                        -- Pilih Anggota --
                    </option>

                    @foreach ($anggota as $a)
                        <option value="{{ $a->id }}">
                            {{ $a->nama }}
                        </option>
                    @endforeach

                </select>

            </div>



            <div class="mb-3">

                <label class="form-label">
                    Buku
                </label>

                <select name="buku_id" class="form-control">

                    <option value="">
                        -- Pilih Buku --
                    </option>

                    @foreach ($buku as $b)
                        <option value="{{ $b->id }}">
                            {{ $b->judul }}
                        </option>
                    @endforeach

                </select>

            </div>



            <div class="mb-3">

                <label class="form-label">
                    Tanggal Pinjam
                </label>

                <input type="date" name="tanggal_pinjam" class="form-control">

            </div>



            <button class="btn btn-success">
                Simpan
            </button>


            <a href="/peminjaman" class="btn btn-secondary">
                Kembali
            </a>


        </form>


    </div>

</body>

</html>
