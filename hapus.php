<?php

include "koneksi2.php";

$id = $_GET['id'];

mysqli_query($koneksi, "
   DELETE FROM siswa
   WHERE id_siswa='$id'
");

header("Location: dashboard.php");

?>