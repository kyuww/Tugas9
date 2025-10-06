<?php
$host = "localhost"; 
$user = "xirpl1-31"; 
$pass = "0801414342"; 
$db   = "db_xirpl1-31_2";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
