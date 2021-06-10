<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan Mysqli</title>
</head>
<body>
    <h2>Latihan CRUD Mahasiswa</h2>

    <a href="tambah.php">+ Tambah data mahasiswa</a>
    <br>
    <br>
    <table border="1" cellspacing="0" cellpadding="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>

        <?php 
            include 'koneksi.php';

            $no = 1;
            $data = mysqli_query($koneksi, "select * from mahasiswa");
            while($mhs = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['alamat']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $mhs['id'] ?>">Edit</a>
                        <a href="hapus.php?id=<?= $mhs['id'] ?>">Hapus</a>
                    </td>
                </tr>
                <<?php
                 }
                 ?>
            
        
    </table>
</body>
</html>