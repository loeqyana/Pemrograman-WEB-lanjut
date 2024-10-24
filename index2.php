<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_school");

//ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
#check correction
if( !$result) {
  echo mysqli_error($conn);
}

// ambil data (fetch) mahasiswa dari object result
//mysqli_fetch row() //mengambil data dari nomor index arraynya
//mysqli_fetch assoc() //mengambil data berdasarkan string nama labelnya
//mysqli_fetch array() //bisa melakukan keduanya tapi yg akan muncul mnjadi 2 kali lipat
//mysqli_fetch object() 

//menampilkan nama secara keseluruhan
//while( $mhs = mysqli_fetch_assoc($result) ){
//var_dump($mhs);
//}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

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
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td><?php echo $row["nim"]; ?></td>
        <td><?php echo $row["nama"]; ?></td>
        <td><?php echo $row["kode_prodi"]; ?></td>
        <td><?php echo $row["status_aktivitas"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</table>
</body>
</html>