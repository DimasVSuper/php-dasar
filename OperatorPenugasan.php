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
echo "Total setelah menambahkan buah: $total\n"; // Total setelah menambahkan buah: 5000

// Menambahkan harga ayam ke total
$total += $chicken; // $total = $total + $chicken
echo "Total setelah menambahkan ayam: $total\n"; // Total setelah menambahkan ayam: 15000

// Menambahkan harga jus jeruk ke total
$total += $orangeJuice; // $total = $total + $orangeJuice
echo "Total setelah menambahkan jus jeruk: $total\n"; // Total setelah menambahkan jus jeruk: 20000

var_dump($total); // int(20000)

// Mengurangi harga buah dari total
$total -= $fruit; // $total = $total - $fruit
echo "Total setelah mengurangi buah: $total\n"; // Total setelah mengurangi buah: 15000
var_dump($total); // int(15000)

// Mengalikan total dengan 2
$total *= 2; // $total = $total * 2
echo "Total setelah mengalikan dengan 2: $total\n"; // Total setelah mengalikan dengan 2: 30000
var_dump($total); // int(30000)

// Membagi total dengan 3
$total /= 3; // $total = $total / 3
echo "Total setelah membagi dengan 3: $total\n"; // Total setelah membagi dengan 3: 10000
var_dump($total); // float(10000)

// Menghitung sisa bagi total dengan 1000
$total %= 1000; // $total = $total % 1000
echo "Total setelah menghitung sisa bagi dengan 1000: $total\n"; // Total setelah menghitung sisa bagi dengan 1000: 0
var_dump($total); // int(0)
?>