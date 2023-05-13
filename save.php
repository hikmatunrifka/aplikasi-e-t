<?php
session_start();
include'navbar.php';
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

          <ul class="about">
            <li class="mx-3"><span>6</span>Postingan</li>
            <li class="mx-3"><span>322</span><a class="text-decorayion-none text-dark"href="pengikut.php">Pengikut</a></li>
            <li class="mx-3"><span>500</span><a class="text-decoration-none text-dark" href="mengikuti.php">Mengikuti</a></li>

           
          </ul>

          <div class="content">
            <p>
              Mencari Berkah
            </p>

           
          </div>
        </div>
        <div class="right__col">
          <nav>
            <ul>
              <li class="mx-3"><a href="profilsaya.php">Post</i> </a></li>
              <li class="mx-3"><a href="">save</a></li>
              <li class="mx-3"><a href="">keterangan barang</a></li>
            
            </ul>
            <button onclick="location.href='editprofil.php'">Edit Profil</button>
          </nav>

          <div class="photos">
            <img src="foto/bunga.jpg" alt="Photo" />
            <img src="foto/bunga.jpg" alt=foto/bunga.jpg/.>
            <img src="foto/bunga.jpg" alt="Photo" />
            <img src="foto/bunga.jpg" alt="Photo" />
            <img src="foto/bunga.jpg" alt="Photo" />
            <img src="foto/bunga.jpg" alt="Photo" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>