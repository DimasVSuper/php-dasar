<?php
// Operator Perbandingan
// $ == $ Sama dengan: True jika $a sama dengan $b setelah dilakukan konversi tipe data
// $ === $ Identik: True jika $a sama dengan $b dan memiliki tipe data yang sama
// $ != $ Tidak sama dengan: True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
// $ <> $ Tidak sama dengan: True jika $a tidak sama dengan $b setelah dilakukan konversi tipe data
// $ !== $ Tidak identik: True jika $a tidak sama dengan $b atau tidak memiliki tipe data yang sama
// $ < $ Lebih kecil dari: True jika $a lebih kecil dari $b
// $ <= $ Lebih kecil atau sama dengan: True jika $a lebih kecil atau sama dengan $b
// $ > $ Lebih besar dari: True jika $a lebih besar dari $b
// $ >= $ Lebih besar atau sama dengan: True jika $a lebih besar atau sama dengan $b

$a = "10";
$b = 10;

// Sama dengan (==)
var_dump($a == $b); // True, karena "10" sama dengan 10 setelah konversi tipe data

// Identik (===)
var_dump($a === $b); // False, karena "10" (string) tidak identik dengan 10 (integer)

// Tidak sama dengan (!=)
var_dump($a != $b); // False, karena "10" sama dengan 10 setelah konversi tipe data

// Tidak sama dengan (<>)
var_dump($a <> $b); // False, karena "10" sama dengan 10 setelah konversi tipe data

// Tidak identik (!==)
var_dump($a !== $b); // True, karena "10" (string) tidak identik dengan 10 (integer)

// Lebih kecil dari (<)
var_dump(10 < 9); // False, karena 10 tidak lebih kecil dari 9

// Lebih besar atau sama dengan (>=)
var_dump(9 >= 9); // True, karena 9 sama dengan 9

// Lebih kecil atau sama dengan (<=)
var_dump(8 <= 10); // True, karena 8 lebih kecil dari 10

// Lebih besar dari (>)
var_dump(10 > 5); // True, karena 10 lebih besar dari 5
?>