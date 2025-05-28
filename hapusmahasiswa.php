<?php
include("koneksi.php");

if (isset($_GET['id'])) {
    $npm = $_GET['id'];
    $query = "DELETE FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Gagal menghapus data: " . mysqli_error($link));
    }

    header("Location: viewmahasiswa.php");
} else {
    header("Location: viewmahasiswa.php");
}
?>
