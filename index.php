<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM barang");
if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Data Barang</h2>
    <p style="text-align:center;">
        <a href="tambah.php" class="btn btn-add">+ Tambah Barang</a>
    </p>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id_barang'] ?></td>
            <td><?= $row['nama_barang'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= number_format($row['harga'], 2) ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id_barang'] ?>" class="btn btn-edit">Ubah</a>
                <a href="hapus.php?id=<?= $row['id_barang'] ?>" class="btn btn-del" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
