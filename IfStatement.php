<?php

$nilai = 10;
$absen = 90;

// Menggunakan if-else dengan kurung kurawal
if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL; // Menampilkan "Nilai Anda A" jika nilai dan absen >= 80
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL; // Menampilkan "Nilai Anda B" jika nilai dan absen >= 70
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL; // Menampilkan "Nilai Anda C" jika nilai dan absen >= 60
} else if ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL; // Menampilkan "Nilai Anda D" jika nilai dan absen >= 50
} else {
    echo "Nilai Anda E" . PHP_EOL; // Menampilkan "Nilai Anda E" jika nilai dan absen < 50
}

// Menggunakan if-else dengan sintaks alternatif
if ($nilai >= 80 && $absen >= 80) :
    echo "Nilai Anda A" . PHP_EOL; // Menampilkan "Nilai Anda A" jika nilai dan absen >= 80
elseif ($nilai >= 70 && $absen >= 70):
    echo "Nilai Anda B" . PHP_EOL; // Menampilkan "Nilai Anda B" jika nilai dan absen >= 70
elseif ($nilai >= 60 && $absen >= 60):
    echo "Nilai Anda C" . PHP_EOL; // Menampilkan "Nilai Anda C" jika nilai dan absen >= 60
elseif ($nilai >= 50 && $absen >= 50):
    echo "Nilai Anda D" . PHP_EOL; // Menampilkan "Nilai Anda D" jika nilai dan absen >= 50
else :
    echo "Nilai Anda E" . PHP_EOL; // Menampilkan "Nilai Anda E" jika nilai dan absen < 50
endif;
?>