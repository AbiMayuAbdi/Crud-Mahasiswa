<?php
$conn = mysqli_connect("localhost", "root", "", "database crud mahasiswa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



function tambah($data) {
    global $conn;
$Nim = htmlspecialchars($data["Nim"]);
$Nama = htmlspecialchars($data["Nama"]);
$Email = htmlspecialchars($data["Email"]);
$Jurusan = htmlspecialchars($data["Jurusan"]);
$Fakultas = htmlspecialchars($data["Fakultas"]);

//aplod gambar
$Gambar = upload();
if( !$Gambar) {
    return false;
}

$query = "INSERT INTO Mahasiswa
            VALUES
            ('', '$Nim', '$Nama' , '$Email', '$Jurusan', '$Fakultas', '$Gambar')
            ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}



function upload() {


    $namaFile = $_FILES['Gambar']['name'];
    $ukuranFile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if( $error === 4) {
        echo "<script>
        alert('pilih gambar terlebih dahulu!')
        </script>";
        return false;
    }

    //cek apakah yg diuplod adalah gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
        alert('yang anda aplod bukan gambar!')
        </script>";
        return false;
    }


    //cek jika ukuran gambar terlalu besar
    if( $ukuranFile > 1000000) {
        echo "<script>
        alert('Ukuran gambar terlalu besar!')
        </script>";
        return false;
    }


    //lolos pengecekan gambar siap diuplod
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, 'FotoCRUD/' . $namaFileBaru);

    return $namaFileBaru;



}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);

}


function ubah($data) {
    global $conn;

$id = $data["id"];
$Nim = htmlspecialchars($data["Nim"]);
$Nama = htmlspecialchars($data["Nama"]);
$Email = htmlspecialchars($data["Email"]);
$Jurusan = htmlspecialchars($data["Jurusan"]);
$Fakultas = htmlspecialchars($data["Fakultas"]);
$gambarLama = htmlspecialchars($data["gambarLama"]);

//cek apakah user pilih gambar atau tidak
if( $_FILES['Gambar']['error'] === 4) {
    $Gambar = $gambarLama;
} else {
    $Gambar = upload();
}


$query = "UPDATE mahasiswa SET 
            Nim = '$Nim',
            Nama = '$Nama',
            Email = '$Email',
            Jurusan = '$Jurusan',
            Fakultas = '$Fakultas',
            Gambar = '$Gambar'
        WHERE id = $id ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}




function cari($keyword) {
    $query = "SELECT * FROM mahasiswa 
                WHERE
            Nim LIKE '$keyword%'
            ";
    return query($query);
}



?>  