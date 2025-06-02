<?php
require_once 'mahasiswa.php';

if (isset($_POST['submit'])) {
    $npm      = $_POST['npm'];
    $namaMhs  = $_POST['namaMhs'];
    $prodi    = $_POST['prodi'];
    $alamat   = $_POST['alamat'];
    $noHP     = $_POST['noHP'];

    $mahasiswa = new Mahasiswa();
    $berhasil = $mahasiswa->tambahMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP);

    if ($berhasil) {
        header("Location: viewmahasiswa.php");
        exit;
    } else {
        die("Gagal menyimpan data mahasiswa.");
    }
}
?>
