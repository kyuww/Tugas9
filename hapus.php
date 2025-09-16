<?php
include 'koneksi.php';
$id = (int) $_GET['id'];

if (mysqli_query($conn, "DELETE FROM barang WHERE id_barang=$id")) {
    header("Location: index.php");
    exit;
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
