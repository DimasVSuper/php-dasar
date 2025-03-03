<?php

// Mendeklarasikan variabel $name dengan nilai "Eko"
$name = "Dimas";
// Mengubah nilai variabel $name menjadi null
$name = null;

// Mendeklarasikan variabel $age dengan nilai null
$age = null;

// Menampilkan teks "Name : " diikuti dengan nilai dari variabel $name (yang sekarang null)
echo "Name : ";
echo $name;
echo "\n"; // Menambahkan baris baru

// Menampilkan teks "Age : " diikuti dengan nilai dari variabel $age (yang sekarang null)
echo "Age : ";
echo $age;
echo "\n"; // Menambahkan baris baru

// Menampilkan teks "Is Name Null? : " diikuti dengan hasil dari fungsi is_null($name)
echo "Is Name Null? : ";
var_dump(is_null($name)); // Output: bool(true) - karena $name adalah null
echo "\n"; // Menambahkan baris baru

// Mendeklarasikan variabel $contoh dengan nilai "Eko"
$contoh = "Dimas";
// Menghapus variabel $contoh
unset($contoh); // Menghapus variabel $contoh dari memori

// Mendeklarasikan kembali variabel $contoh dengan nilai "Kurniawan"
$contoh = "Nugroho";
// Mengubah nilai variabel $contoh menjadi null
$contoh = null;

// Menampilkan hasil dari fungsi isset($contoh)
var_dump(isset($contoh)); // Output: bool(false) - karena $contoh adalah null

/*
Penjelasan tentang unset dan isset:
- unset($variable) digunakan untuk menghapus variabel dari memori. Setelah variabel di-unset, variabel tersebut tidak lagi tersedia dalam program.
- isset($variable) digunakan untuk memeriksa apakah variabel telah diatur dan nilainya tidak null. Jika variabel telah di-unset atau nilainya null, isset akan mengembalikan false.

Bahaya penggunaan unset:
- Menggunakan unset dapat menyebabkan bug yang sulit dilacak jika variabel yang dihapus masih diperlukan di bagian lain dari program.
- Menghapus variabel yang tidak seharusnya dihapus dapat menyebabkan kesalahan runtime atau perilaku tak terduga.
- Sebaiknya gunakan unset dengan hati-hati dan pastikan variabel yang dihapus tidak akan digunakan lagi di bagian lain dari kode.
*/