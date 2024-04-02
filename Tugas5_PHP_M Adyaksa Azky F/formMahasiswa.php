<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h2 class="textform">Form Nilai Ujian</h2><br>
<form action="objMahasiswa.php" method="POST" class="form">
<div class="form-group row">
    <label for="nim" class="col-4 col-form-label">Nim</label> 
    <div class="col-8">
      <input id="text" name="nim" type="text" class="form-control">
    </div>
  </div>  
<div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kuliah" class="col-4 col-form-label">Kuliah</label> 
    <div class="col-8">
      <select id="kuliah" name="kuliah" class="custom-select">
        <option value="">--- PILIHAN KAMPUS ---</option>
        <option value="Universitas Semarang">Universitas Semarang</option>
        <option value="Universitas Gadjah mada">Universitas Gadjah Mada</option>
        <option value="Universitas Indonesia">Universitas Indonesia</option>
        <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--- PILIHAN MATA KULIAH ---</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="UI/UX">UI/UX</option>
        <option value="HTML CSS">HTML CSS</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="beli" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary mr-4">Simpan</button>
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
        width: 90%;
        margin: 0 auto;
    }
    .form {
        width: 90%;
        margin: 0 auto;
  }
</style>
