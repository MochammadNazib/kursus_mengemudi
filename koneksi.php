<?php
$host     = "sql205.infinityfree.com";
$username = "if0_43516206";
$password = "kelompok022"; // Segera ubah di panel InfinityFree
$database = "if0_43516206_kelompok_kursus_mengemudi";
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