<?php

// Menampilkan string menggunakan single quote
echo 'Name : ';
echo 'Dimas Bayu Nugroho';
echo "\n"; // Menambahkan baris baru

// Menampilkan string menggunakan double quote
echo "Name : ";
echo "Dimas\t Bayu\t Nugroho\n"; // \t digunakan untuk tab, \n untuk baris baru

// Menampilkan string menggunakan heredoc
echo <<<HEREDOC
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

HEREDOC;

// Nowdoc mirip seperti heredoc yang membedakan adalah pada nowdoc tidak memiliki kemampuan parsing 
// seperti di heredoc atau double quote
echo <<<'NOWDOC'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
NOWDOC;
