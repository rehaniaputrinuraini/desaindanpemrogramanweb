<?php
require_once 'koneksi.php';

class Mahasiswa {
    private $conn;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function getMahasiswaByNpm($npm) {
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("s", $npm);
        $stmt->execute();
        return $stmt->get_result();
    }

    public function deleteMahasiswaByNpm($npm) {
        $stmt = $this->conn->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
        $stmt->bind_param("s", $npm);
        return $stmt->execute();
    }

       public function tambahMahasiswa($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $npm, $namaMhs, $prodi, $alamat, $noHP);
        return $stmt->execute();
    }

     public function cariMahasiswa($keyword = '') {
        $keyword = "%$keyword%";
        $stmt = $this->conn->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC");
        $stmt->bind_param("s", $keyword);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
?>
