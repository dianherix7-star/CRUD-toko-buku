CRUD Toko Buku Laravel

Deskripsi

Aplikasi sederhana berbasis Laravel untuk mengelola data buku dengan fitur CRUD (Create, Read, Update, Delete). Project ini cocok untuk pembelajaran dasar Laravel, khususnya penggunaan controller, model, routing, dan Blade template.

---

Fitur

* Menampilkan daftar buku
* Menambahkan data buku
* Mengedit data buku
* Menghapus data buku
* Validasi input

---

Teknologi

* PHP
* Laravel
* MySQL
* Blade Template

---

Struktur Project

* `app/Http/Controllers/TokoController.php` → Mengatur logika aplikasi
* `app/Models/TokoBuku.php` → Model untuk database
* `resources/views/` → Tampilan (UI)
* `routes/web.php` → Routing aplikasi

---

Cara Instalasi & Menjalankan

1. Clone repository

```
git clone https://github.com/Dianherixkusuma/toko-buku.git
```

2. Masuk ke folder project

```
cd toko-buku
```

3. Install dependency

```
composer install
```

4. Copy file environment

```
cp .env.example .env
```

5. Generate key

```
php artisan key:generate
```

6. Atur koneksi database di file `.env`

7. Jalankan migrasi database

```
php artisan migrate
```

8. Jalankan server

```
php artisan serve
```

9. Buka di browser

```
http://127.0.0.1:8000
```

---

Routing

| URL            | Method | Keterangan            |
| -------------- | ------ | --------------------- |
| `/`            | GET    | Menampilkan data buku |
| `/create`      | GET    | Form tambah buku      |
| `/store`       | POST   | Simpan data           |
| `/edit/{id}`   | GET    | Form edit             |
| `/update/{id}` | PUT    | Update data           |
| `/delete/{id}` | DELETE | Hapus data            |

---

Validasi Data

Field yang digunakan:

* judul_buku
* pengarang
* penerbit
* genre
* tahun_terbit

---

Catatan Penting

* Akses aplikasi melalui:

  ```
  http://127.0.0.1:8000
  ```
* Route `/` sudah diarahkan ke `TokoController@index`
* Untuk fitur hapus, **gunakan form dengan method DELETE**, bukan link `<a>`

Contoh:

```
<form action="{{ route('buku.delete', $id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
```

---

Author

* Nama: Dian Herix Kusuma

---

Lisensi

Project ini bebas digunakan untuk pembelajaran dan pengembangan.