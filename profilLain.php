<?php
include'navbar.php';
include'auth/koneksi.php';

$id = $_GET['id'];
$query = $query = "SELECT * FROM tb_video JOIN tb_masyarakat ON tb_video.id_masyarakat = tb_masyarakat.id_masyarakat WHERE tb_masyarakat.id_masyarakat = $id";
$result = mysqli_query($conn, $query);

$query1 = "SELECT * FROM tb_produk JOIN tb_masyarakat ON tb_produk.id_masyarakat = tb_masyarakat.id_masyarakat WHERE tb_masyarakat.id_masyarakat = $id";
$result1 = mysqli_query($conn, $query1);

$id = $_GET['id'];
$sql = "SELECT * FROM tb_masyarakat WHERE id_masyarakat = $id";
$result2 = mysqli_query($conn, $sql);
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
  
  <main class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <img src="foto/orang.png" width="200" alt="Foto Profil" class="img-fluid rounded-circle">
      </div>
      <div class="col-md-8">
        <div class="d-flex justify-content-between align-items-center">
          <h1><?php $row1 = mysqli_fetch_assoc($result2); echo $row1['username'];?></h1>
        </div>
        <ul class="list-unstyled">
          <li><strong>3</strong> Postingan</li>
        </ul>
      </div>
    </div>
    <div class="row mt-5">
    <hr class="border border-success border-2 opacity-90 ">
      <center> <b class="fs-4">Postingan</b>
        </center>

          <hr class="border border-success border-2 opacity-90 mt-4">
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4 mt-4">
          <div class="card mb-4">
            <img src="file_kerajinan/<?php echo $row['nama_thumbnail'];?>" alt="Foto Postingan" class="card-img-top"/>
            </div>
          </div>
          <?php } ?>

<?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
  <div class="col-md-4 mt-4">
  <div class="card mb-4">
  <img src="file_kerajinan/<?php echo $row1['nama_foto'];?>" alt="Foto Postingan" class="card-img-top"/>
  </div>
  </div>
  <?php } ?>

    </main>
  
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-WOok3GjRJ3T2LyS7O1zVuw5sxyCBTg4r+QN/wWjYchfjPL1rL6Z2r2d7JQo25TKL" crossorigin="anonymous"></script>
  </body>
  </html>