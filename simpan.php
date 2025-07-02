<?php
include 'koneksi.php';

$nis     = $_POST['nis'];
$nama    = $_POST['nama'];
$jk      = $_POST['jk'];
$telepon = $_POST['telepon'];
$alamat  = $_POST['alamat'];

$foto    = $_FILES['foto']['name'];
$tmp     = $_FILES['foto']['tmp_name'];
$folder  = "uploads/";

if (move_uploaded_file($tmp, $folder . $foto)) {
    $query = "INSERT INTO siswa (nis, nama, jk, telepon, alamat, foto) 
              VALUES ('$nis', '$nama', '$jk', '$telepon', '$alamat', '$foto')";
    
    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan. <a href='tampil.php'>Lihat data</a>";
    } else {
        echo "Gagal simpan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Gagal upload foto.";
}
?>