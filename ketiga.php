<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume($tinggi) : float {
        return self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume($tinggi) : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $tinggi;
    }
}

$nasi_tumpeng = new Kerucut(4);
$volume_nasitumpeng = $nasi_tumpeng->volume(10);
echo "Volume Nasi tumpeng adalah {$volume_nasitumpeng}\n";

$kerucut = new Kerucut(7);
$volume_kerucut = $kerucut->volume(10);
echo "Volume kerucut adalah:  {$volume_kerucut}  \n";

$lingkaran = new Lingkaran(15);
$luaslingkaran = $lingkaran->luas();
$kelilinglingkaran = $lingkaran->keliling();
echo "Luas lingkaran adalah {$luaslingkaran} dan kelilingnya {$kelilinglingkaran}\n";

$bola = new Bola(14);
$volumebola = $bola->volume();
echo "Volume bola adalah {$volumebola}\n";

$tabung = new Tabung(3.5);
$volumetabung = $tabung->volume(10);
echo "Volume tabung adalah {$volumetabung}\n";