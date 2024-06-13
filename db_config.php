<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="db_akademik";

$koneksi = new mysqli($servername, $username, $password, $dbname);

if($koneksi->connect_error){
    die ("Koneksi Gagal: ". $koneksi->connect_error);
}
?>