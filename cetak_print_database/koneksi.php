<?php 
$host = "localhost";
$username = "root";
$password = "";
$db = "gudang";

$koneksi = mysqli_connect($host, $username, $password, $db);

if($koneksi->connect_error) {
    die('Failed to connect');
}
?>