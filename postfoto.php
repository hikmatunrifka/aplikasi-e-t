<?php
include'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Trash</title>
    <link rel="stylesheet" href="style/postfoto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Trash</title>
</head>
<body>
  <div class="container mt-4">
    <h1>Post Foto</h1>
    <hr class="border border-success border-2 opacity-90" >
    
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Foto</label>
        <input class="form-control" type="file" id="formFile"></div>

    <div class="mb-3 row mt-4">
    <label  for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="nama_barang" placeholder="....">
    </div>
    <label for="deskripsi_barang" class="col-sm-2 col-form-label">Deskripsi Barang</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="deskripsi_barang" placeholder="....">
    </div>
    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="harga" placeholder="....">
    </div>
    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="stok" placeholder="....">
    </div>
    <div class="mb-3 row mt-3">
      <div type="col">
        <button type="button" class="btn-post">Pos Foto</button>
        <a href="masukAkun.php" type="button" class="btn-cancel text-decoration-none">Batal</a>
      </div>

    </div>
  </div>
</body>
</html>