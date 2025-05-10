
<?php

$gajipokok = 325000;
$tunjangan = 120000;

$gajikotor = $gajipokok + $tunjangan;
$pajak = 0.10 * $gajikotor;
$gajibersih = $gajikotor - $pajak;

echo "Gaji pokok adalah $gajipokok <br>";
echo "Tunjangan adalah $tunjangan <br>";
echo "Pajaknya adalah $pajak <br>";
echo "Total gaji bersih adalah $gajibersih";

?>
