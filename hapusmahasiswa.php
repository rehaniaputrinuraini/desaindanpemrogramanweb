<?php
require_once 'mahasiswa.php';

if (isset($_GET['id'])) {
    $npm = $_GET['id'];

    $mahasiswa = new Mahasiswa();
    $berhasil = $mahasiswa->deleteMahasiswaByNpm($npm);

    if (!$berhasil) {
        die("Gagal menghapus data mahasiswa.");
    }

    header("Location: viewmahasiswa.php");
    exit;
} else {
    header("Location: viewmahasiswa.php");
    exit;
}
