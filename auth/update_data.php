<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai-nilai dari formulir
    $nama = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $newPassword = $_POST["new_password"];
    $id = $_SESSION['id'];

    // Query SQL untuk memperbarui data di tabel masyarakat
    if (!empty($newPassword)) {
        $sql = "UPDATE tb_masyarakat SET username = '$nama', email_address = '$email', password = '$newPassword' WHERE id_masyarakat = '$id'";
    } else {
        $sql = "UPDATE tb_masyarakat SET username = '$nama', email_address = '$email' WHERE id_masyarakat = '$id'";
    }

    if (mysqli_query($conn, $sql)) {
        header('location:../profilsaya.php');
        // echo "Data berhasil diperbarui.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

?>
