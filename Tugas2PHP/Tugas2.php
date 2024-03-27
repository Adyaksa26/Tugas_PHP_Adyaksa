<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 class="textform">Form Belanja</h2><br>
<form action="Tugas2.php" method="POST" class="form">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="produk" class="col-4 col-form-label">Produk Pilihan</label> 
    <div class="col-8">
      <select id="produk" name="produk" class="custom-select">
        <option value="">--- PILIHAN PRODUK ---</option>
        <option value="laptop">Laptop</option>
        <option value="komputer">Komputer</option>
        <option value="handphone">Handphone</option>
        <option value="ipad">iPad</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Jumlah Beli</label> 
    <div class="col-8">
      <input id="beli" name="beli" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary mr-4">Submit</button>
      <button name="unproses" type="reset" class="btn btn-success">Batal</button>
    </div>
  </div>
</form>

<style>
    .pbody{
        text-align: center;
    }
    .textform{
        text-align: center;
        background-color: lightblue;
        width: 50%;
        margin: 0 auto;
    }
    .form {
        width: 50%;
        margin: 0 auto;
  }
</style>


<?php
$nama = $_POST['nama'];
$pilihproduk = $_POST['produk'];
$jumlahbeli = $_POST['beli']; //nilai yang di input
$proses = $_POST['proses'];

// Harga Satuan
$hargasatuan = 0;

// IF / SWITCHCASE
if ($pilihproduk == 'laptop') {
    $hargasatuan = 1500000; 
} elseif ($pilihproduk == 'komputer') {
    $hargasatuan = 1250000; 
} elseif ($pilihproduk == 'handphone') {
    $hargasatuan = 2000000; 
} elseif ($pilihproduk == 'ipad') {
    $hargasatuan = 1000000; 
}

// Total belanja
$totalbelanja = $jumlahbeli * $hargasatuan;

// Potongan Diskon
$diskon = 0.20 * $totalbelanja;

// PPN
$ppn = 0.10 * ($totalbelanja - $diskon);

// Harga Bersih
$hargabersih = ($totalbelanja - $diskon) + $ppn;

echo '<hr>';

if(isset($proses)){

?>
<!-- cetak dihtml -->
<body>
    <div class="pbody">
        <p>Nama Pelanggan : <?= $nama ?></p>
        <p>Produk Pilihan  : <?= $pilihproduk ?></p>
        <p>Jumlah Beli : <?= $jumlahbeli ?></p>
        <p>Harga Satuan : Rp <?= number_format ($hargasatuan) ?></p>
        <p>Total Belanja : Rp <?= number_format ($totalbelanja) ?></p>
        <p>Potongan Diskon : Rp <?= number_format ($diskon) ?></p>
        <p>PPN : Rp <?= number_format ($ppn) ?></p>
        <p>Harga Bersih : Rp <?= number_format ($hargabersih) ?></p>
    </div>
</body>
<?php } ?>