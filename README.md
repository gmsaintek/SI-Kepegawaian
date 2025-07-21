# SI-Kepegawaian

Aplikasi sederhana sistem informasi kepegawaian berbasis [CodeIgniter 4](https://codeigniter.com/) dengan antarmuka menggunakan AdminLTE 3.

## Menjalankan Aplikasi

1. Masuk ke direktori `ci4app` dan instal dependensi menggunakan Composer:
   ```bash
   cd ci4app
   composer install
   ```
2. Salin berkas `env` menjadi `.env` lalu jalankan migrasi untuk membuat tabel SQLite:
   ```bash
   cp env .env
   php spark migrate
   ```
3. Jalankan server pengembangan bawaan CodeIgniter:
   ```bash
   php spark serve
   ```
4. Akses aplikasi melalui `http://localhost:8080`.

Database SQLite berada di `ci4app/writable/database.sqlite`.
