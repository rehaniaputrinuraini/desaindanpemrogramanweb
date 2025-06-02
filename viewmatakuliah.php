<?php
require_once 'matakuliah.php';

$matakuliah = new Matakuliah();
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$result = $matakuliah->search($keyword);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Data Matakuliah</title>
</head>
<body>
<div class="container">
    <h1>Data Matakuliah</h1>
    <form method="get" action="">
        <input type="text" name="keyword" placeholder="Cari nama matakuliah..." value="<?= htmlspecialchars($keyword) ?>">
        <button type="submit">Cari</button>
    </form>
    <a href="inputmatakuliah.php" class="btn">+ Tambah Matakuliah</a>
    <table>
        <tr>
            <th>Kode</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= htmlspecialchars($row['kodeMK']) ?></td>
            <td><?= htmlspecialchars($row['namaMK']) ?></td>
            <td><?= htmlspecialchars($row['sks']) ?></td>
            <td><?= htmlspecialchars($row['jam']) ?></td>
            <td>
                <a href="editmatakuliah.php?id=<?= urlencode($row['kodeMK']) ?>">Edit</a> |
                <a href="hapusmatakuliah.php?id=<?= urlencode($row['kodeMK']) ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
