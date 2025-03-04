<?php
// Operator Logika

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