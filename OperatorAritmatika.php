<?php
// Operator Aritmatika (1)
// +$variable Positif
// -$variable Negatif
// $ + $ Penambahan
// $ - $ Pengurangan
// $ * $ Perkalian
// $ / $ Pembagian
// $ % $ Sisa Bagi
// $ ** $ Pangkat

$a = 10;
$b = 10;

// Penambahan
$result = $a + $b;
var_dump($result); // int(20)

// Negatif
$resultNegative = -$result;
var_dump($resultNegative); // int(-20)

// Positif
$resultPositive = +$result;
var_dump($resultPositive); // int(20)

// Sisa Bagi
$resultModulo = 100 % 3;
var_dump($resultModulo); // int(1)

// Pengurangan
$resultSubtraction = $a - $b;
var_dump($resultSubtraction); // int(0)

// Perkalian
$resultMultiplication = $a * $b;
var_dump($resultMultiplication); // int(100)

// Pembagian
$resultDivision = $a / $b;
var_dump($resultDivision); // float(1)

// Pangkat
$resultExponentiation = $a ** 2;
var_dump($resultExponentiation); // int(100)
?>