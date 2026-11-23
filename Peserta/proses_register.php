<?php
session_start();
include "../koneksi.php";

$nama      = $_POST['nama'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$no_hp     = $_POST['no_hp'];


$cek = mysqli_query($koneksi,"SELECT * FROM peserta WHERE username='$username'");

if(mysqli_num_rows($cek)>0){
    echo "<script>
    alert('Username sudah digunakan');
    window.location='register.php';
    </script>";
    exit;
}

mysqli_query($koneksi,"
INSERT INTO peserta
(nama_peserta, username, password, no_hp)
VALUES
('$nama','$username','$password','$no_hp')
");

$data = mysqli_query($koneksi,"
SELECT * FROM peserta
WHERE username='$username'
LIMIT 1
");

$user = mysqli_fetch_assoc($data);

$_SESSION['login'] = true;
$_SESSION['role'] = 'peserta';
$_SESSION['peserta_id'] = $user['peserta_id'];
$_SESSION['nama_peserta'] = $user['nama_peserta'];

header("Location: dashboard.php");
exit;