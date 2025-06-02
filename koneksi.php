<?php
class Koneksi {
    public $conn;

    public function __construct() {
        // Ganti sesuai dengan konfigurasi XAMPP/MySQL kamu
        $host = "127.0.0.1:3307";
        $user = "root";
        $pass = ""; // <-- jika pakai password, isi di sini
        $db   = "modul_11"; // ganti dengan nama database kamu

        $this->conn = new mysqli($host, $user, $pass, $db);

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }
}
