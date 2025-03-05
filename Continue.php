<?php

// Menggunakan for loop untuk menghitung dari 1 hingga 100
for ($counter = 1; $counter <= 100; $counter++) {
    // Memeriksa apakah nilai counter adalah bilangan genap
    if ($counter % 2 == 0) {
        continue; // Melompati iterasi saat ini jika counter adalah bilangan genap
    }
    echo "Counter : $counter" . PHP_EOL; // Menampilkan nilai counter jika tidak genap
}
?>
