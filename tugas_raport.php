<?php
// tugas_raport.php
// Data nilai mahasiswa disimpan dalam associative array
$arrNilai = array(
    "Erda"  => 82,
    "Serlina"  => 55,
    "Candra" => 91,
    "Denis"  => 60,
    "Erina"  => 78
);

// Fungsi untuk menentukan grade berdasarkan nilai
function tentukan_grade($nilai) {
    if ($nilai >= 85) {
        return "A";
    } elseif ($nilai >= 75 && $nilai < 85) {
        return "B";
    } elseif ($nilai >= 60 && $nilai < 75) {
        return "C";
    } else {
        return "D (Mengulang)";
    }
}

// Urutkan array berdasarkan nilai (descending)
arsort($arrNilai);

// Tampilkan hasil dalam tabel HTML
echo "<h2>Daftar Nilai Mahasiswa</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Nilai</th><th>Grade</th></tr>";

foreach ($arrNilai as $nama => $nilai) {
    echo "<tr>";
    echo "<td>$nama</td>";
    echo "<td>$nilai</td>";
    echo "<td>" . tentukan_grade($nilai) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
