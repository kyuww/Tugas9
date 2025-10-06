<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}

$sewa = mysqli_query($conn, "SELECT * FROM sewa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Sewa Outdoor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <h1>Data Sewa Barang Outdoor</h1>
    <div>
      <a href="tambah.php">Tambah</a>
      <a href="logout.php" class="logout">Logout</a>
    </div>
  </nav>

  <div class="container">
    <table>
      <tr>
        <th>No</th>
        <th>Nama Penyewa</th>
        <th>Nama Barang</th>
        <th>Tgl Sewa</th>
        <th>Tgl Kembali</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
      <?php $no=1; while ($row = mysqli_fetch_assoc($sewa)) { ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_penyewa'] ?></td>
        <td><?= $row['nama_barang'] ?></td>
        <td><?= $row['tanggal_sewa'] ?></td>
        <td><?= $row['tanggal_kembali'] ?></td>
        <td>Rp<?= number_format($row['harga'], 0, ',', '.') ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn-edit">Edit</a>
          <a href="hapus.php?id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Yakin hapus data?')">Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
