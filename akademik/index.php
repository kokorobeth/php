<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Login</title>
</head>
<body>
	<h2>Form Login</h2>
	<br/>
	<br/>
	<?php 
		if(isset($_GET['pesan'])) {
			if($_GET['pesan'] == "gagal") {
				echo "Failed, check your username & password";
			}elseif($_GET['pesan'] == "logout") {
				echo "You've been logged out";
			}elseif($_GET['pesan'] == "belum_login") {
				echo "Anda harus login dahulu untuk akses halaman admin";
			}
		}
	?>

	<form action="cek_login" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td>
					<input type="text" name="username" placeholder="Masukan Username" autocomplete="off">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
					<input type="text" name="password" placeholder="Masukan Password" autocomplete="off">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>