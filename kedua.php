<?php
// Fungsi menghitung luas lingkaran
function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

// Fungsi menghitung keliling lingkaran
function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

// Fungsi menghitung volume bola
function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

// Fungsi menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Fungsi menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Contoh penggunaan fungsi
$jari = 45;
$tinggi = 100;

$luas_tanah = luasLingkaran($jari);
$keliling = kelilingLingkaran($jari);
$vol_bola = volumeBola($jari);
$vol_tabung = volumeTabung($jari, $tinggi);
$vol_kerucut = volumeKerucut($jari, $tinggi);

echo "Luas tanah Budi adalah {$luas_tanah}\n";
echo "Keliling lingkaran adalah {$keliling}\n";
echo "Volume bola adalah {$vol_bola}\n";
echo "Volume tabung adalah {$vol_tabung}\n";
echo "Volume kerucut adalah {$vol_kerucut}\n";
?>
