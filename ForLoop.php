<?php

// Menggunakan for loop dengan sintaks standar untuk menghitung dari 1 hingga 10
for ($counter = 1; $counter <= 10; $counter++) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
}

// Menggunakan for loop dengan sintaks standar untuk menghitung mundur dari 10 hingga 1
for ($counter = 10; $counter >= 1; $counter--) {
    echo "Ini adalah for loop ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
}

// Menggunakan for loop dengan sintaks alternatif untuk menghitung dari 1 hingga 10
for ($counter = 1; $counter <= 10; $counter++):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
endfor;

// Menggunakan for loop dengan sintaks alternatif untuk menghitung mundur dari 10 hingga 1
for ($counter = 10; $counter >= 1; $counter--):
    echo "Ini adalah for loop ke-$counter" . PHP_EOL; // Menampilkan pesan dengan nomor urutan loop
endfor;
?>