<h2>Tambah Buku</h2>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf

    Judul: <input type="text" name="judul_buku"><br>
    Pengarang: <input type="text" name="pengarang"><br>
    Penerbit: <input type="text" name="penerbit"><br>
    Genre: <input type="text" name="genre"><br>
    Tahun: <input type="number" name="tahun_terbit"><br>

    <button type="submit">Simpan</button>
</form>