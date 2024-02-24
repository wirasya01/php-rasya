<?php

function Persegi(){
    $sisi=5;
    $luas= $sisi * $sisi;

    echo "<h3>Mengitung Luas Persegi</h3>";
    echo "Rumus : sisi x sisi <br>";
    echo "sisi : 5 <br>";
    echo "Luasnya : $luas";
}

function persegiPanjang(){
    $panjang = 5;
    $lebar = 4;
    $luas = $panjang * $lebar;

    echo "<h3>Mengitung Luas Persegi Panjang</h3>";
    echo "Rumus : Panjang x Lebar <br>";
    echo "Panjang : 5 <br>";
    echo "Lebar : 4 <br>";
    echo "Luasnya : $luas";
}

function lingkaran(){
    $pi = 22/7;
    $r = 7;
    $luas = $pi * $r * $r;

    echo "<h3>Mengitung Luas Lingkaran</h3>";
    echo "Rumus : π x r x r <br>";
    echo "π : 22/7 <br>";
    echo "Jari-jari : 7 cm  <br>";
    echo "luasnya : $luas cm";
}

function segitiga(){
    $rumus = 1/2;
    $alas = 4;
    $tinggi = 6;
    $luas = $rumus*$alas*$tinggi;

    echo "<h3>Mengitung Luas segitiga</h3>";
    echo "Rumus : 1/2 x alas x tinggi <br>";
    echo "Alas : 4 <br>";
    echo "Tinggi : 6  <br>";
    echo "luasnya : $luas";
}

persegi();
echo "<hr>";
persegiPanjang();
echo "<hr>";
lingkaran();
echo "<hr>";
segitiga();
?>