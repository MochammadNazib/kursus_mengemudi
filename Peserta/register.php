<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Register Peserta</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
}

.box{
    width:400px;
    margin:50px auto;
    background:white;
    padding:20px;
    border-radius:10px;
}

input,textarea{
    width:100%;
    padding:10px;
    margin:8px 0;
}

button{
    width:100%;
    padding:10px;
    background:#2196F3;
    color:white;
    border:none;
    cursor:pointer;
}

a{
    text-decoration:none;
}
</style>

</head>
<body>

<div class="box">

<h2>Register Peserta</h2>

<form action="proses_register.php" method="POST">

<input type="text" name="nama" placeholder="Nama Lengkap" required>

<input type="text" name="username" placeholder="Username" required>

<input type="password" name="password" placeholder="Password" required>

<input type="text" name="no_hp" placeholder="No HP" required>



<button type="submit">
Daftar
</button>

</form>

<br>

Sudah punya akun?
<a href="login.php">Login disini</a>

</div>

</body>
</html>