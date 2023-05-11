<?php
include'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Trash</title>
    <link rel="stylesheet" href="style/newpost.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Trash</title>
</head>
<body>
  <div class="container mt-4">
    <h1>Post Video</h1>
    <hr class="border border-success border-2 opacity-90" >
    
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Video</label>
        <input class="form-control" type="file" id="formFile"></div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Thumbnail  Video</label>
        <input class="form-control" type="file" id="formFile"></div>

    <div class="mb-3 row mt-4">
    <label  for="judul_video" class="col-sm-2 col-form-label">Judul Video</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="judul_video" placeholder="....">
    </div>
    <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="bahan" placeholder="....">
    </div>
    <label for="alat" class="col-sm-2 col-form-label">Alat</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" id="alat" placeholder="....">
    </div>
    <div class="mb-3 row mt-3">
      <div type="col">
        <button type="button" class="btn-post">Pos Video</button>
        <a href="masukAkun.php" type="button" class="btn-cancel text-decoration-none">Batal</a>
      </div>

    </div>
  </div>
</body>
</html>