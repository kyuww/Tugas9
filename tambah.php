<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user'])) header("Location: login.php");

if (isset($_POST['tambah'])) {
  $nama = $_POST['nama_penyewa'];
  $barang = $_POST['nama_barang'];
  $sewa = $_POST['tanggal_sewa'];
  $kembali = $_POST['tanggal_kembali'];
  $harga = $_POST['harga'];

  mysqli_query($conn, "INSERT INTO sewa VALUES(NULL, '$nama', '$barang', '$sewa', '$kembali', '$harga')");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Sewa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h1>Tambah Data Sewa</h1>
    <form method="POST">
      <input type="text" name="nama_penyewa" placeholder="Nama Penyewa" required>
      <input type="text" name="nama_barang" placeholder="Nama Barang" required>
      <input type="date" name="tanggal_sewa" required>
      <input type="date" name="tanggal_kembali" required>
      <input type="number" name="harga" placeholder="Harga Sewa" required>
      <button type="submit" name="tambah">Simpan</button>
    </form>
  </div>
</body>
</html>
