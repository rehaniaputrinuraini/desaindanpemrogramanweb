<?php
require_once 'matakuliah.php';

if (isset($_POST['submit'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = intval($_POST['sks']);
    $jam = intval($_POST['jam']);

    $matakuliah = new Matakuliah();

    if ($matakuliah->insertMatakuliah($kodeMK, $namaMK, $sks, $jam)) {
        header("Location: viewmatakuliah.php");
        exit;
    } else {
        die("Gagal menambahkan matakuliah.");
    }
} else {
    header("Location: inputmatakuliah.php");
    exit;
}
