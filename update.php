<?php 

include "koneksi2.php";

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneki, "
   UPDATE siswa SET
   nis='$nis',
   nama='$nama',
   jurusan='$jurusan',
   alamat='$alamat'
   WHERE id_siswa='$id'
");

header("Location: dashboard.php");

?>