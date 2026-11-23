<?php
session_start();
include "koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$message = '';
$status = '';

// Cek apakah kolom foto sudah ada
$result = mysqli_query($koneksi, "SHOW COLUMNS FROM mobil LIKE 'foto'");

if (mysqli_num_rows($result) == 0) {
    // Kolom belum ada, tambahkan
    $alter_query = "ALTER TABLE mobil ADD COLUMN foto VARCHAR(255) DEFAULT ''";
    
    if (mysqli_query($koneksi, $alter_query)) {
        $message = 'Kolom foto berhasil ditambahkan ke tabel mobil!';
        $status = 'success';
    } else {
        $message = 'Error: ' . mysqli_error($koneksi);
        $status = 'error';
    }
} else {
    $message = 'Kolom foto sudah ada di tabel mobil.';
    $status = 'info';
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Setup Database</title>
<style>
body {
    font-family: Arial;
    padding: 20px;
    background: #f0f0f0;
}
.container {
    max-width: 600px;
    margin: 50px auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
.success {
    background: #d4edda;
    color: #155724;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
}
.error {
    background: #f8d7da;
    color: #721c24;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
}
.info {
    background: #d1ecf1;
    color: #0c5460;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
}
a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #1e90ff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}
a:hover {
    background: #0d47a1;
}
</style>
</head>
<body>

<div class="container">
    <h2>Setup Database - Tambah Kolom Foto</h2>
    
    <div class="<?= $status; ?>">
        <?= $message; ?>
    </div>
    
    <a href="Mobil/mobil.php">Kembali ke Data Mobil</a>
</div>

</body>
</html>
