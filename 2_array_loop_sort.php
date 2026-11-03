<?php
$arrNilai = array("Zaki" => 70, "Otim" => 90, "Ani" => 80,
"Budi" => 85);
echo "<b>Isi Array Awal:</b><br>";
foreach ($arrNilai as $nama => $nilai) {
echo "Nilai $nama : $nilai <br>";
}
echo "<hr>";
// asort() : Mengurutkan array berdasarkan VALUE secara Ascending (Kecil ke Besar)
asort($arrNilai);
echo "<b>Array setelah diurutkan berdasarkan NILAI
(asort):</b><br>";
foreach ($arrNilai as $nama => $nilai) {
echo "Nilai $nama : $nilai <br>";
}
echo "<hr>";
// krsort() : Mengurutkan array berdasarkan KEY secara Descending (Z ke A)
krsort($arrNilai);
echo "<b>Array setelah diurutkan berdasarkan NAMA
(krsort):</b><br>";
foreach ($arrNilai as $nama => $nilai) {
echo "Nilai $nama : $nilai <br>";
}
?>