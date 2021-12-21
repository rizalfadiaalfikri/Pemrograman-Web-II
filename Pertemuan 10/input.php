<?php 

	require 'functions.php';

	if (isset($_POST["simpan"])) {
		if (tambah($_POST) > 0) {
			header('Location:index.php?pesan=input');
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT CRUD DENGAN PHP DAN MySQL - MENAMPILKAN DATA DARI DATABASE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div CLASS="judul">
<h1>MEMBUAT CRUD DENGAN PHP DAN MySQL</h1>
<h2>MENAMPILKAN DATA DARI DATABASE</h2>
<h3>www.MALASNGODING.com</h3>
</div>
	<br/>
		<A href="index.php">LIHAT SEMUA DATA</A>
	<br/>
	<h3>Input DATA BARU</h3>
	<form method="post">
		<TABLE>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>PEKERJAAN</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="simpan">Simpan</button></td>
			</tr>
		</TABLE>
	</form>
</body>
</html>