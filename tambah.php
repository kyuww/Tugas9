<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama  = mysqli_real_escape_string($conn, $_POST['nama_barang']);
    $stok  = (int) $_POST['stok'];
    $harga = (float) $_POST['harga'];

    $query = "INSERT INTO barang (nama_barang, stok, harga) VALUES ('$nama', $stok, $harga)";
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
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Barang</h2>
    <form method="POST">
        <input type="text" name="nama_barang" placeholder="Nama Barang" required>
        <input type="number" name="stok" placeholder="Stok" required>
        <input type="number" step="0.01" name="harga" placeholder="Harga" required>
        <button type="submit" name="submit" class="btn btn-save">Simpan</button>
    </form>
</body>
</html>
