<?php
require_once 'dosen.php';

if (isset($_POST['edit'])) {
    $id         = $_POST['idDosen'];
    $namaDosen  = $_POST['namaDosen'];
    $noHP       = $_POST['noHP'];

    $dosen = new Dosen();
    $hasil = $dosen->updateDosen($id, $namaDosen, $noHP);

    if ($hasil) {
        header("Location: viewdosen.php");
        exit;
    } else {
        die("Gagal memperbarui data dosen.");
    }
} else {
    header("Location: viewdosen.php");
    exit;
}
