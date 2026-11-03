<?php
// 1. Fungsi dengan parameter (tanpa return)
function cetak_ganjil($awal, $akhir) {
for ($i = $awal; $i <= $akhir; $i++) {
if ($i % 2 == 1) {
echo "$i ";
}
}
}
// 2. Fungsi dengan parameter dan return value
function luas_lingkaran($jari_jari) {
$luas = 3.14 * $jari_jari * $jari_jari;
return $luas;
}
// Pemanggilan Fungsi 1
$a = 10;
$b = 30;
echo "<b>Bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b);
echo "<br><br>";
// Pemanggilan Fungsi 2
$r = 10;
echo "Luas lingkaran dengan jari-jari $r cm adalah : " .
luas_lingkaran($r) . " cm persegi";
?>