<?php
//variabel dalam php
$txt = "Selamat datang !";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p>isi variable txt adalah: $txt</p>" ;
echo "<p>isi variable x adalah: $x</p>" ;
echo "<p>isi variable y adalah: $y</p>" ;
echo "Belajar PHP di " . $txt2 . "<br>";
echo $x + $y;

//PHP konstanta
define("nama_konstanta", "Rehania Putri Nur Aini");
echo "<br>".nama_konstanta;

?>