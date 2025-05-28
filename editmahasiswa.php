<?php
include("koneksi.php");

// Ambil NPM dari URL
if (!isset($_GET['id'])) {
    header("Location: viewmahasiswa.php");
    exit;
}

$npm = $_GET['id'];
$query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
$result = mysqli_query($link, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Data tidak ditemukan.");
}

$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Mahasiswa</h1>
    <form action="editmahasiswa.php" method="post">
        <input type="hidden" name="npm" value="<?= $data['npm'] ?>">
        <p>
            <label>Nama Mahasiswa:</label><br>
            <input type="text" name="namaMhs" value="<?= $data['namaMhs'] ?>" required>
        </p>
        <p>
            <label>Prodi:</label><br>
            <input type="text" name="prodi" value="<?= $data['prodi'] ?>" required>
        </p>
        <p>
            <label>Alamat:</label><br>
            <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required>
        </p>
        <p>
            <label>No HP:</label><br>
            <input type="text" name="noHP" value="<?= $data['noHP'] ?>" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Simpan Perubahan">
        </p>
    </form>
</div>
</body>
</html>
