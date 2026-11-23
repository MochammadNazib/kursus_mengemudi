<h2>Tambah Peserta</h2>
<form action="create.php" method="post">
    
Nama <input name="nama"><br>
Username <input name="username"><br>
Password <input name="password"><br>
No HP <input name="no_hp"><br>
Alamat <textarea name="alamat"></textarea><br>
<button type="submit">Simpan</button>

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
</form>