<?php
$namaHari = array("Senin","Selasa","Rabu","Kamis","Jumat");

echo "<h3>Daftar 7 Nama hari:</h3>";
echo "<ul>";
for ($i = 0; $i < count($namaHari); $i++){
    echo "<li>$namaHari[$i]</li>";
}
echo "</ul>";
?>