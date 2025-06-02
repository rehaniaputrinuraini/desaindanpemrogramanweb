<?php
require_once 'mahasiswa.php';

// Validasi jika tidak ada parameter id di URL
if (!isset($_GET['id'])) {
    header("Location: viewmahasiswa.php");
    exit;
}

$npm = $_GET['id'];

// Ambil data mahasiswa berdasarkan NPM
$mahasiswa = new Mahasiswa();
$result = $mahasiswa->getMahasiswaByNpm($npm);

if (!$result || $result->num_rows === 0) {
    die("Data tidak ditemukan.");
}

$data = $result->fetch_assoc();
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
    <form action="proses_editmahasiswa.php" method="post">
        <input type="hidden" name="npm" value="<?= htmlspecialchars($data['npm']) ?>">
        <p>
            <label>Nama Mahasiswa:</label><br>
            <input type="text" name="namaMhs" value="<?= htmlspecialchars($data['namaMhs']) ?>" required>
        </p>
        <p>
            <label>Prodi:</label><br>
            <input type="text" name="prodi" value="<?= htmlspecialchars($data['prodi']) ?>" required>
        </p>
        <p>
            <label>Alamat:</label><br>
            <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']) ?>" required>
        </p>
        <p>
            <label>No HP:</label><br>
            <input type="text" name="noHP" value="<?= htmlspecialchars($data['noHP']) ?>" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Simpan Perubahan">
        </p>
    </form>
</div>
</body>
</html>
