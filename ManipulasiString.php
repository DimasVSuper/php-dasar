<?php

$name = "Dimas Bayu Nugroho";

// Menggabungkan string menggunakan operator titik (.)
echo "Name : " . $name . PHP_EOL; // Menampilkan "Name : Dimas Bayu Nugroho"
echo "Value : " . 100 . PHP_EOL; // Menampilkan "Value : 100"

// Konversi tipe data ke string
$valueString = (string)100;
var_dump($valueString); // Menampilkan tipe data dan nilai dari $valueString, yaitu string(3) "100"

// Konversi tipe data ke integer
$valueInt = (int)"100";
var_dump($valueInt); // Menampilkan tipe data dan nilai dari $valueInt, yaitu int(100)

// Konversi tipe data ke float
$valueFloat = (float)"1.01";
var_dump($valueFloat); // Menampilkan tipe data dan nilai dari $valueFloat, yaitu float(1.01)

$name = "Dimas";
// Mengakses karakter dalam string menggunakan indeks
echo $name[0] . PHP_EOL; // Menampilkan karakter pertama dari string $name, yaitu "E"
echo $name[1] . PHP_EOL; // Menampilkan karakter kedua dari string $name, yaitu "k"
echo $name[2] . PHP_EOL; // Menampilkan karakter ketiga dari string $name, yaitu "o"

// Menggabungkan string dengan variabel menggunakan operator titik (.)
echo "Hello " . $name . ", Selamat Belajar PHP" . PHP_EOL; // Menampilkan "Hello Eko, Selamat Belajar PHP"

// Menggabungkan string dengan variabel menggunakan interpolasi
echo "Hello $name, Selamat Belajar PHP" . PHP_EOL; // Menampilkan "Hello Eko, Selamat Belajar PHP"

// Menggunakan kurung kurawal untuk mengakses variabel dalam string
$var = "Dimas";
echo "This is {$var}s" . PHP_EOL; // Menampilkan "This is Ekos"
?>