<?php
include'navbar.php';
?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Trash</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="style/profil.css" />
  </head>
  <body>
    <main>
      <section class="profil">
        <img
          src="https://th.bing.com/th/id/OIP.Ghae4OEdb4UmC3hkqpFvLAHaGd?pid=ImgDet&rs=1"
          alt="Foto Profil"
        />
        <div>
          <h2>Nama Saya</h2>
          <div class="status">
            <p>Post</p>
            <a class="text-decoration-none text-dark fw-bold" href="pengikut.php">Followers</a>
            <p>Following</p>
          </div>
        </div>
        <a href="#"><button class="btn-edit">Edit Profil</button></a>
      </section>
    </main>
  </body>
</html>
