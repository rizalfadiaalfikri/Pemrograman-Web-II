<?php 

	require 'functions.php';

	$id = $_GET['id'];

	$user = query("SELECT * FROM user WHERE id = $id")[0];

	if(isset($_POST["simpan"])) {
		if (editData($_POST) > 0) {
			header('Location:index.php?pesan=update');
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
			<tr hidden="true">
				<td>ID</td>
				<td><input type="text" name="id" value="<?php echo $user['id'] ?>"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="nama" value='<?php echo $user['nama'] ?>'></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat" value="<?php echo $user['alamat'] ?>"></td>
			</tr>
			<tr>
				<td>PEKERJAAN</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $user["pekerjaan"] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="simpan">Simpan</button></td>
			</tr>
		</TABLE>
	</form>
</body>
</html>