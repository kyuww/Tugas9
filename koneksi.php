<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost"; // atau host MySQL dari hosting
$user = "xirpl1-31";
$pass = "0081441342";
$db   = "db_xirpl1-31_1";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
