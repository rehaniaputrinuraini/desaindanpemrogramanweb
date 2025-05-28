<?php
include("koneksi.php");
$id = $_GET['id'];
$query = "DELETE FROM t_matakuliah WHERE kodeMK='$id'";
$result = mysqli_query($link, $query);
if (!$result) {
    die("Gagal menghapus data: " . mysqli_error($link));
}
header("Location: viewmatakuliah.php");
?>
