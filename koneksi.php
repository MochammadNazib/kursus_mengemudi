<?php
$host     = "bsx0p450uhgeipdgr4pz-mysql.services.clever-cloud.com";
$username = "ujohp2qfijqxzej3";
$password = "keR82PZ786g9aP6sB78l"; // Segera ubah di panel InfinityFree
$database = "bsx0p450uhgeipdgr4pz";
$port     = 3306; // Tipe data integer (tanpa tanda kutip)

// Aktifkan pelaporan error saat tahap pengembangan (opsional)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $koneksi = mysqli_connect($host, $username, $password, $database, $port);
    mysqli_set_charset($koneksi, "utf8mb4");
} catch (mysqli_sql_exception $e) {
    // Tampilkan pesan detail hanya saat debugging, sembunyikan saat sudah live
    die("Koneksi database gagal: " . $e->getMessage());
}
?>