# SI-Kepegawaian

Contoh sederhana sistem informasi kepegawaian menggunakan PHP dan SQLite. 

## Cara Menjalankan

1. Inisialisasi database:
   ```bash
   php backend/init_db.php
   ```
   Perintah ini akan membuat file `backend/database.sqlite`.

2. Jalankan server PHP lokal:
   ```bash
   php -S localhost:8000 -t AdminLTE-4.0.0-rc1/pages/admin
   ```
   Kemudian akses `http://localhost:8000/index.php` melalui peramban.

Aplikasi ini menyediakan formulir penambahan pegawai, input presensi, dan tampilan daftar data.
