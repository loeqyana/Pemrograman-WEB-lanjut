<?php
require 'function.php'; 
$mahasiswa = query("SELECT * FROM mahasiswa")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>NO.</th>
        <th>Aksi</th>
        <th>nim</th>
        <th>nama</th>
        <th>kode_prodi</th>
        <th>status_aktivitas</th>
    </tr>

    <?php $i=1;?>
    <?php foreach($mahasiswa as $row): ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>"
            onclick="return confirm('yakin?');">Hapus</a>
        </td>
        <td><?php echo $row["nim"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["kode_prodi"]; ?></td>
        <td><?php echo $row["status_aktivitas"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
</body>
</html>