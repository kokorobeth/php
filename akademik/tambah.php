<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data Mahasiswa</title>
</head>
<body>
    <h2>Crud tambah data mahasiswa</h2>
    <a href="index.php">Kembali</a>

    <h3>Tambah Data Mahasiswa</h3>
    <form action="tambah_action.php" method="post">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" autocomplete="off"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="nim" autocomplete="off"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" autocomplete="off"></td>
            </tr>
        </table>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>