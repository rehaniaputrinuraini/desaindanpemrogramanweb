<?php
require_once 'matakuliah.php';

if (!isset($_GET['id'])) {
    header("Location: viewmatakuliah.php");
    exit;
}

$kodeMK = $_GET['id'];
$matakuliahObj = new Matakuliah();
$data = $matakuliahObj->getMatakuliahByKode($kodeMK);

if (!$data) {
    die("Data tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Matakuliah</title>
</head>
<body>
<div class="container">
    <h1>Edit Matakuliah</h1>
    <form action="proseseditmatakuliah.php" method="post">
        <input type="hidden" name="kodeMK" value="<?= htmlspecialchars($data['kodeMK']) ?>">
        <p>
            <label>Nama Matakuliah:</label><br>
            <input type="text" name="namaMK" value="<?= htmlspecialchars($data['namaMK']) ?>" required>
        </p>
        <p>
            <label>SKS:</label><br>
            <input type="number" name="sks" value="<?= htmlspecialchars($data['sks']) ?>" required>
        </p>
        <p>
            <label>Jam:</label><br>
            <input type="number" name="jam" value="<?= htmlspecialchars($data['jam']) ?>" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Update">
        </p>
    </form>
</div>
</body>
</html>
