<?php
$namaBuah=array("nanas","mangga","jeruk","apel","melon","manggis");
echo"saya suka".$namaBuah[0].",".$namaBuah[1].",".$namaBuah[2].",";

//tampilkan manggis
echo"saya suka :".$namaBuah[5]."<br>";
//tampilkan jeruk
echo "saya suka :".$namaBuah[2]."<br>";
//tampilkan apel
echo "saya suka :".$namaBuah[3]."<br>";
//tampilkan melon
echo "saya suka :".$namaBuah[4]."<br>";

//array dengan spesifik index
$umur=array("andi"=>"35 tahun","beni"=>"37 tahun","joe"=>"40 tahun");
$umur['ahmad']="50 tahun";
echo "umur andi adalah".$umur['andi']."<br>";
echo "umur beni adalah".$umur['beni']."<br>";
echo "umur joe adalah".$umur['joe']."<br>";