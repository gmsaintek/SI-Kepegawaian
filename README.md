# SI-Kepegawaian

Aplikasi sederhana sistem informasi kepegawaian berbasis [CodeIgniter 4](https://codeigniter.com/) dengan antarmuka menggunakan AdminLTE 3.

## Menjalankan Aplikasi

1. Masuk ke direktori `ci4app` dan instal dependensi menggunakan Composer:
   ```bash
   cd ci4app
   composer install
   ```
2. Salin berkas `env` menjadi `.env`:
   ```bash
   cp env .env
   ```
3. Atur nilai `GOOGLE_CLIENT_ID` dan `GOOGLE_CLIENT_SECRET` di file `.env`.
   Anda juga dapat menentukan email yang mendapat peran `hr` melalui variabel `HR_EMAILS` (pisahkan dengan koma).
4. Jalankan perintah berikut untuk menjalankan seluruh migrasi sehingga
   semua tabel yang dibutuhkan (misalnya `users` maupun `cuti_logs`) terbentuk:
   ```bash
   php spark migrate
   ```
5. Jalankan server pengembangan bawaan CodeIgniter:
   ```bash
   php spark serve
   ```
6. Akses aplikasi melalui `http://localhost:8080`.

Database SQLite berada di `ci4app/writable/database.sqlite`.
