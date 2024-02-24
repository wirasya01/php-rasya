<?php
if(isset($_POST ['submit'])){
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];
    $usia = $_POST ['usia'];
    $tanggal = $_POST ['tanggal_lahir'];
    $alamat = $_POST ['alamat'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $status = $_POST ['status'];
    $hobi = $_POST ['hobi'];

    echo "Nama : $nama <br>";
    echo "Email : $email <br>";
    echo "Usia : $usia <br>";
    echo "Tanggal : $tanggal <br>";
    echo "Alamat : $alamat <br>";
    echo "Jenis Kelamin : $jenis_kelamin <br>";
    echo "Status : $status <br>";
    echo "Hobi : $hobi <br>";
}
?>



