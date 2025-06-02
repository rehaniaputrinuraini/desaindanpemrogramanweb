<?php
require_once 'koneksi.php';

class Matakuliah {
    private $conn;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function getMatakuliahByKode($kodeMK) {
        $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
        $stmt->bind_param("s", $kodeMK);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return null;
        }
        return $result->fetch_assoc();
    }

    public function deleteMatakuliah($kodeMK) {
        $stmt = $this->conn->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
        $stmt->bind_param("s", $kodeMK);
        return $stmt->execute();
    }

    public function insertMatakuliah($kodeMK, $namaMK, $sks, $jam) {
        $stmt = $this->conn->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $kodeMK, $namaMK, $sks, $jam);
        return $stmt->execute();
    }

    public function search($keyword = "") {
        $stmt = $this->conn->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC");
        $likeKeyword = "%$keyword%";
        $stmt->bind_param("s", $likeKeyword);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
