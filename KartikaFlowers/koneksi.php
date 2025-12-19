<?php
$host = "localhost";
$user = "root";         // Ganti jika user MySQL Anda berbeda
$pass = "";             // Ganti jika punya password
$db   = "penjualan_barang";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
