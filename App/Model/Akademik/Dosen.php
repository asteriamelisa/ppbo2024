<?php
namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

class Dosen extends Pegawai
{
    private int $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn=$nidn;
    }

    public function mengajar(): void
    {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}