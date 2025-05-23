<?php
require_once ('kelas/mahasiswa.php');

$mhs1 = new Mahasiswa("Rehania Putri Nur Aini");
$mhs1->setNIM("243307087");
$mhs1->setKelas("TI-2C");

//tampilkan nama nim dan kelas daro $mhs1
echo ($mhs1->getNama());
echo ($mhs1->getNIM());
echo ($mhs1->getKelas());

?>
