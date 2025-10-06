<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user'])) header("Location: login.php");

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM sewa WHERE id=$id"));

if (isset($_POST['update'])) {
  $nama = $_POST['nama_penyewa'];
  $barang = $_POST['nama_barang'];
  $sewa = $_POST['tanggal_sewa'];
  $kembali = $_POST['tanggal_kembali'];
  $harga = $_POST['harga'];

  mysqli_query($conn, "UPDATE sewa SET nama_penyewa='$nama', nama_barang='$barang', tanggal_sewa='$sewa', tanggal_kembali='$kembali', harga='$harga' WHERE id=$id");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h1>Edit Data</h1>
    <form method="POST">
      <input type="text" name="nama_penyewa" value="<?= $data['nama_penyewa'] ?>" required>
      <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required>
      <input type="date" name="tanggal_sewa" value="<?= $data['tanggal_sewa'] ?>" required>
      <input type="date" name="tanggal_kembali" value="<?= $data['tanggal_kembali'] ?>" required>
      <input type="number" name="harga" value="<?= $data['harga'] ?>" required>
      <button type="submit" name="update">Update</button>
    </form>
  </div>
</body>
</html>
