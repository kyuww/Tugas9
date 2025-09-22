<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$user = "xirpl1-31";   // ganti sesuai user MySQL di hosting
$pass = "0081441342";    // ganti password MySQL
$db   = "db_xirpl1-31_1"; // sesuai screenshot

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

