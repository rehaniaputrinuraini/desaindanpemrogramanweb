<?php
/* operator logika yang bisa digunakan
== sama dengan 
=== identical 
!= tidak sama dengan
<> tidak sama dengan
!== not identical
> lebih besar dari
< kurang dari
>= lebih besar atau sama dengan
<= kurang dari atau sama dengan
<=> spaceship 
*/

// mendapatkan jam dengan format 1-24
$t = date("H");
echo "<br>if dan Else<br>";
if($t < 20){
    echo "selamat datang";
}else {
    echo "selamat malam";
}
echo "<br>Nested If<br>";
if ($t < 24){
    echo "selamat datang";

}else if($t < 16){
    echo "selamat sore";

}else{
    echo " selamat malam";
}
?>