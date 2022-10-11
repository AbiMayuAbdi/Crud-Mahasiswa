<?php
require 'functions.php';

//Ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
   
    //cek apakah data berhasil ditambahkan atau tidak
    if( ubah($_POST) > 0) {
        echo "<div class='alert alert-success'>Data Berhasil di Update <a href='index.php'>Lihat Data</a> </div>";
    } else {
        echo "<div class='alert alert-danger'>Data Gagal di Update <a href='index.php'>Lihat Data</a> </div>";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Update Data Mahasiswa</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Data Mahasiswa</a>
    <a href="index.php" class="btn btn-primary btn-md mb-3"><i class="fa fa-plus"></i>Kembali Ke Tampilan Awal</a>
  </div>
</nav>
<figure class="text-center mt-5">
  <blockquote class="blockquote">
    <p>Data Mahasiswa Uin Sultan Thaha Saifuddin Jambi</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite title="Source Title">Update Data Mahasiswa</cite>
  </figcaption>
</figure>
<form action="" method="post" enctype="multipart/form_data">
  <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
  <input type="hidden" name="gambarLama" value="<?= $mhs["Gambar"]; ?>"> 
<div class="mb-3 row">
    <label for="Nim" class="col-sm-2 col-form-label">Nim</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nim" name="Nim"
      value="<?= $mhs["Nim"];?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Nama" name="Nama" 
      value="<?= $mhs["Nama Mahasiswa"];?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Email" name="Email"
      value="<?= $mhs["Email"];?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
    <select name="Jurusan" id="Jurusan" class="form-select"
    value="<?= $mhs["Jurusan"];?>">
    <option>Pilih Jurusan</option>
    <option value="Sistem Informasi">Sistem Informasi</option>
    <option value="Biologi">Biologi</option>
    <option value="Kimia">Kimia</option>
   </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Fakultas" class="col-sm-2 col-form-label">Fakultas</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Fakultas" name="Fakultas" 
      value="<?= $mhs["Fakultas"];?>">
    </div>
  </div>
  <div class="mb-3 row">

    <label for="Gambar" class="col-sm-2 col-form-label">Gambar</label>
    <div>
    <img src="FotoCRUD/<?= $mhs["Gambar"];?>" width="40"> <br>
    </div>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="Gambar" name="Gambar">
    </div>
  </div>
  <div class="mb-3 row">
    <button type='submit' name='submit' class='btn btn-primary'>Update Data</button>
  </div>
    
  

</form>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>