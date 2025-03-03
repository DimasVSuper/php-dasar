<?php
//Operator Aritmatika (1)
// +$variable Positif
// -$variable Negatif
// $ + $ Penambahan
// $ - $ Pengurangan
// $ * $ Perkalian
// $variable / $variable pembagian

$a = 10;
$b = 10;

$result = $a + $b;
var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultModulo = 100 % 3;
var_dump($resultModulo);