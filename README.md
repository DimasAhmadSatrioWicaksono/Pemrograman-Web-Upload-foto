Struktur projek : 
pwebuploadfoto/
├── upload/ ← folder untuk menyimpan file foto yang diupload
├── index.php ← halaman form tambah siswa
├── koneksi.php ← file koneksi ke database MySQL
├── simpan.php ← proses penyimpanan data & upload foto
└── tampil.php ← menampilkan tabel daftar siswa beserta foto


Cara Menjalankan

1. Pindahkan Folder ke htdocs  
   Letakkan folder `pwebuploadfoto` di dalam:

2. Aktifkan XAMPP  
Jalankan Apache dan MySQL melalui XAMPP Control Panel.

3. Buat Database dan Tabel  
Akses `http://localhost/phpmyadmin`, lalu buat database:

```sql
CREATE DATABASE db_siswa;

USE db_siswa;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nis VARCHAR(20),
    nama VARCHAR(100),
    jk VARCHAR(20),
    telepon VARCHAR(20),
    alamat TEXT,
    foto VARCHAR(100)
);

4.Jalankan Aplikasi
Form Input: http://localhost/pwebuploadfoto/index.php
Tabel Data: http://localhost/pwebuploadfoto/tampil.php

5.Hasil
Data siswa akan disimpan ke database
Foto akan diupload ke folder /upload
Tabel menampilkan data lengkap beserta thumbnail foto
