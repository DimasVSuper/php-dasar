<?php
// Operator Logika dan nama
// $a && $b  // And: Mengembalikan true jika kedua operand bernilai true
// $a and $b // And: Sama seperti &&, tetapi dengan prioritas yang lebih rendah
// $a || $b  // Or: Mengembalikan true jika salah satu operand bernilai true
// $a or $b  // Or: Sama seperti ||, tetapi dengan prioritas yang lebih rendah
// $a xor $b // Xor: Mengembalikan true jika salah satu operand bernilai true, tetapi tidak keduanya
// !$a       // Not: Mengembalikan true jika operand bernilai false
// AND (&&) - True jika kedua operand bernilai true


var_dump(true && true);  // True, karena kedua operand bernilai true
var_dump(true && false); // False, karena salah satu operand bernilai false

// OR (||) - True jika salah satu operand bernilai true
var_dump(true || false); // True, karena salah satu operand bernilai true
var_dump(true || true);  // True, karena kedua operand bernilai true

// XOR (xor) - True jika salah satu operand bernilai true, tetapi tidak keduanya
var_dump(true xor false); // True, karena salah satu operand bernilai true
var_dump(true xor true);  // False, karena kedua operand bernilai true

// NOT (!) - Membalik nilai boolean operand
var_dump(!true);  // False, karena operand bernilai true
var_dump(!false); // True, karena operand bernilai false
?>