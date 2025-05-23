<?php

class buah
{
    public $nama;
    protected $warna;
    private $berat;

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }
    public function getWarna()
    {
        return $this->warna;
    }
    public function setBerat($berat)
    {
        $this->berat = $berat;
    }
    public function getBerat()
    {
        return $this->berat;
    }
}

$mango = new buah();
$mango->nama = 'Mango';
$mango->setWarna('yellow');
$mango->setBerat('300');

echo "Nama: " . $mango->nama . "<br>";
echo "warna: " . $mango->getWarna() . "<br>";
echo "Berat: " . $mango->getBerat() . "gram<br>";

