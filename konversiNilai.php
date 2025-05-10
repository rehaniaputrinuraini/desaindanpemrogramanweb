<?php
$nilai = 80;

if($nilai >= 0 && $nilai <=59){
    $nilaiHuruf = "C";
}elseif($nilai >=60 && $nilai<=69){
    $nilaiHuruf ="BC";
}elseif($nilai >=70 && $nilai<=79){
    $nilaiHuruf ="B";
}elseif($nilai >=80 && $nilai<=89){
        $nilaiHuruf ="AB";
}elseif($nilai >=90 && $nilai<=100){
    $nilaiHuruf ="A";
}else{
    $nilaiHuruf="nilai tidak valid";
}
echo "<h3>Konversi Nilai Angka ke Huruf</h3>";
echo "Nilai Angka: $nilai <br>";
echo "Nilai Huruf: $nilaiHuruf";
?>