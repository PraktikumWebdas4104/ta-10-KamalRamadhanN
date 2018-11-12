<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Genre Film</td>
					<td>:</td>
					<td><select name="genre">
						<option value="Horror">Horror</option>
						<option value="Action">Action</option>
						<option value="Anime">Anime</option>
						<option value="Thriller">Thriller</option>
						<option value="Animasi">Animasi</option>
					</select></td>
				</tr>
				<tr align="center">
					<td>Tempat Wisata</td>
					<td>:</td>
					<td><select name="tempatwisata">
						<option value="Bali">Bali</option>
						<option value="Raja Ampat">Raja Ampat</option>
						<option value="Pulau Derawan">Pulau Derawan</option>
						<option value="Bangka Belitung">Bangka Belitung</option>
						<option value="Labuan Lajo">Labuan Lajo</option>
					</select></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
	}
?>