<?php
include("koneksi.php");

if (!isset($_GET['id'])) {
    header("Location: viewmatakuliah.php");
    exit;
}

$kodeMK = $_GET['id'];
$query = "SELECT * FROM t_matakuliah WHERE kodeMK = '$kodeMK'";
$result = mysqli_query($link, $query);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Data tidak ditemukan.");
}

$data = mysqli_fetch_assoc($result);
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
    <form action="prosesinputmatakuliah.php" method="post">
        <input type="hidden" name="kodeMK" value="<?= $data['kodeMK'] ?>">
        <p>
            <label>Nama Matakuliah:</label><br>
            <input type="text" name="namaMK" value="<?= $data['namaMK'] ?>" required>
        </p>
        <p>
            <label>SKS:</label><br>
            <input type="number" name="sks" value="<?= $data['sks'] ?>" required>
        </p>
        <p>
            <label>Jam:</label><br>
            <input type="number" name="jam" value="<?= $data['jam'] ?>" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Update">
        </p>
    </form>
</div>
</body>
</html>
