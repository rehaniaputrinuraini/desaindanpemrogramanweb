<?php
// soal2.php

// Data siswa dalam bentuk array asosiatif
$siswa = [
    ["no" => 1, "poin" => 75, "nama" => "Adi"],
    ["no" => 2, "poin" => 80, "nama" => "Joni"],
    ["no" => 3, "poin" => 65, "nama" => "Jihan"],
    ["no" => 4, "poin" => 70, "nama" => "Aya"],
    ["no" => 5, "poin" => 85, "nama" => "Ita"],
    ["no" => 6, "poin" => 90, "nama" => "Budi"],
    ["no" => 7, "poin" => 95, "nama" => "Tini"],
    ["no" => 8, "poin" => 65, "nama" => "Sari"]
];

// a) Tampilkan poin siswa dengan nomor urut 5
echo "<h3>a) Poin siswa dengan nomor urut 5</h3>";
foreach ($siswa as $data) {
    if ($data["no"] == 5) {
        echo "Siswa: " . $data["nama"] . "<br>";
        echo "Poin : " . $data["poin"] . "<br>";
    }
}

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<h3>b) Siswa dengan poin 90</h3>";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 90) {
        echo $data["nama"] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 90.<br>";
}

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<h3>c) Siswa dengan poin 100</h3>";
$found = false;
foreach ($siswa as $data) {
    if ($data["poin"] == 100) {
        echo $data["nama"] . "<br>";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada siswa dengan poin 100.<br>";
}
?>
