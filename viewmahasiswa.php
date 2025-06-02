<?php
require_once 'mahasiswa.php';

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$mahasiswa = new Mahasiswa();
$dataMahasiswa = $mahasiswa->cariMahasiswa($keyword);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <form method="get">
        <input type="text" name="keyword" placeholder="Cari nama mahasiswa..." value="<?= htmlspecialchars($keyword) ?>">
        <button type="submit">Cari</button>
    </form>
    <a href="inputmahasiswa.php" class="btn">+ Tambah Mahasiswa</a>
    <table>
        <tr><th>ID</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>NoHP</th><th>Aksi</th></tr>
        <?php foreach ($dataMahasiswa as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row['npm']) ?></td>
            <td><?= htmlspecialchars($row['namaMhs']) ?></td>
            <td><?= htmlspecialchars($row['prodi']) ?></td>
            <td><?= htmlspecialchars($row['alamat']) ?></td>
            <td><?= htmlspecialchars($row['noHP']) ?></td>
            <td>
                <a href="editmahasiswa.php?id=<?= urlencode($row['npm']) ?>">Edit</a> |
                <a href="hapusmahasiswa.php?id=<?= urlencode($row['npm']) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php if(empty($dataMahasiswa)): ?>
        <tr><td colspan="6">Data tidak ditemukan.</td></tr>
        <?php endif; ?>
    </table>
</div>
</body>
</html>
