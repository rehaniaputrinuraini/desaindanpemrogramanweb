<?php
require_once 'dosen.php';

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$dosen = new Dosen();
$dataDosen = $dosen->cariDosen($keyword);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Dosen</title>
</head>
<body>
<div class="container">
    <h1>Data Dosen</h1>
    <form method="get">
        <input type="text" name="keyword" placeholder="Cari nama dosen..." value="<?= htmlspecialchars($keyword) ?>">
        <button type="submit">Cari</button>
    </form>
    <a href="inputdosen.php" class="btn">+ Tambah Dosen</a>
    <table>
        <tr><th>ID</th><th>Nama</th><th>No HP</th><th>Aksi</th></tr>
        <?php foreach ($dataDosen as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['idDosen']) ?></td>
            <td><?= htmlspecialchars($row['namaDosen']) ?></td>
            <td><?= htmlspecialchars($row['noHP']) ?></td>
            <td>
                <a href="editdosen.php?id=<?= urlencode($row['idDosen']) ?>">Edit</a> |
                <a href="hapusdosen.php?id=<?= urlencode($row['idDosen']) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php if (empty($dataDosen)): ?>
        <tr><td colspan="4">Data tidak ditemukan.</td></tr>
        <?php endif; ?>
    </table>
</div>
</body>
</html>
