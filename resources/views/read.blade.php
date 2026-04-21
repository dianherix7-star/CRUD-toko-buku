<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

</head>
<body>

    <h1>Daftar Buku</h1>

    <a href="{{ route('buku.create') }}" class="btn btn-add">+ Tambah Buku</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Genre</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>

        @foreach ($toko_buku as $index => $item)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $item->judul_buku }}</td>
            <td>{{ $item->pengarang }}</td>
            <td>{{ $item->penerbit }}</td>
            <td>{{ $item->genre }}</td>
            <td>{{ $item->tahun_terbit }}</td>
            <td>
                <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                <a href="{{ route('buku.delete', $item->id) }} onclick="return confirm('hapus tol?')">hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>