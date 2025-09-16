<?php
include 'koneksi.php';
$id = (int) $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id");
if (!$data) {
    die("Query error: " . mysqli_error($conn));
}
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $nama  = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $stok  = (int) $_POST['stok'];
    $harga = (float) $_POST['harga'];

    $query = "UPDATE barang SET nama_barang='$nama', stok=$stok, harga=$harga WHERE id_barang=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Ubah Barang</h2>
    <form method="POST">
        <input type="text" name="nama_barang" value="<?= $row['nama_barang'] ?>" required>
        <input type="number" name="stok" value="<?= $row['stok'] ?>" required>
        <input type="number" step="0.01" name="harga" value="<?= $row['harga'] ?>" required>
        <button type="submit" name="submit" class="btn btn-update">Update</button>
    </form>
</body>
</html>
