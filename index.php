<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM peralatan");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Sewa Peralatan Outdoor</title>
    <style>
/* Background full page */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e')
        no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
}

/* Kontainer utama */
.container {
    margin: 60px auto;
    max-width: 1000px;
    background: #ffffffcc; /* putih transparan */
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    padding: 30px;
    backdrop-filter: blur(10px);
}

/* Judul */
h2 {
    text-align: center;
    color: #1b5e20;
    margin-bottom: 20px;
    font-size: 28px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.2);
}

/* Tombol tambah data */
.tambah-btn {
    display: inline-block;
    background: #2e7d32;
    color: white !important;
    padding: 10px 18px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
    margin-bottom: 15px;
}
.tambah-btn:hover {
    background: #1b5e20;
    transform: scale(1.05);
}

/* Tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

table thead {
    background: linear-gradient(45deg, #388e3c, #2e7d32);
    color: white;
    font-weight: bold;
}

table th, table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
}

table tr:nth-child(even) {
    background: #f9f9f9;
}

table tr:hover {
    background: #e8f5e9;
}

/* Tombol edit & hapus */
.btn {
    padding: 6px 12px;
    border-radius: 6px;
    color: white;
    text-decoration: none;
    font-size: 14px;
    transition: 0.3s;
}

.btn-edit {
    background: #0288d1;
}
.btn-edit:hover {
    background: #01579b;
}

.btn-hapus {
    background: #d32f2f;
}
.btn-hapus:hover {
    background: #b71c1c;
}

    </style>
</head>
<body>
<div class="container">
    <h2>Daftar Peralatan Outdoor</h2>
    <a href="tambah.php" class="tambah-btn">+ Tambah Data</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama Peralatan</th>
            <th>Kategori</th>
            <th>Harga sewa</th>
            <th>stok</th> 
            <th>edit/hapus</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama_peralatan'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= $row['harga_sewa'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="edit">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" class="hapus" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
