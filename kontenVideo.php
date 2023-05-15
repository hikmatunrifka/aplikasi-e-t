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
$query = "SELECT * FROM tb_video JOIN tb_masyarakat ON tb_video.id_masyarakat = tb_masyarakat.id_masyarakat";
$sql = mysqli_query($conn, $query);

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
    <title>Video tutorial membuat Bungga dari Gelas Plastik</title>
</head>
<body>
    <div class="container">
<?php
        $result = mysqli_fetch_assoc($sql);{
    ?>
        
        <center><video class="mt-5" controls="true" width="854" height="480">
                <source src="video/<?php echo $result['nama_video'];?>" type="video/webm"></video></center>
<div >
        <table class="table">
  <thead>
    <tr>
      <th scope="col"><img src="file_kerajinan/<?php echo $result['foto_profil'];?>" height="50" width="50"></th>
      <th scope="col"><a href="profilLain.php" class="text-decoration-none text-dark">
        <h3><?php echo $result['username'];?></h3></a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"></th>
      <td><p class="text-start fs-2 mt-3 text-success" ><?php echo $result['judul_video'];?></p>
    </tr>
    <tr>
    <th scope="row"></th>
      <td><p class="text-start fs-5 mt-2 text-success">Bahan : <?php echo $result['bahan'];?></p></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"><p class="text-start fs-5 mt-2 text-success mb-5">Alat : <?php echo $result['alat'];?></p></td></
    </tr>
  </tbody>
</table>

        
    </div>
    <?php
       }
    ?>
    </div>
</body>
</html>