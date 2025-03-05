<?php

$counter = 1;
// Menggunakan while loop dengan sintaks standar untuk menghitung dari 1 hingga 10
while ($counter <= 10) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
    $counter++; // Increment counter
}

$counter = 1;
// Menggunakan while loop dengan sintaks alternatif untuk menghitung dari 1 hingga 10
while ($counter <= 10) :
    echo "Ini adalah for while ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
    $counter++; // Increment counter
endwhile;
?>