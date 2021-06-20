<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan FIlter Tanggal</title>
</head>
<body>
    <?php include 'koneksi.php'; ?>
    <center>
        <form action="#" method="get">
            <label for="tanggal">Select Date</label>
            <input type="date" name="tanggal">
            <button type="submit">Filter</button>
        </form>
        <br/>
        <br/>
        <table border="1" cellspacing="5" cellpadding="3">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>Nama</th>
                <th>Jumlah</th>
            </tr>

            <?php 
                $no =1;
                if(isset($_GET['tanggal'])) {
                    $tgl = $_GET['tanggal'];
                    $query = mysqli_query($koneksi, "SELECT * FROM barang_masuk WHERE tanggal = '$tgl'");
                } else {
                    $query = mysqli_query($koneksi, "SELECT * FROM barang_masuk");
                }
                while($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['tanggal'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jumlah'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </center>
</body>
</html>