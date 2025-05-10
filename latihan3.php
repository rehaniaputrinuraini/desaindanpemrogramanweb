<?php
$x = 5;
$y = 10;

//Arithmetic operators
echo "Penambahan ".$x + $y."<br>";
echo "Pengurangan ".$x - $y."<br>";
echo "Perkalian ".$x * $y."<br>";
echo "Pembagian ".$x / $y."<br>";
echo "modulus ".$x % $y."<br>";
echo "Exponensial ".$x ** $y."<br>";
echo("<br>");

//Assigment operators
$x += 2; //  $x = $x + 2
$y *= 2; //  $y = $y * 2
echo "penambahan x ".$x."<br>";
echo "perkalian y ".$y."<br>";
echo("<br>");

//Incremen/Decrement operators
echo "Isi ++x = ".++$x."<br>";
echo "Isi x++ = ".$x++."<br>";
echo "Isi x = ".$x."<br>";
echo ("<br>");
echo "Isi --y = ".--$y."<br>";
echo "Isi y-- = ".$y--."<br>";
echo "Isi y = ".$y."<br>";
echo ("<br>");

//Conditional assigment operators
$user = "Andi darmawan";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status."<br>";
//variable $color diisi dengan "red" jika $color tidak ada atau null
echo $color = $color ?? "red";

?>