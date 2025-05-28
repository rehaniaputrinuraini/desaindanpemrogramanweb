<?php

//variabel koneksi dengan database mysql
$host = "127.0.0.1:3307";
$user = "root";
$paswd = "";
$name = "modul_11";

//proses koneksi
$link = mysqli_connect($host, $user, $paswd, $name);

// periksa koneksi, jika gagal akan menampilkan pesan error
if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}
?>
