<?php
include'navbar.php';
?>
<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'db_e-trash';

    $conn = mysqli_connect($host, $user, $pass, $db);

    mysqli_select_db($conn, $db);
?>
<?php
    $query = "SELECT * FROM tb_video;";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_row($sql);
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

    <div class="container">
    <div class="row mt-5 ">
    <?php
        while($result = mysqli_fetch_assoc($sql)){
    ?>
        <div class="col-md-4 mt-4 ">
          <div class="card mb-4">
          <div class="card-header"><img src="file_kerajinan/img1.jpg" height="30" width="30"> <a href="" class="text-decoration-none text-dark">amishop</a><img src="ikon/play.svg"> </div>
          <img src="file_kerajinan/<?php echo $result['nama_thumbnail'];?>" alt="Foto Postingan" height="250" width="300" class="card-img-top">
          <div class="card-body">
                <h5 class="card-title"><?php echo $result['judul_video'];?></h5></div>
          </div>
        </div>
        <?php
       }
    ?>
    </div>

</body>
</html>