<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Input Matakuliah</title>
</head>
<body>
<div class="container">
    <h1>Tambah Matakuliah</h1>
    <form action="prosesinputmatakuliah.php" method="post">
        <p>
            <label>Kode MK:</label><br>
            <input type="text" name="kodeMK" required>
        </p>
        <p>
            <label>Nama Matakuliah:</label><br>
            <input type="text" name="namaMK" required>
        </p>
        <p>
            <label>SKS:</label><br>
            <input type="number" name="sks" required>
        </p>
        <p>
            <label>Jam:</label><br>
            <input type="number" name="jam" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Simpan">
        </p>
    </form>
</div>
</body>
</html>