<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if empty($username) || empty($password) || empty($email)) {
    echo "Mohon lengkapi semua kolom pada formulir pembaruan data.";
} else {
    if (mysqli_connect_errno()) {
        echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    } else {
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $email = mysqli_real_escape_string($conn, $email);

        $query = "UPDATE tb_masyarakat SET username='$username', password='$password', email_address='$email'";

        if (mysqli_query($conn, $query)) {
            echo "Data berhasil diperbarui!";
            header('location: ../data_pengguna.php');
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
}
?>
