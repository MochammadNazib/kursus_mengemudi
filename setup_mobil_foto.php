<?php
// Koneksi langsung ke database
$host = "localhost";
$user = "root";
$pass = "";
$database = "kelompok_kursus_mengemudi";

$koneksi = mysqli_connect($host, $user, $pass, $database);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Query untuk menambah kolom foto
$alter_query = "ALTER TABLE mobil ADD COLUMN foto VARCHAR(255) DEFAULT ''";

if (mysqli_query($koneksi, $alter_query)) {
    echo "<h2 style='color: green;'>✓ Kolom 'foto' berhasil ditambahkan!</h2>";
} else {
    $error = mysqli_error($koneksi);
    
    if (strpos($error, 'Duplicate') !== false) {
        echo "<h2 style='color: blue;'>ℹ Kolom 'foto' sudah ada.</h2>";
    } else {
        echo "<h2 style='color: red;'>✗ Error: " . $error . "</h2>";
    }
}

// Tampilkan struktur tabel
echo "<h3>Struktur Tabel Mobil:</h3>";
echo "<pre>";
$result = mysqli_query($koneksi, "DESCRIBE mobil");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['Field'] . " - " . $row['Type'] . "\n";
}
echo "</pre>";

echo "<a href='Mobil/mobil.php' style='display: inline-block; padding: 10px 20px; background: #1e90ff; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px;'>Buka Data Mobil</a>";

mysqli_close($koneksi);
?>
