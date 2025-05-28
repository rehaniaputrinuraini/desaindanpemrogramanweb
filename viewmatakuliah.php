<?php
include("koneksi.php");
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
$result = mysqli_query($link, $query);
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
    <form method="get">
        <input type="text" name="keyword" placeholder="Cari nama matakuliah..." value="<?= $keyword ?>">
        <button type="submit">Cari</button>
    </form>
    <a href="inputmatakuliah.php" class="btn">+ Tambah Matakuliah</a>
    <table>
        <tr><th>Kode</th><th>Nama MK</th><th>SKS</th><th>Jam</th><th>Aksi</th></tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['kodeMK'] ?></td>
            <td><?= $row['namaMK'] ?></td>
            <td><?= $row['sks'] ?></td>
            <td><?= $row['jam'] ?></td>
            <td>
                <a href="editmatakuliah.php?id=<?= $row['kodeMK'] ?>">Edit</a> |
                <a href="hapusmatakuliah.php?id=<?= $row['kodeMK'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
