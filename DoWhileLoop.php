<?php

$counter = 1;
// Menggunakan do-while loop untuk menghitung dari 100 hingga 10
do {
    echo "Ini adalah do while ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
    $counter++; // Increment counter
} while ($counter <= 10); // Kondisi loop: akan terus berjalan selama $counter <= 10
?>