<?php

// konek ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    global $conn;

    // ambil data dari tiap elemen
    $nama = htmlspecialchars($data["nama"]) ;
    $nrp = htmlspecialchars($data["nrp"]);
    $email = htmlspecialchars($data["email"]);
    $pekerjaan = htmlspecialchars($data["pekerjaan"]);
    $gambar = htmlspecialchars($data["gambar"]);
        
    //query insert dara
    $query = "INSERT INTO masyarakat VALUES ('', '$nama', '$nrp', '$email', '$pekerjaan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM masyarakat WHERE id =$id");
    return mysqli_affected_rows($conn);
}

function daftar($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $email = mysqli_real_escape_string($conn, $data["email"]);
    $no_hp =  mysqli_real_escape_string($conn, $data["no_hp"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result)){
        echo "username sudah digunakan";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$email', '$no_hp')");

    return mysqli_affected_rows($conn);
}