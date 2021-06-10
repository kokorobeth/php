<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Barang masuk</title>
</head>
<body>
    <h2>Cetak Print dari database</h2>

    <?php 
        include 'koneksi.php';
    ?>

    <table border="1">
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Jumlah</th>
        </tr>
        <?php 
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
            while($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['tanggal'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jumlah'] ?></td>
            </tr>
            <?php }  ?>
    </table>
    <br/>
    <a href="cetak.php" target="_BLANK">Print</a>
</body>
</html>