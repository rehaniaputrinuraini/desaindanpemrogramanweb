<?php
class koneksi_db {
    private $db_host = "localhost";
    private $db_user = "user";
    private $db_pass = "password";
    private $db_name = "database";

    private $con = false;
    private $conn;
    private $hasil = array();

    public function connect() {
        if (!$this->con) {
            $this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            if ($this->conn) {
                mysqli_set_charset($this->conn, 'utf8');
                $this->con = true;
                return true;
            } else {
                $this->hasil[] = mysqli_connect_error();
                return false;
            }
        } else {
            return true;
        }
    }

    public function getHasil() {
        return $this->hasil;
    }

    public function getConnection() {
        return $this->conn;
    }
}
