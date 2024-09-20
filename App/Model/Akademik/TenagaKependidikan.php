<?php
namespace App\Model\Akademik;

Use App\Model\Akademik\Pegawai;

class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;
    
    public function cuti() : void {
        echo "($this->nama) telah mengajukan cuti";
    }
}
?>