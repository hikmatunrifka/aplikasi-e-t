<?php
include'navbar.php';
session_start();
?>

<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_e-trash');

if ( isset($_POST["submit"])){
  $namaVideo = $_POST["nama_video"];
  $namaThumbnail = $_POST["nama_thumbnail"];
  $judulVideo = $_POST["judul_video"];
  $bahan = $_POST["bahan"];
  $alat = $_POST["alat"];
  $idMasyarakat = $_SESSION['id'];

  $query = " INSERT INTO tb_video VALUES ('', '$idMasyarakat', '$namaVideo', '$namaThumbnail', '$judulVideo', '$bahan', '$alat')";

  mysqli_query($conn, $query);

  if( mysqli_affected_rows($conn) > 0){
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.herf = 'beranda.php';
          </script>
      ";
  } else "
        <script>
            alert('data gagal ditambahkan!');
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
    <h1>Post Video</h1>
    <hr class="border border-success border-2 opacity-90" >
    
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Video</label>
        <input class="form-control" type="file" name="nama_video" id="formFile" required></div>

    <div class="mb-3">
        <label for="formFile1" class="form-label">Upload Thumbnail  Video</label>
        <input class="form-control" type="file" name="nama_thumbnail" id="formFile1" required></div>

    <div class="mb-3 row mt-4">
    <label  for="judul_video" class="col-sm-2 col-form-label">Judul Video</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" name="judul_video" id="judul_video" placeholder="...." required>
    </div>

    <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" name="bahan" id="bahan" placeholder="...." required>
    </div>

    <label for="alat" class="col-sm-2 col-form-label">Alat</label>
    <div class="col-sm-10 mb-3">
      <input type="text" class="form-control" name="alat" id="alat" placeholder="...." required>
    </div>

    <div class="mb-3 row mt-3">
      <div type="col">
        <button type="submit" name="submit" class="btn btn-primary" style="background-color: #395144;">Post Video</button>
        
        <a href="masukAkun.php" type="button" class="btn btn-danger">Batal</a>
      </div>

    </div>
    </form>
  </div>
</body>
</html>