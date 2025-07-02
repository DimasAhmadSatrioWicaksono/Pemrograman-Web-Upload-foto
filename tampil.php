<?php
include 'koneksi.php';

$result = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<h2>Data Siswa</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Foto</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
    </tr>
    <?php while ($data = mysqli_fetch_array($result)) { ?>
    <tr>
        <td><img src="uploads/<?php echo $data['foto']; ?>" width="60"></td>
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['jk']; ?></td>
        <td><?php echo $data['telepon']; ?></td>
        <td><?php echo $data['alamat']; ?></td>
    </tr>
    <?php } ?>
</table>