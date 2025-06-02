<?php
require_once 'dosen.php';

// Mengecek apakah tombol edit diklik
if (isset($_POST['edit'])) {
    // Ambil data dari form
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // Buat objek Dosen dan update data
    $dosen = new Dosen();
    $hasil = $dosen->updateDosen($id, $namaDosen, $noHP);

    if (!$hasil) {
        die("Gagal memperbarui data dosen.");
    }

    // Redirect ke view
    header("Location: viewdosen.php");
    exit;
} else {
    // Jika tidak melalui form, redirect langsung
    header("Location: viewdosen.php");
    exit;
}
?>
