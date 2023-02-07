<?php

$nilai = 85;

if ($nilai > 100) {
    echo "<h1>Nilai Tidak Terdeteksi</h1>";
} elseif ($nilai == 100) {
    echo "<h1>Istimewa</h1>";
} elseif ($nilai >= 90 && $nilai <= 99) {
    echo "<h1>Baik Sekali</h1>";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "<h1>Baik</h1>";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "<h1>Cukup</h1>";
} elseif ($nilai < 70) {
    echo "<h1>Kurang</h1>";
}
