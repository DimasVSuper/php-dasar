<?php

// Definisikan array asosiatif dengan kunci "action" dan nilai "Create"
$data = [
    // "action" => Null
    "action" => "Create"
];

// Gunakan operator null coalescing untuk memeriksa apakah kunci "action" ada di $data
// Jika ada, tetapkan nilainya ke $action, jika tidak, tetapkan "Nothing"
$action = $data["action"] ?? "Nothing";

// Tampilkan nilai dari $action diikuti dengan karakter newline
echo $action . PHP_EOL;

