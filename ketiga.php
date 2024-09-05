<?php

class Lingkaran
{
    const PHI = 3.14;

    public function luas($jari_jari) : float {
        return self::PHI * $jari_jari * $jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2 * self::PHI * $jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;

    public function volume($jari_jari) : float {
        return (4/3) * self::PHI * pow($jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi) : float {
        return self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi) : float {
        return (1/3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

// Membuat objek dari class Kerucut dengan nama nasi_tumpeng
$nasi_tumpeng = new Kerucut();

// Menjalankan fungsi volume dengan jari-jari 4 cm dan tinggi 10 cm
$volume_nasi_tumpeng = $nasi_tumpeng->volume(4, 10);

// Menampilkan hasil volume
echo "Volume nasi tumpeng adalah: {$volume_nasi_tumpeng} cm³";

?>
