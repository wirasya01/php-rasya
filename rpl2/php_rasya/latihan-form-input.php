<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="latihan1.css">
    <link href="<https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap>" rel="stylesheet">
    <link href="<https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css>" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Tugas Form</title>
</head>
<body>
    <center>
<form action="proses-latihan-form-input.php" method="POST">
    <h1>Form Pendaftaran</h1>
    <h3>///==========================================================\\\</h3>
    <div style="margin-bottom: 1rem;">
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis" value="Pria"> Pria 
        <input type="radio" name="jenis" value="Wanita"> Wanita
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal">
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kategori Olahraga</label> <br>
        <input type="radio" name="kategori" value="Sepak Bola"> Sepak Bola <br>
        <input type="radio" name="kategori" value="Bulu Tangkis"> Bulu Tangkis <br>
        <input type="radio" name="kategori" value="Renang"> Renang
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Pilihan Kelas</label><br>
            <input type="checkbox" id="kelas1" name="kelas[]" value="Pemula">
        <label for="kelas1">Pemula</label><br>
            <input type="checkbox" id="kelas2" name="kelas[]" value="Menengah">
        <label for="kelas2">Menengah</label><br>
            <input type="checkbox" id="kelas3" name="kelas[]" value="Lanjutan">
        <label for="kelas3">Lanjutan</label>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Kemampuan Fisik</label> <br>
        <textarea name="kemampuan" cols="30" rows="4"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Metode Pembayaran</label> <br>
        <select name="metode">
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col">
                <button class="wave-button">SUBMIT</button>
            </div>
        </div>
    </div>
</form>
</center>
</body>
</html>