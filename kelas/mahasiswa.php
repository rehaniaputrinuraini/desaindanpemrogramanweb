<?php
require_once "manusia.php";

class Mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
    // memanggil setter dari class induk manusia
        $this->setNama($nama);
    }
    // setter dan getter untuk nim
    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }
    public function getNIM()
    {
        return $this->NIM;
    }
    // setter dan getter untuk jurusan
    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }
    public function getJurusan()
    {
        return $this->jurusan;
    }
    // setter dan getter untuk kelas
    public function setKelas()
    {
        $this->kelas = $kelas;
    }
    public function getKelas()
    {
        return $this->kelas;
    }
}

?>