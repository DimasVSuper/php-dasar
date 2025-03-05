<?php
// Kadang kita hanya butuh menggunakan kondisi sederhana di if statement, seperti hanya
// menggunakan perbandingan ==
// switch adalah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
// kondisi di switch statement hanya untuk perbandingan ==
$nilai = "E";

// Menggunakan switch-case dengan sintaks standar
switch ($nilai) {
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL; // Menampilkan pesan jika nilai adalah "A"
        break; // Menghentikan eksekusi lebih lanjut dalam switch-case
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL; // Menampilkan pesan jika nilai adalah "B" atau "C"
        break; // Menghentikan eksekusi lebih lanjut dalam switch-case
    case "D":
        echo "Anda tidak lulus" . PHP_EOL; // Menampilkan pesan jika nilai adalah "D"
        break; // Menghentikan eksekusi lebih lanjut dalam switch-case
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL; // Menampilkan pesan jika nilai tidak sesuai dengan case yang ada
}

// Menggunakan switch-case dengan sintaks alternatif
switch ($nilai):
    case "A":
        echo "Anda lulus dengan sangat baik" . PHP_EOL; // Menampilkan pesan jika nilai adalah "A"
        break; // Menghentikan eksekusi lebih lanjut dalam switch-case
    case "B":
    case "C":
        echo "Anda lulus" . PHP_EOL; // Menampilkan pesan jika nilai adalah "B" atau "C"
        break; // Menghentikan eksekusi lebih lanjut dalam switch-case
    case "D":
        echo "Anda tidak lulus" . PHP_EOL; // Menampilkan pesan jika nilai adalah "D"
        break; // Menghentikan eksekusi lebih lanjut dalam switch-case
    default:
        echo "Mungkin Anda salah jurusan" . PHP_EOL; // Menampilkan pesan jika nilai tidak sesuai dengan case yang ada
endswitch;
?>