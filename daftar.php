<?php
require"fungsi.php";

if( isset($_POST["daftar"])){
    if( daftar($_POST)>0){
        echo "berhasil";
    }else{
        echo "gagal";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>

<h1>Halaman Registrasi</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="username">username</label>
            <input type="text" name="username" id="username">

            <label for="password">password</label>
            <input type="password" name="password" id="password">

            <label for="email">Email address</label>
            <input type="text" name="email" id="email">

            <label for="no_hp">nomor telepon</label>
            <input type="int" name="no_hp" id="no_hp">
        </li>
        <li>
            <button type="submit" name="register">Registrer</button>
        </li>
    </ul>
</form>
</body>
</html>