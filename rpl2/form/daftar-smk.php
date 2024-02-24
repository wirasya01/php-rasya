<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa SMK</title>
</head>
<body>
    <form method="POST">
        <center>
        <h1>Daftar SMK</h1>
        <p>//~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\\</p>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tgl_lhr"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                    <input type="radio" name="jk" value="Perempuan">Perempuan
                </td>
            </tr>
            <tr>
                <td>Biaya Registrasi</td>
                <td>:</td>
                <td><input type="number" name="biaya"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><select name="jurusan">
                    <option value="RPL">RPL</option>
                    <option value="TKRO">TKRO</option>
                    <option value="tbsm">TBSM</option>
                </select></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="SUBMIT">
                </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])){
    $nama= $_POST['nama'];
    $tgl_lhr= $_POST['tgl_lhr'];
    $jk= $_POST['jk'];
    $biaya= $_POST['biaya'];
    $jurusan= $_POST['jurusan'];
    
    #Bisaya Jurusan
    if ($jurusan== "RPL"){
        $harga="2500000";
    }else if ($jurusan== "TKRO"){
        $harga="3000000";
    }else if ($jurusan== "TBSM"){
        $harga="3500000";
    } else{
        echo"jurusan Tidak Ada";
    }

    #Total Pembayaran
    $total= $biaya + $harga;

    echo "<center>";
    echo "<p><hr>";
    echo ">>=============================<< <br>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: $tgl_lhr <br>";
    echo "Jenis Kelamin: $jk <br>";
    echo "Biaya Registrasi: $biaya <br>";
    echo "Jurusan: $jurusan <br>";
    echo "Biaya Jurusan: $harga <br>";
    echo "Total Pembayaran: $total <br>";
    echo ">>=============================<<";
}

?>