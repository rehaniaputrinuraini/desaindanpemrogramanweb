<?php
class buah2{
    public $nama;
    protected $warna;
    private $berat;

    function set_name($n) {
        $this->nama = $n;
    }
    protected function set_color($n) {
        $this->warna = $n;
    }
    private function set_weight($n) {
        $this->bobot = $n;
    }

    //tambahkan method public untuk mengatur warna dan bobot
    public function setColor($n) {
        $this->set_color($n); //memanggil method protected dari dalam kelas
    }
    public function setWeight($n) {
        $this->set_weight($n); //memanggil method private dari dalam kelas
    }

    //tambbahkan method untuk menampilkan properti agar bisa dicek
    public function getInfo() {
        return "Nama: $this->nama, Warna: $this->warna, Bobot: $this->bobot gram";
    }
}

$mango = new buah2();
$mango->set_name('Mango');
$mango->setColor('yellow');
$mango->setWeight('300');

echo $mango->getInfo();
?>
