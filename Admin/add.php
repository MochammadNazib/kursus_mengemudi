<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Admin</title>
</head>
<body>

<h2>Tambah Admin</h2>


<form action="create.php" method="post">
    <table>
        <tr>
            <td>Nama Admin</td>
            <td><input type="text" name="nama_admin" required></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" name="password" required></td>
        </tr>
        <tr>
            <td>No HP</td>
            <td><input type="text" name="no_hp"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
                <a href="admin.php">Kembali</a>
            </td>
        </tr>
    </table>
</form>

<style>
body{font-family:Arial;background:#f4f4f4}
form{
    background:white;
    width:400px;
    margin:60px auto;
    padding:30px;
    border-radius:12px;
}
input,button{
    width:100%;
    padding:10px;
    margin:8px 0;
}
button{background:#1e90ff;color:white;border:none}
</style>

</body>
</html>