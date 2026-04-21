<h2>Edit Buku</h2>

<form action="{{ route('buku.update', $toko_buku->id) }}" method="POST">
    @csrf
    @method('PUT')

    Judul: <input type="text" name="judul_buku" value="{{ $toko_buku->judul_buku }}"><br>
    Pengarang: <input type="text" name="pengarang" value="{{ $toko_buku->pengarang }}"><br>
    Penerbit: <input type="text" name="penerbit" value="{{ $toko_buku->penerbit }}"><br>
    Genre: <input type="text" name="genre" value="{{ $toko_buku->genre }}"><br>
    Tahun: <input type="text" name="tahun_terbit" value="{{ $toko_buku->tahun_terbit }}"><br>

    <button type="submit">Update</button>
</form>