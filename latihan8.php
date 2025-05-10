<?php
$array=array(
    "1C"=>array("udin","ismail","andi"),
    "1D"=>array("lukman","fajri","mahmud")

);
//menampilkan data array
print_r(($array));
//menampilkan kelas 1c
print_r($array['1C']);
//menampilkan kelas 1D dengan index 0
echo $array['1D'][0];
//tampilkan fajri
echo $array['1D'][1];
//tampilkan andi
echo $array['1C'][2];

//data kelas bisa ditulis juga dengan
$array_simple=["1C"=>["udin","ismail","andi"],
    "1D"=>["lukman","fajri","mahmud"]

];