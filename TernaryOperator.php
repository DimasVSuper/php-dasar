<?php

// Mendefinisikan variabel gender dengan nilai "PRIA"
$gender = "PRIA";

// Menggunakan operator ternary untuk menentukan nilai variabel hi
// Jika gender adalah "PRIA", maka hi akan bernilai "Hi bro!"
// Jika gender bukan "PRIA", maka hi akan bernilai "Hi nona!"
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi nona!";

// Menampilkan nilai variabel hi diikuti dengan karakter akhir baris
echo $hi . PHP_EOL;

