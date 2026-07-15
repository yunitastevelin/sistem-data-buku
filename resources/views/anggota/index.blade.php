<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-5">

        <h1 class="mb-4">👥 Data Anggota</h1>


        <a href="/dashboard" class="btn btn-secondary mb-3">
            🏠 Kembali ke Dashboard
        </a>


        <a href="/anggota/create" class="btn btn-primary mb-3">
            + Tambah Anggota
        </a>


        <table class="table table-bordered table-striped">

            <tr class="table-dark">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>


            @foreach ($anggota as $a)
                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $a->nama }}</td>

                    <td>{{ $a->alamat }}</td>

                    <td>{{ $a->no_hp }}</td>


                    <td>

                        <a href="/anggota/{{ $a->id }}/edit" class="btn btn-warning btn-sm">
                            Edit
                        </a>


                        <form action="/anggota/{{ $a->id }}" method="POST" style="display:inline">

                            @csrf
                            @method('DELETE')


                            <button class="btn btn-danger btn-sm" type="submit">
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
