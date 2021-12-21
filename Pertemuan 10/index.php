<?php 

	require 'functions.php';

	$users = query("SELECT * FROM user");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT CRUD DENGAN PHP DAN MySQL -MENAMPILKAN DATA DARI DATABASE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">
		<h1>MEMBUAT CRUD DENGAN PHP DAN MySQL</h1>
		<h2>MENAMPILKAN DATA DARI DATABASE</h2>
		<h3>www.MALASNGODING.com</h3>
	</div>
	<br/>
	<?php
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "input"){
				echo "DATA BERHASIL di input.";
			}else if($pesan == "update"){
		 		echo "DATA BERHASIL di UPDATE.";
 			}else if($pesan == "hapus"){
				echo "DATA BERHASIL di HAPUS."; 
		 	}
		}
	?>
	<br>	
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	<h3>Data user</h3>
	<table border="1"class="table" cellspacing="0" cellpadding="10">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Opsi</th>
		</tr>
		<?php $i = 1; ?>
		<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $user["nama"]; ?></td>
			<td><?php echo $user["alamat"]; ?></td>
			<td><?php echo $user["pekerjaan"]; ?></td>
			<td><a href="edit.php?id=<?php echo $user["id"] ?>">Edit</a> | <a href="hapus.php?id=<?php echo $user["id"] ?>">Hapus</a></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>		
</body>
</html>