<?php 
//koneksi ke database 
include 'koneksi.php';


//menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//input data ke database
mysqli_query($koneksi, "insert into mahasiswa values('', '$nama', '$nim', '$alamat')");

//memindahkan halaman kembali ke index.php
header("location:index.php");
?>