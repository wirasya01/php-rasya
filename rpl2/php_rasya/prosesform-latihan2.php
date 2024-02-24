<?php
$nama = @$_REQUEST['nama'];
$tahun_lahir = @$_REQUEST['tahunlahir'];

if ($tahun_lahir >= 1944 && $tahun_lahir <= 1964) {
    $golongan = "Baby Boomer";
} elseif ($tahun_lahir >= 1965 && $tahun_lahir <= 1979) {
    $golongan = "golongan X";
} elseif ($tahun_lahir >= 1980 && $tahun_lahir <= 1994) {
    $golongan = "golongan Y (Millennials)";
} elseif ($tahun_lahir >= 1995 && $tahun_lahir <= 2015) {
    $golongan = "golongan Z";
} else {
    $golongan = "golongan tidak terdefinisi";
}


echo "<Center>";
echo "Nama: $nama <br>";
echo "Tahun: $tahun_lahir <br>";
echo "Golongan: $golongan <br>";
?>
    