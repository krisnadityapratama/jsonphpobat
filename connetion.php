<?php
$hostname = "localhost";
$database = "apotek";
$username = "root";
$password = "";
$con = mysqli_connect($hostname, $username, $password, $database);
// script cek koneksi
if (!$con) {
    die("Koneksi Tidak Berhasil: " . mysqli_connect_error());
}
?>