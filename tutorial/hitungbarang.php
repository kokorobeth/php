<?php
// https://www.malasngoding.com
 
// menghubungkan dengan koneksi database
include 'koneksi.php';
 
// mengambil data barang
$data_barang = mysqli_query($koneksi,"SELECT * FROM barang");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($data_barang);
?>
 
<p>Jumlah data barang : <b><?php echo $jumlah_barang; ?></b></p>