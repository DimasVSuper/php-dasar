<?php
// Operator Penugasan Aritmatika
// $ += $ 
// $ -= $
// $ *= $
// $ /= $
// $ %= $

$total = 0;

$fruit = 5000;
$chicken = 10000;
$orangeJuice = 5000;

// Menambahkan harga buah ke total
$total += $fruit; // $total = $total + $fruit
// Menambahkan harga ayam ke total
$total += $chicken; // $total = $total + $chicken
// Menambahkan harga jus jeruk ke total
$total += $orangeJuice; // $total = $total + $orangeJuice

var_dump($total); // int(20000)

// Mengurangi harga buah dari total
$total -= $fruit; // $total = $total - $fruit
var_dump($total); // int(15000)

// Mengalikan total dengan 2
$total *= 2; // $total = $total * 2
var_dump($total); // int(30000)

// Membagi total dengan 3
$total /= 3; // $total = $total / 3
var_dump($total); // float(10000)

// Menghitung sisa bagi total dengan 1000
$total %= 1000; // $total = $total % 1000
var_dump($total); // int(0)
?>