<h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($mhs = mysqli_fetch_array($data)){
        ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $mhs['nama']; ?></td>
				<td><?php echo $mhs['nim']; ?></td>
				<td><?php echo $mhs['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $mhs['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $mhs['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>