<?php
// Operator Array dalam PHP memiliki operator khusus:
// $a + $b Union: Menggabungkan array $a dan $b
// $a == $b Equality: True jika $a dan $b memiliki key-value yang sama
// $a === $b Identity: True jika $a dan $b memiliki key-value yang sama dan urutan yang sama
// $a != $b Inequality: True jika $a dan $b tidak sama
// $a <> $b Inequality: True jika $a dan $b tidak sama
// $a !== $b Non-Identity: True jika $a dan $b tidak identik

$first = [
    "first_name" => "Dimas"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Anggara"
];

// Union: Menggabungkan array $first dan $last
$full = $first + $last;
echo "Union: ";
var_dump($full); // Hasil: array dengan key "first_name" dari $first dan "last_name" dari $last

$a = [
    "first_name" => "Dimas",
    "last_name" => "Nugroho"
];

$b = [
    "last_name" => "Nugroho",
    "first_name" => "Dimas"
];

// Equality: True jika $a dan $b memiliki key-value yang sama
echo "Equality: ";
var_dump($a == $b); // True, karena $a dan $b memiliki key-value yang sama

// Identity: True jika $a dan $b memiliki key-value yang sama dan urutan yang sama
echo "Identity: ";
var_dump($a === $b); // False, karena urutan key-value di $a dan $b berbeda

// Inequality: True jika $a dan $b tidak sama
echo "Inequality (!=): ";
var_dump($a != $b); // False, karena $a dan $b memiliki key-value yang sama

// Inequality: True jika $a dan $b tidak sama
echo "Inequality (<>): ";
var_dump($a <> $b); // False, karena $a dan $b memiliki key-value yang sama

// Non-Identity: True jika $a dan $b tidak identik
echo "Non-Identity: ";
var_dump($a !== $b); // True, karena urutan key-value di $a dan $b berbeda
?>