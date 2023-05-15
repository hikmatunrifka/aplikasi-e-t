<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_e-trash';

$conn = mysqli_connect($host, $user, $pass, $db);

mysqli_select_db($conn, $db);
$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM tb_produk WHERE id_produk= '$id'");

if ($result) {
    if ( mysqli_affected_rows($conn) > 0){
        echo "
        <script>
        alert('data berhasil dihapus!');
        document.location.href= 'profilsaya.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('tidak ada data yang dihapus!');
        document.location.href= 'profilsaya.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('gagal menghapus data: " . mysqli_error($conn) . "');
    document.location.href= 'profilsaya.php';
    </script>
    ";
}

