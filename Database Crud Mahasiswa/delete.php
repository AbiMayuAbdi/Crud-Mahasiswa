<?php
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "<div class='alert alert-success'>Data Berhasil di Hapus <a href='index.php'>Lihat Data</a> </div>";

} else {
    echo "<div class='alert alert-danger'>Data Gagal di Hapus <a href='index.php'>Lihat Data</a> </div>"; 
}

?>