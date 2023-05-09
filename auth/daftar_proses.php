<?php
// Mendapatkan data yang dikirim melalui metode POST
include 'koneksi.php';
$nomorTelepon = $_POST['no_telepon'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Melakukan validasi atau manipulasi data sesuai kebutuhan Anda

// Contoh validasi sederhana
if (empty($nomorTelepon) || empty($username) || empty($password) || empty($email)) {
    echo "Mohon lengkapi semua kolom pada formulir pendaftaran.";
    // Jika ada data yang kosong, Anda bisa menampilkan pesan error atau melakukan tindakan lainnya.
} else {
   
    // Periksa koneksi database
    if (mysqli_connect_errno()) {
        echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
        // Jika koneksi database gagal, Anda bisa menampilkan pesan error atau melakukan tindakan lainnya.
    } else {
        // Escaping karakter khusus pada data sebelum disimpan ke database (untuk mencegah SQL injection)
        $nomorTelepon = mysqli_real_escape_string($conn, $nomorTelepon);
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        $email = mysqli_real_escape_string($conn, $email);

        // Query untuk menyimpan data ke tabel pengguna
        $query = "INSERT INTO tb_masyarakat (nomor_telepon, username, password, email_address) 
                  VALUES ('$nomorTelepon', '$username', '$password', '$email')";

        // Eksekusi query
        if (mysqli_query($conn, $query)) {
            echo "Pendaftaran berhasil! Akun Anda telah dibuat.";
            header('location: ../login.php');
            // Jika pendaftaran berhasil, Anda bisa menampilkan pesan sukses atau melakukan tindakan lainnya.
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($conn);
            // Jika terjadi kesalahan saat menyimpan data ke database, Anda bisa menampilkan pesan error atau melakukan tindakan lainnya.
        }

        // Tutup koneksi database
        mysqli_close($conn);
    }
}
?>
