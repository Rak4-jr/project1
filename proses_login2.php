<?php

session_start();
include "koneksi2.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($koneksi, "
       SELECT * FROM admin
       WHERE username='$username'
       AND password='$password'
    ");

    $cek = mysqli_num_rows($query);

    if ($cek > 0) {

        $_SESSION['login'] = true;

        header("Location: dashboard.php");

    } else {
        
        echo "<script>alert('Username atau Password salah'); window.history.back();</script>";
        exit();
    }
}

?>