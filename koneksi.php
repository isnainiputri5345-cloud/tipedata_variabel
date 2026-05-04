<?php
$host = "locallhost";
$user = "root";
$password = "";
$db = "db_tib";

$koneksi = new mysqli("localhost", "root", "", "db_tib");

if ($koneksi->connect_error){
    die("koneksi database gagal: " . $koneksi->connect_error);
} else {
    echo "Koneksi berhasil!";
}


?>