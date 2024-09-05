<?php
date_default_timezone_set("Asia/Jakarta"); // Mengatur timezone

$nama = readline('Masukkan nama Anda: '); // Meminta input nama
$jam = date('H'); // Mendapatkan jam dalam format 24 jam
$menit = date('i'); // Mendapatkan menit

// Menentukan sapaan berdasarkan jam
if ($jam >= 5 && $jam < 11) {
    $sapaan = "Selamat Pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat Siang";
} elseif ($jam >= 15 && $jam < 19) {
    $sapaan = "Selamat Sore";
} else {
    $sapaan = "Selamat Malam";
}

echo "{$sapaan}, {$nama}, sekarang pukul {$jam}:{$menit}\n";
