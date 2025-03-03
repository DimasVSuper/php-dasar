<?php
// Operasi Array
// array[index] = mengakses data di array pada nomor index
// array[index] = mengubah data di array pada nomor index dengan value baru
// array[] = value menambah data di array pada posisi paling belakang 
// unset(array[index]) = menghapus data di array, index otomatis hilang dari array
// count($array) = mengambil total data di array

echo "Array Biasa\n";
// Mendeklarasikan array $values dengan beberapa nilai numerik
$values = array(10, 9, 8, 7.5);
var_dump($values); // Menampilkan isi array $values
echo "\n";

echo "Array String\n";
// Mendeklarasikan array $names dengan beberapa nilai string
$names = ["Dimas", "Bayu", "Nugroho"];
var_dump($names); // Menampilkan isi array $names
echo "\n";

// Menampilkan elemen pertama dari array $names
echo "Elemen pertama dari array \$names:\n";
var_dump($names[0]); // Output: string(5) "Dimas"
echo "\n";

// Mengubah elemen pertama dari array $names
echo "Mengubah elemen pertama dari array \$names menjadi 'Budi':\n";
$names[0] = "Budi";
var_dump($names); // Menampilkan isi array $names setelah perubahan
echo "\n";

// Menghapus elemen kedua dari array $names
echo "Menghapus elemen kedua dari array \$names:\n";
unset($names[1]);
var_dump($names); // Menampilkan isi array $names setelah penghapusan
echo "\n";

// Menambahkan elemen baru ke array $names
echo "Menambahkan elemen baru 'Joko' ke array \$names:\n";
$names[] = "Joko";
var_dump($names); // Menampilkan isi array $names setelah penambahan
echo "\n";

// Menampilkan jumlah elemen dalam array $names
echo "Jumlah elemen dalam array \$names:\n";
var_dump(count($names)); // Output: int(3)
echo "\n";

echo "Array Asosiatif\n";
// Mendeklarasikan array asosiatif $Dimas dengan beberapa nilai
$Dimas = array(
    "id" => "Dimas",
    "name" => "Dimas Nugroho",
    "age" => 18,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($Dimas); // Menampilkan isi array $Dimas
echo "\n";

// Menampilkan nilai dari kunci "name" dalam array $Dimas
echo "Nilai dari kunci 'name' dalam array \$Dimas:\n";
var_dump($Dimas["name"]); // Output: string(12) "Dimas Nugroho"
echo "\n";

// Menampilkan nilai dari kunci "country" dalam array "address" di $Dimas
echo "Nilai dari kunci 'country' dalam array 'address' di \$Dimas:\n";
var_dump($Dimas["address"]["country"]); // Output: string(9) "Indonesia"
echo "\n";

echo "Array Asosiatif Lain\n";
// Mendeklarasikan array asosiatif $budi dengan beberapa nilai
$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
];
var_dump($budi); // Menampilkan isi array $budi