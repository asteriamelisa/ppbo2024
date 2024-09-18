<?php
namespace App\Admin;


class Pegawai {
    public int $nip;
    public string $nama;
    protected int $no_hp;
    public string $alamat;


    public function cekIn():bool{
        return true;
    }


    public function cekOut():bool{
        return true;
    }


    public function getNoHp():int{
        return $this->no_hp;
    }


    public function setNoHp($no_hp):void{
        $this->no_hp = $no_hp;
    }
}
