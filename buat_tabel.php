<?php
$con = new mysqli("127.0.0.1:3307", "root", "", "modul_11");

// Cek koneksi
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Buat query yang akan dikirim ke database
$q = "CREATE TABLE t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Kirim query ke server basis data
$hasil = $con->query($q);

// Periksa hasil pengiriman query
if ($hasil === TRUE) {
    echo "Tabel t_login berhasil dibuat";
} else {
    echo "Tabel gagal dibuat: " . $con->error;
}

// Tutup koneksi
$con->close();
?>
