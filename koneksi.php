<?php
$host = "localhost";
$user = "xirpl1-31";
$pass = "0081441342";
$db   = "sewa_outdoor_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
