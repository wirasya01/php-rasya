<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="galeri/ujian.css">

    <title>PENGGAJIHAN GURU/KARYAWAN YAYASAN ASSALAAM</title>
  </head>
  <body >
    <center>
    <img src="galeri/logo_assalaam.png" alt="">
    </center>
    <center>
      <h3 class="mt-3"><p>PENGGAJIHAN</p></h3>
      <h3 class="mt-1"><p>GURU/KARYAWAN YAYASAN ASSALAAM</p></h3>
    </center>
<!--card-->
<div class="card mt-5 mr-5 ml-5">
  <div class="card-header font-weight-bold bg-">
    Data Penggajihan
  </div>
  <div class="card-body">
  <form method="post" action="">
  <div class="form-group">
    <label for="">No</label>
    <input type="text" class="form-control" name="no" placeholder="No">
  </div>
  <div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama">
  </div>
  <div class="form-group">
    <label for="">Unit Pendidikan</label><br>
    <select name="pendidikan" id="" class="form-control">
        <option type="placeholder" selected disabled value="">Pilih Unit Pendidikan</option>
        <option value="tk">TK</option>
        <option value="sd">SD</option>
        <option value="smp">SMP</option>
        <option value="sma">SMA</option>
        <option value="smk">SMk</option>
    </select>
  </div>
  <div class="form-group">
    <label for="">Tanggal Gaji</label>
    <input type="date" class="form-control" name="tgl_gaji">
  </div>
  <hr>
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title font-italic">Gaji</h4>
        <hr>
      </div>
      <div class="form-group mt-1 ml-4 mr-4">   
    <label for="">Jabatan</label><br>
    <select name="jabatan" id="" class="form-control">
        <option type="placeholder" selected disabled value="">Pilih Jabatan</option>
        <option value="kepala_sekolah">Kepala Sekolah</option>
        <option value="wakasek">Wakasek</option>
        <option value="guru">Guru</option>
        <option value="karyawan">Karyawan</option>
    </select>
  </div>
  <div class="form-group mt-1 ml-4 mr-4">
    <label for="">Lama Kerja</label>
    <input type="text" class="form-control" name="lama_kerja" placeholder="Lama Kerja">
  </div>
  <div class="form-group mt-1 ml-4 mr-4">
    <label for="">Status Kerja</label><br>
    <select name="status_kerja" id="" class="form-control">
        <option type="placeholder" selected disabled value="">Pilih Status Kerja</option>
        <option value="Tetap">Tetap</option>
        <option value="Kontrak">Kontrak</option> 
    </select>
  </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title font-italic">Potongan</h4>
        <hr>
      </div>
      <div class="form-group mt-1 ml-4 mr-4">
    <label for="">BPJS</label>
    <input type="text" class="form-control" name="bpjs" placeholder="">
  </div>
  <div class="form-group mt-1 ml-4 mr-4">
    <label for="">Pinjaman</label>
    <input type="text" class="form-control" name="pinjaman" placeholder="Pinjaman">
  </div>
  <div class="form-group mt-1 ml-4 mr-4">
    <label for="">Tabungan</label>
    <input type="text" class="form-control" name="tabungan" placeholder="Tabungan">
  </div>
  <div class="form-group mt-1 ml-4 mr-4">
    <label for="">Lainnya</label>
    <input type="text" class="form-control" name="lainnya" placeholder="Lainnya">
  </div>
    </div>
  </div>
</div>
  <button type="submit" name="proces" class="btn btn-primary mt-4">Proces</button>
</form>
  </div>
</div>
<!--card-->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if (isset($_POST['proces'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $pendidikan = $_POST['pendidikan'];
    $tgl_gaji = $_POST['tgl_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['lainnya'];
    $gaji = 0;
    $bonus = 1000000;

    //Gaji
    if($jabatan=="kepala_sekolah"){
        $gaji = 5000000;
    }else if($jabatan=="wakasek"){
        $gaji = 4000000;
    }else if($jabatan=="guru"){
        $gaji = 3000000;
    }else if($jabatan=="karyawan"){
        $gaji = 2000000;
    }else{
        echo " ";
    }

    //Gaji Bersih

    if($status_kerja=="tetap"){
      $bonus;
    } else $gaji;

    $gaji_bersih = ($gaji + $bonus) - ($bpjs - $pinjaman - $tabungan - $lainnya);

    class hasil{
        public function struktur($no1,$nama1,$pendidikan1,$tgl_gaji1,$jabatan1,$gaji1,$lama_kerja1,$status_kerja1,$bonus1,$bpjs1,$pinjaman1,$tabungan1,$lainnya1,$gaji_bersih1){
?>
    <center>
    <div class="card bg-light mb-1 mt-4" style="max-width: 50rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
        <table>
            <tr>
                <td>No</td>
                <td>:</td>
                <td><?php echo $no1 ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama1 ?></td>
            </tr>
            <tr>
                <td>Unit Pendidikan</td>
                <td>:</td>
                <td><?php echo $pendidikan1 ?></td>
            </tr>
            <tr>
                <td>Tanggal Gaji</td>
                <td>:</td>
                <td><?php echo $tgl_gaji1 ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?php echo $jabatan1 ?></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td>:</td>
                <td><?php echo $gaji1 ?></td>
            </tr>
            <tr>
                <td>Lama Kerja</td>
                <td>:</td>
                <td><?php echo $lama_kerja1 ?></td>
            </tr>
            <tr>
                <td>Status Kerja</td>
                <td>:</td>
                <td><?php echo $status_kerja1 ?></td>
            </tr>
            <tr>
                <td>Bonus</td>
                <td>:</td>
                <td><?php echo $bonus1 ?></td>
            </tr>
            <tr>
                <td>BPJS</td>
                <td>:</td>
                <td><?php echo $bpjs1 ?></td>
            </tr>
            <tr>
                <td>Pinjaman</td>
                <td>:</td>
                <td><?php echo $pinjaman1 ?></td>
            </tr>
            <tr>
                <td>Tabungan</td>
                <td>:</td>
                <td><?php echo $tabungan1 ?></td>
            </tr>
            <tr>
                <td>Lainnya</td>
                <td>:</td>
                <td><?php echo $lainnya1 ?></td>
            </tr>
            <tr>
                <td>Gaji Bersih</td>
                <td>:</td>
                <td><?php echo $gaji_bersih1 ?></td>
            </tr>
        </table>
    </div>
    </div>
    </center>
<?php
        }
    }
    $cetak = new hasil();

    echo $cetak-> struktur($no,$nama,$pendidikan,$tgl_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainnya,$gaji_bersih);
}
