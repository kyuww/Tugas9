<?php
include 'koneksi.php';
if (!isset($_GET['id'])) die("ID tidak ditemukan");
$id = $_GET['id'];
$q = mysqli_query($conn, "SELECT * FROM peralatan WHERE id='$id'");
$data = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        body { font-family: Arial; background:#fffde7; }
        .form-box { width:400px; margin:50px auto; background:#fff; padding:20px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.2);}
        h2 { text-align:center; color:#f57f17;}
        input, button { width:100%; padding:10px; margin:5px 0; border:1px solid #ccc; border-radius:5px;}
        button { background:#f57f17; color:white; border:none; cursor:pointer;}
        button:hover { background:#e65100;}
    </style>
</head>
<body>
<div class="form-box">
    <h2>Edit Data Peralatan</h2>
    <form method="POST">
        <input type="text" name="nama_peralatan" value="<?= $data['nama_peralatan'] ?>" required>
        <input type="text" name="kategori" value="<?= $data['kategori'] ?>" required>
        <input type="number" name="harga_sewa" value="<?= $data['harga_sewa'] ?>" required>
        <input type="text" name="stok" value="<?= $data['stok'] ?>" required>
        <input type="text" name="email" value="<?= $data['email'] ?>" required>
        <input type="text" name="umur" value="<?= $data['umur'] ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $nama = $_POST['nama_peralatan'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga_sewa'];
    $stok = $_POST['stok'];
    $stok = $_POST['email'];
    $stok = $_POST['umur'];

    mysqli_query($conn, "UPDATE peralatan SET 
                            nama_peralatan='$nama', 
                            kategori='$kategori', 
                            harga_sewa='$harga', 
                            stok='$stok'
                            email='$email'
                            umur='$umur'
                         WHERE id='$id'");
    echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
}
?>
