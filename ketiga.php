<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    // Constructor untuk inisialisasi jari_jari
    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola extends Lingkaran
{
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung extends Lingkaran
{
    public $tinggi;

    // Constructor untuk inisialisasi jari_jari dan tinggi
    public function __construct($jari_jari, $tinggi)
    {
        parent::__construct($jari_jari);
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut extends Lingkaran
{
    public $tinggi;

    // Constructor untuk inisialisasi jari_jari dan tinggi
    public function __construct($jari_jari, $tinggi)
    {
        parent::__construct($jari_jari);
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat objek dari class Kerucut dengan nama nasi_tumpeng
$nasi_tumpeng = new Kerucut(4, 10);

// Menjalankan fungsi volume
$volume_nasi_tumpeng = $nasi_tumpeng->volume();

// Menampilkan hasil volume
echo "Volume nasi tumpeng adalah: {$volume_nasi_tumpeng} cm³";

?>
