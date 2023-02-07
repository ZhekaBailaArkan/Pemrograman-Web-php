<?php

// No. 2
$noAbsen = 1;
while ($noAbsen <= 18) {
    echo "<p>Siswa dengan nomor absen " . $noAbsen . " belajar pemrograman dengan cukup</p>";
    $noAbsen++;
}

echo "</br>";
echo "Perulangan Menggunakan for";
echo "<div style='width: 100%; background: black; height: 5px;'></div>";
echo "</br>";


for ($i = $noAbsen + 1; $i <= 36; $i++) {
    echo "<p>Siswa dengan nomor absen " . $i . " belajar pemrograman dengan baik</p>";
}
