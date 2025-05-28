<?php
include ("koneksi.php");

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    // Pastikan NPM bukan kosong dan unik!
    if ($npm == "") {
        die("NPM tidak boleh kosong.");
    }

    $query = "INSERT INTO t_mahasiswa VALUES ('$npm', '$nama', '$prodi', '$alamat', '$noHP')";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_error($link));
    }

    header("Location: viewmahasiswa.php");
}
?>
