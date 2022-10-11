<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $mahasiswa = cari($_POST["keyword"]);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <div class="container">
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Data Mahasiswa</a>
    <form action="" method="post" class="d-flex">
      <input class="form-control me-2" type="text" name= "keyword" placeholder="Search" aria-label="Search" autofocus autocomplete="off">
      <button class="btn btn-outline-success" type="submit" name="cari">Search</button>
    </form>
  </div>
</nav>

<figure class="text-center mt-5">
  <blockquote class="blockquote">
    <p>Data Mahasiswa Uin Sultan Thaha Saifuddin Jambi</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    <cite title="Source Title">CRUD : Create, Read, Update, dan Delete</cite>
  </figcaption>
</figure>
<a href="Tambah.php" class="btn btn-primary btn-md mb-3"><i class="fa fa-plus"></i>Tambah Data Mahasiswa</a>
<table class="table table-hover table-bordered align-middle">
    <thead class="table-dark">
  <thead>
    <tr align = middle>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Fakultas</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <?php $i = 1;?>
  <?php foreach ($mahasiswa as $row ) : ?>
  <tbody>
    <tr>
      <th><?= $i ; ?></th>
      <td><?= $row["Nim"]; ?></td>
        <td><?= $row["Nama Mahasiswa"]; ?></td>
        <td><?= $row["Email"]; ?></td>
        <td><?= $row["Jurusan"]; ?></td>
        <td><?= $row["Fakultas"]; ?></td>
        <td><img src="FotoCRUD/<?php echo $row["Gambar"];?>" width="100px"></td>
        <td>
        <div class='row'>
                    <div class='col d-flex justify-content-center'>
                    <a href='Update.php?id=<?= $row["id"]; ?>' class='btn btn-sm btn-warning'><i class='fa fa-edit'></i>Update</a>
                    </div>
                    <div class='col d-flex justify-content-center'>
                    <a href='delete.php?id=<?= $row["id"]; ?>' onclick="return confirm('Yakin Ingin Menghapus Data?');" class='btn btn-sm btn-danger'><i class='fa fa-trash'></i>Delete</a>
                    </div>
    </tr>
   
  </tbody>
  <?php $i++; ?>
  <?php endforeach; ?>
    
</table>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>