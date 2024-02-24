<?php

class contoh{
    public function __construct(){
        echo "Assalamualaikum Ukhty <br>";
    }

    public function perkenalan(){
        echo "Saya rasya <br>";
    }

    public function __destruct(){
        echo "Hallowwwwww";
    }
}
$cetak = new contoh();

echo $cetak->perkenalan();
?>