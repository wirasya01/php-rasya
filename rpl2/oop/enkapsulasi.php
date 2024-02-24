<?php

class manusia{

    public $nama = "rasya";

    private function tampilkan_nama(){
        echo "nama saya wiras <br/>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();

//manggil method
echo $cetak->keluarkan();
//manggil properti
echo $cetak->nama;

?>