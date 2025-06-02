<?php
require_once 'dosen.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $dosen = new Dosen();
    $hasil = $dosen->inputDosen($namaDosen, $noHP);

    if ($hasil) {
        header("Location: viewdosen.php"); // arahkan ke halaman tampil data dosen
        exit;
    } else {
        echo "Gagal menyimpan data dosen.";
    }
} else {
    header("Location: inputdosen.php"); // jika akses langsung tanpa post data
    exit;
}
