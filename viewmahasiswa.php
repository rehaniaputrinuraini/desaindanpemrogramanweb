<?php
include ("koneksi.php");
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
$query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$keyword%' ORDER BY npm ASC";
$result = mysqli_query($link, $query);
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
        <input type="text" name="keyword" placeholder="Cari nama mahasiswa..." value="<?= $keyword ?>">
        <button type="submit">Cari</button>
    </form>
    <a href="inputmahasiswa.php" class="btn">+ Tambah Mahasiswa</a>
    <table>
        <tr><th>ID</th><th>Nama</th><th>Prodi</th><th>Alamat</th><th>NoHP</th></tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['npm'] ?></td>
            <td><?= $row['namaMhs'] ?></td>
            <td><?= $row['prodi'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['noHP'] ?></td>
            <td>
                <a href="editmahasiswa.php?id=<?= $row['npm'] ?>">Edit</a> |
<a href="hapusmahasiswa.php?id=<?= $row['npm'] ?>" onclick="return confirm('Hapus data ini?')">Hapus</a>

            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>
