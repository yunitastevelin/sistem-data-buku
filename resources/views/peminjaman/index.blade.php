<!DOCTYPE html>
<html>

<head>
    <title>Data Peminjaman</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h1 class="mb-4">📦 Data Peminjaman</h1>


        <a href="/dashboard" class="btn btn-secondary mb-3">
            🏠 Kembali ke Dashboard
        </a>


        <a href="/peminjaman/create" class="btn btn-primary mb-3">
            + Tambah Peminjaman
        </a>


        <table class="table table-bordered table-striped">

            <tr class="table-dark">
                <th>No</th>
                <th>Anggota</th>
                <th>Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>


            @foreach ($peminjaman as $p)
                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $p->anggota->nama }}</td>

                    <td>{{ $p->buku->judul }}</td>

                    <td>{{ $p->tanggal_pinjam }}</td>

                    <td>{{ $p->tanggal_kembali ?? '-' }}</td>

                    <td>{{ $p->status }}</td>


                    <td>

                        <a href="/peminjaman/{{ $p->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>


                        <form action="/peminjaman/{{ $p->id }}" method="POST" style="display:inline">

                            @csrf
                            @method('DELETE')


                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>


                        </form>


                    </td>


                </tr>
            @endforeach


        </table>


    </div>


</body>

</html>
