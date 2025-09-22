<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama_peralatan = $_POST['nama_peralatan'];
    $kategori = $_POST['kategori'];
    $harga_sewa = $_POST['harga_sewa'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO peralatan (nama_peralatan, kategori, harga_sewa, stok) 
            VALUES ('$nama_peralatan', '$kategori', '$harga_sewa', '$stok')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Peralatan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 400px;
            margin: 100px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2d6a4f;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #bbb;
            border-radius: 8px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2d6a4f;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #1b4332;
        }
        .back {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #2d6a4f;
            font-weight: bold;
            text-decoration: none;
        }
        .back:hover {
            color: #1b4332;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Peralatan Outdoor</h2>
        <form action="" method="POST">
            <label for="nama_peralatan">Nama Peralatan</label>
            <input type="text" name="nama_peralatan" required>

            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" required>

            <label for="harga_sewa">Harga Sewa</label>
            <input type="number" step="0.01" name="harga_sewa" required>

            <label for="stok">Stok</label>
            <input type="number" name="stok" required>

            <button type="submit" name="simpan">Simpan</button>
        </form>
        <a href="index.php" class="back">← Kembali ke Daftar</a>
    </div>
</body>
</html>
