<?php
session_start(); // Panggil fungsi session_start() pada awal script

include 'koneksi.php';


$email = $_POST['Email'];
$password =  $_POST['password'];

  // Memeriksa apakah email dan password yang dimasukkan cocok dengan data di database
$query = mysqli_query($conn, "SELECT * FROM tb_masyarakat WHERE email_address='$email' AND password='$password'");
$result = mysqli_num_rows($query);

if($result > 0) {
    // Jika cocok, maka login berhasil
    $_SESSION['email_address'] = $email;
    // echo 'berhasil';
    header("location: ../beranda.html"); // redirect ke halaman dashboard
    // exit(); // Penting: pastikan untuk menghentikan eksekusi script setelah melakukan redirect
} else {
    echo 'gagal';
    // Jika tidak cocok, maka login gagal
    $error = "Email atau password salah.";
}

?>