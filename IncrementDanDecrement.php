<?php
// a++ Post Increment: Mengembalikan nilai $a, kemudian menaikkan nilai $a sebesar 1
// ++a Pre Increment: Menaikkan nilai $a sebesar 1, kemudian mengembalikan nilai $a
// a-- Post Decrement: Mengembalikan nilai $a, kemudian menurunkan nilai $a sebesar 1
// --a Pre Decrement: Menurunkan nilai $a sebesar 1, kemudian mengembalikan nilai $a

$a = 10; // Inisialisasi variabel $a dengan nilai 10

// Pre-increment: Menambah nilai $a terlebih dahulu, kemudian mengembalikan nilai $a
$b = ++$a; // $a menjadi 11, kemudian nilai $a (11) diberikan ke $b
var_dump($a); // Menampilkan nilai $a, yaitu 11
var_dump($b); // Menampilkan nilai $b, yaitu 11

// Post-increment: Mengembalikan nilai $a, kemudian menambah nilai $a
$c = $a++; // $c menjadi 11, kemudian $a menjadi 12
var_dump($a); // Menampilkan nilai $a, yaitu 12
var_dump($c); // Menampilkan nilai $c, yaitu 11

// Pre-decrement: Menurunkan nilai $a terlebih dahulu, kemudian mengembalikan nilai $a
$d = --$a; // $a menjadi 11, kemudian nilai $a (11) diberikan ke $d
var_dump($a); // Menampilkan nilai $a, yaitu 11
var_dump($d); // Menampilkan nilai $d, yaitu 11

// Post-decrement: Mengembalikan nilai $a, kemudian menurunkan nilai $a
$e = $a--; // $e menjadi 11, kemudian $a menjadi 10
var_dump($a); // Menampilkan nilai $a, yaitu 10
var_dump($e); // Menampilkan nilai $e, yaitu 11
?>
