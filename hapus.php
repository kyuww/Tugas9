<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user'])) header("Location: login.php");

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM sewa WHERE id=$id");
header("Location: index.php");
?>
