<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login2.php");
}

include "koneksi2.php";

$total = mysqli_query($koneksi,"SELECT * FROM siswa");
$jumlah = mysqli_num_rows($total);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>Total Siswa : <?= $jumlah; ?></p>

<a href="tambah2.php">Tambah Siswa</a>

<a href="logout2.php">Logout</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>No</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php

$no = 1;

$data = mysqli_query($koneksi, "SELECT * FROM siswa"); 

while($d=mysqli_fetch_array($data)) {

?>

<tr>
     <td><?= $no++; ?></td>
     <td><?= $d['nis']; ?></td>
     <td><?= $d['nama']; ?></td>
     <td><?= $d['jurusan']; ?></td>
     <td><?= $d['alamat']; ?></td>
     
     <td>
        <a href="edit2.php?id=<?= $d['id_siswa']; ?>">
            Edit
        </a>

        <a href="hapus.php?id=<?= $d['id_siswa']; ?>"
           onclick="return confirm('Yakin hapus data?')">
            Hapus
        </a> 
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>