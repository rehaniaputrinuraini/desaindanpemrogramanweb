<?php
require_once 'matakuliah.php';

if (!isset($_GET['id'])) {
    header("Location: viewmatakuliah.php");
    exit;
}

$kodeMK = $_GET['id'];
$matakuliah = new Matakuliah();

if (!$matakuliah->deleteMatakuliah($kodeMK)) {
    die("Gagal menghapus data.");
}

header("Location: viewmatakuliah.php");
exit;
