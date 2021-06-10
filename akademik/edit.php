<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <a href="index.php">Kembali</a>
    <h3>Edit Data Mahasiswa</h3>

    <?php 
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from mahasiswa where id = '$id'");
        while($mhs = mysqli_fetch_array($data)) {
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $mhs['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $mhs['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="number" name="nim" value="<?php echo $mhs['nim']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $mhs['alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>
        </form>
        <?php 
        }
        ?>
</body>
</html>