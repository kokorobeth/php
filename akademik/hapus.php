<?php 

//koneksi ke database 
include 'koneksi.php';

//menangkap data id yang dikirim dari URL
$id = $_GET['id'];

//menghapus data dari database 
mysqli_query($koneksi, "delete from mahasiswa where id = '$id'");

//mengalihkan halaman ke index.php
header("location:index.php");

?>