<?php
//membuat class
class manusia{

    //buat properti/variabel
    public $nama = "rasya";
    public $nama2 = "hasbi";

    //buat method/function
    public function makan(){
        echo"$this->nama suka maakan ayam";
    }
    public function minum(){
        echo"$this->nama2 suka munum susu";
    }
};
//membuat objek
$cetak= new manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();
?>