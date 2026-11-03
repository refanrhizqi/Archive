<?php
// 1. Indexed Array (Indeks berupa angka)
$arrBuah = array("Mangga", "Apel", "Pisang", "Jeruk");
echo "Buah pada indeks ke-0: " . $arrBuah[0] . "<br>";
echo "Buah pada indeks ke-3: " . $arrBuah[3] . "<br><br>";
// Menambahkan elemen baru ke Indexed Array
$arrWarna = array();
$arrWarna[] = "Merah";
$arrWarna[] = "Biru";
$arrWarna[] = "Hijau";
echo "Warna favorit saya adalah " . $arrWarna[1] . "<br><br>";
// 2. Associative Array (Indeks berupa String)
$arrNilai = array("Ani" => 80, "Otim" => 90, "Ana" => 75,
"Budi" => 85);
echo "Nilai Otim adalah: " . $arrNilai['Otim'] . "<br>";
echo "Nilai Budi adalah: " . $arrNilai['Budi'];
?>