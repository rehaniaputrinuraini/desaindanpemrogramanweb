<?php
require_once 'koneksi.php';

class Dosen {
    private $conn;

    public function __construct() {
        $db = new Koneksi();
        $this->conn = $db->conn;
    }

    public function inputDosen($namaDosen, $noHP) {
        $stmt = $this->conn->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
        $stmt->bind_param("ss", $namaDosen, $noHP);
        return $stmt->execute();
    }

    public function getDosenById($idDosen) {
        $stmt = $this->conn->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
        $stmt->bind_param("s", $idDosen);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // return array atau null
    }

    public function updateDosen($idDosen, $namaDosen, $noHP) {
    $stmt = $this->conn->prepare("UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?");
    $stmt->bind_param("sss", $namaDosen, $noHP, $idDosen);
    return $stmt->execute();
    }

     public function deleteDosenById($idDosen) {
        $stmt = $this->conn->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
        $stmt->bind_param("i", $idDosen);
        return $stmt->execute();
    }

    public function getAll() {
    $stmt = $this->conn->prepare("SELECT * FROM t_dosen ORDER BY idDosen ASC");
    $stmt->execute();
    return $stmt->get_result();
    }

    public function cariDosen($keyword) {
    $stmt = $this->conn->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC");
    $param = "%$keyword%";
    $stmt->bind_param("s", $param);
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
