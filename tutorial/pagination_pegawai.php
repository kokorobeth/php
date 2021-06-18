<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Pagination -  Malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<center>
			<h2>Membuat Pagination PHP, MySQLI dan Boostrap 4</h2>
		</center>
		<br>
		<br>
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>Nomor</th>
					<th>Nama</th>
					<th>Umur</th>
					<th>Alamat</th>
				</tr>
			</thead>
			<tbody>
				<?php 				
				$data_pegawai = mysqli_query($koneksi,"select * from pegawai");
				$nomor = 1;
				while($d = mysqli_fetch_array($data_pegawai)){
					?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $d['pegawai_umur']; ?></td>
						<td><?php echo $d['pegawai_umur']; ?></td>
						<td><?php echo $d['pegawai_alamat']; ?></td>
					</tr>
					<?php
				}
				?>
			</tbody>
		</table>	
	</div>
</body>
</html>