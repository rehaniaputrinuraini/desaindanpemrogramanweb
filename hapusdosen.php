<?php
require_once 'dosen.php';

if (isset($_GET["idDosen"]) && is_numeric($_GET["idDosen"])) {
    $id = (int)$_GET["idDosen"];

    $dosen = new Dosen();
    $berhasil = $dosen->deleteDosenById($id);

    if (!$berhasil) {
        die("Gagal menghapus data dosen.");
    }
}

// redirect ke halaman view
header("Location: viewdosen.php");
exit;
?>
