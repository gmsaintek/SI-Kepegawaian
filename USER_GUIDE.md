# SI Kepegawaian - Panduan Pengguna

Panduan ini menjelaskan cara menggunakan seluruh fitur aplikasi **SI Kepegawaian** secara rinci. Pastikan Anda telah mengikuti langkah instalasi pada `README.md` untuk menjalankan aplikasi secara lokal.

## 1. Masuk ke Sistem

1. Akses `http://localhost:8080` melalui peramban.
2. Klik tombol **Sign in with Google**.
3. Masukkan akun Google yang terdaftar. Apabila alamat email Anda termasuk di variabel `HR_EMAILS`, Anda akan mendapatkan peran **Human Resource (HR)**. Selain itu peran Anda adalah **Karyawan**.
4. Setelah berhasil, Anda akan diarahkan ke halaman Dashboard.

## 2. Dashboard

Dashboard menampilkan tautan navigasi ke seluruh fitur sesuai peran Anda.
- HR dapat mengakses menu **Pegawai**, **Presensi**, **Cuti**, dan **Pengaturan**.
- Karyawan dapat mengakses **Presensi (mandiri)**, **Cuti**, dan **Pengaturan**.

## 3. Manajemen Data Pegawai (HR)

1. Pilih menu **Pegawai** pada sidebar.
2. Gunakan kotak pencarian di bagian atas untuk mencari pegawai berdasarkan nama atau NIK.
3. Klik tombol **Tambah Pegawai** untuk menambahkan data baru. Isikan:
   - **Nama** lengkap
   - **NIK** (nomor induk kependudukan)
   - **Tanggal Lahir**
   - **Jabatan**
   - **Kontak** (opsional)
   - **Dokumen**: unggah file KTP atau kontrak kerja jika ada
4. Klik **Simpan** untuk merekam data. Data akan tampil dalam tabel.
5. Untuk mengubah data pegawai, klik tombol **Edit** pada baris pegawai tersebut, lakukan perubahan pada form, kemudian klik **Update**.

## 4. Presensi

### 4.1 Presensi oleh HR

1. Buka menu **Presensi** (hanya HR).
2. Gunakan form filter di bagian atas untuk memfilter berdasarkan pegawai, tanggal, atau status kehadiran.
3. Klik **Input Presensi** untuk menambahkan catatan kehadiran baru. Isi pegawai, tanggal, status, foto (opsional) dan lokasi (opsional).
4. Tekan **Simpan**. Data akan muncul pada tabel.
5. Untuk memperbarui catatan, klik **Edit** pada baris yang diinginkan, ubah datanya, lalu tekan **Update**.

### 4.2 Presensi Mandiri (Karyawan)

1. Pilih menu **Presensi** pada sidebar.
2. Izinkan aplikasi mengakses kamera dan lokasi perangkat.
3. Tekan **Ambil Foto** untuk mengambil foto selfie. Foto akan ditampilkan sebagai pratinjau.
4. Lokasi otomatis terisi pada kolom di bawahnya. Apabila gagal, Anda dapat mengisi koordinat secara manual.
5. Tekan **Simpan** untuk mengirim data. Pesan keberhasilan akan muncul di halaman yang sama.

## 5. Pengajuan dan Pengelolaan Cuti

1. Buka menu **Cuti**.
2. Klik **Ajukan Cuti** untuk membuat permohonan baru.
3. Isi form:
   - **Pegawai**: otomatis terisi untuk karyawan. HR dapat memilih pegawai mana yang mengajukan.
   - **Tanggal Awal** dan **Tanggal Akhir** periode cuti.
   - **Jenis** cuti (Tahunan, Sakit, Melahirkan, Penting).
   - **Alasan** (opsional).
4. Tekan **Simpan**. Permohonan berstatus **Menunggu** dan HR akan mendapat notifikasi email.
5. Untuk memperbarui atau menghapus permohonan sebelum diproses, gunakan tombol **Edit** atau **Delete** pada tabel.
6. HR dapat mengubah status menjadi **Disetujui** atau **Ditolak** serta mengisi alasan penolakan. Jika disetujui, sisa cuti pegawai otomatis berkurang.
7. Klik ikon **Timeline** untuk melihat riwayat proses cuti, termasuk sanggahan dari pegawai. Pegawai dapat mengirim sanggahan melalui kolom di bagian bawah timeline.

## 6. Pengaturan Profil

1. Buka menu **Pengaturan**.
2. Halaman ini menampilkan informasi nama, email, dan peran Anda.
3. Ubah kolom **Nama** jika diperlukan lalu klik **Simpan Perubahan** untuk memperbarui profil.

## 7. Mengunduh Dokumen atau Foto

Semua berkas yang diunggah (foto presensi maupun dokumen pegawai) disimpan di direktori `writable/uploads`. Akses berkas melalui URL `/uploads/namafile.ext`. Contoh:

```
http://localhost:8080/uploads/photo_xxx.png
```

---
Panduan ini mencakup langkah per langkah setiap fitur utama. Untuk informasi teknis lebih lanjut silakan lihat `DEVELOPER_GUIDE.md`.
