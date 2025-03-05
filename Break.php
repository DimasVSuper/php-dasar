<?php

$counter = 1;

// Menggunakan while loop dengan kondisi true untuk membuat loop tak terbatas
while (true) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
    $counter++; // Increment counter

    // Menggunakan if statement untuk memeriksa kondisi
    if ($counter > 100) {
        break; // Menghentikan loop jika counter lebih besar dari 100
    }
}
?>
