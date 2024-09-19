<?php
namespace App\Admin;
require_once 'App/Admin/Pegawai.php';
class TenagaKependidikan extends Pegawai {
    public $gaji_pokok;
    
    public function cuti() : void {
        echo "($this->nama) telah mengajukan cuti";
    }
}
?>