<?php
session_start();
include'navbar.php';
include'auth/koneksi.php';
$id_masyarakat = $_SESSION['id'];

$query = $query = "SELECT * FROM tb_video JOIN tb_masyarakat ON tb_video.id_masyarakat = tb_masyarakat.id_masyarakat WHERE tb_masyarakat.id_masyarakat = '$id_masyarakat'";
$result = mysqli_query($conn, $query);


    $query1 = "SELECT * FROM tb_produk JOIN tb_masyarakat ON tb_produk.id_masyarakat = tb_masyarakat.id_masyarakat";
    $result1 = mysqli_query($conn, $query1);

// Looping untuk menampilkan data

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Profile Page</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="style/profilsaya.css" />
  </head>
  <body>
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img src="foto/orang.png" alt="Dehya" />
            <span></span>
          </div>
          <h2><?php echo $_SESSION['username'] ?></h2>
          <p><?php echo $_SESSION['email_address'] ?></p>

        </div>
        <div class="right__col">
          <nav>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Postingan
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Jenis Postingan</h1>
      </div>
      <div class="modal-body">
      <center><button type="button" class="btn btn-primary me-5"><a href="newpost.php">Video Tutorial</a></button>
      <button type="button" class="btn btn-primary"><a href="postfoto.php">Foto Produk</button></a></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
            <ul>
              <li class="mx-3">Postingan</i> </a></li>            
            </ul>
            <button onclick="location.href='editprofile.php'">Edit Profil</button>
          </nav>

          <div class="photos">
          <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <div>
            <a href="hapus.php?id=<?= $row["id_video"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
  <button class="btn btn-secondary">Hapus</button>
</a>
            <img src="file_kerajinan/<?php echo $row['nama_thumbnail'];?>"/>
            </div> 
            <?php } ?>
            <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
              <div>
            <a href="hapusproduk.php?id=<?= $row1["id_produk"] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
  <button class="btn btn-secondary">Hapus</button>
</a>
            <img src="file_kerajinan/<?php echo $row1['nama_foto'];?>"/>
            </div> 
              <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>