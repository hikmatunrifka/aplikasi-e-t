<?php
include'navbar.php';
?>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_e-trash');

if ( isset($_POST["submit"])){
  $namaFoto = $_POST["nama_foto"];
  $namaBarang = $_POST["nama_barang"];
  $dekripsiBarang = $_POST["deskripsi_barang"];
  $harga = $_POST["harga"];
  $stok = $_POST["stok"];

  $query = " INSERT INTO tb_produk VALUES ('', '$namaFoto', '$namaBarang', '$dekripsiBarang', '$harga', '$stok')";

  mysqli_query($conn, $query);

  if( mysqli_affected_rows($conn) > 0){
    echo "
        <script>
            alert('Produk berhasil ditambahkan!');
            document.location.herf = 'beranda.php';
          </script>
      ";
  } else "
        <script>
            alert('Produk gagal ditambahkan!');
            document.location.herf = 'beranda.php';
        </script>
      ";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Trash</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Trash</title>
</head>
<body>
  <div class="container mt-4">
  <form action="" method="post">
    <h1>Post Produk</h1>
    <hr class="border border-success border-2 opacity-90" >
    
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Foto</label>
        <input class="form-control" type="file" name="nama_foto" id="formFile" required></div>

    <div class="mb-3 row mt-4">

    <label  for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="...." required>
    </div>

    <label  for="deskripsi_barang" class="col-sm-2 col-form-label">Deskripsi Barang</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" name="deskripsi_barang" id="deskripsi_barang" placeholder="...." required>
    </div>

    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10 mb-3">
      <input type="number" class="form-control" name="harga" id="harga" placeholder="...." required>
    </div>
    
    <div class="mb-3 row mt-3">
      <div type="col">
        <button type="submit" name="submit" class="btn btn-primary" style="background-color: #395144;">Post Produk</button>
        
        <a href="masukAkun.php" type="button" class="btn btn-danger">Batal</a>
      </div>

    </div>
    </form>
  </div>
</body>
</html>