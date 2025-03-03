<?php

// Menampilkan angka desimal
echo "Decimal : ";
var_dump(1234); // Output: int(1234)

// Menampilkan angka oktal (basis 8)
echo "Octal : ";
var_dump(01234); // Output: int(668) - 01234 dalam oktal sama dengan 668 dalam desimal

// Menampilkan angka heksadesimal (basis 16)
echo "Hexadecimal : ";
var_dump(0x1A); // Output: int(26) - 0x1A dalam heksadesimal sama dengan 26 dalam desimal

// Menampilkan angka biner (basis 2)
echo "Binary : ";
var_dump(0b111111); // Output: int(63) - 0b111111 dalam biner sama dengan 63 dalam desimal

// Menampilkan angka dengan underscore sebagai pemisah ribuan
echo "Underscore in number : ";
var_dump(1_241_241_241); // Output: int(1241241241) - underscore diabaikan oleh PHP

// Menampilkan angka floating point
echo "Floating Point : ";
var_dump(1.234); // Output: float(1.234)

// Menampilkan angka floating point dengan notasi ilmiah (E Notation)
echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3); // Output: float(1700) - 1.7e3 sama dengan 1.7 x 10^3

// Menampilkan angka floating point dengan notasi ilmiah negatif (E Notation)
echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3); // Output: float(0.0017) - 1.7e-3 sama dengan 1.7 x 10^-3

// Menampilkan angka floating point dengan underscore sebagai pemisah ribuan
echo "Underscore di floating point : ";
var_dump(1_123.123); // Output: float(1123.123) - underscore diabaikan oleh PHP

// Menampilkan angka yang melebihi batas integer (Integer Overflow)
echo "Integer Overflow : ";
var_dump(9223372036854775808); // Output: float(9.2233720368548E+18) - PHP mengubahnya menjadi float karena melebihi batas integer

