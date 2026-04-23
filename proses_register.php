<?php
include "config/koneksi.php";

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// 🔹 CEK USERNAME
$cek = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");

if(mysqli_num_rows($cek) > 0){
    echo "<script>alert('Username sudah dipakai');history.back();</script>";
} else {
    mysqli_query($conn, "INSERT INTO user (username, password) VALUES ('$username', '$password')");
    echo "<script>alert('Register berhasil'); document.location='login.php';</script>";
}
?>
