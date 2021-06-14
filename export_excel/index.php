<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: green;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
	<center>
		<h1>Export Data Ke Excel Dengan PHP</h1>
	</center>

	<center>
		<a target="_blank" href="export_excel.php">EXPORT KE EXCEL</a>
	</center>

	<table>
		<tr>
			<th>No.</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No.Telepon</th>
		</tr>

		<?php 

			//koneksi database
			$koneksi = mysqli_connect('localhost','root', '', 'pegawai');
			
			//menampilkan databse
			$query = mysqli_query($koneksi, "SELECT * FROM data_pegawai");
			$no = 1;
			
			while($data = mysqli_fetch_array($query)) {
		?>

		<tr>
			<td><?php $no++; ?></td>
			<td><?= $data['nama']; ?></td>
			<td><?= $data['alamat'] ?></td>
			<td><?= $data['telepon']; ?></td>
		</tr>

		<?php } ?>
	</table>
</body>
</html>