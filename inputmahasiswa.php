<?php include ("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Input Mahasiswa</title>
</head>
<body>
<div class="container">
    <h1>Tambah Mahasiswa</h1>
    <form action="prosesinputmahasiswa.php" method="post">
        <p>
            <label>Nama Mahasiswa:</label><br>
            <input type="text" name="npm" required>
        </p>
        <p>
            <label>Nama Mahasiswa:</label><br>
            <input type="text" name="namaMhs" required>
        </p>
        <p>
            <label>Prodi:</label><br>
            <input type="text" name="prodi" required>
        </p>
        <p>
            <label>Alamat:</label><br>
            <input type="text" name="alamat" required>
        </p>
         <p>
            <label>No HP:</label><br>
            <input type="text" name="noHP" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Simpan">
        </p>
    </form>
</div>
</body>
</html>
