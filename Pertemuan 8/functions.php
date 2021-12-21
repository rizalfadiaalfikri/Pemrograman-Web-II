<?php 

	$conn = mysqli_connect("localhost","root","","malasngoding");

	function query($query){
		global $conn;

		$result = mysqli_query($conn,$query);
		$rows = [];

		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

	function tambah($data){
		global $conn;

		$nama = htmlspecialchars($data["nama"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$pekerjaan = htmlspecialchars($data["pekerjaan"]);

		$query = "INSERT INTO user 
			VALUES ('','$nama','$alamat','$pekerjaan')
		";

		mysqli_query($conn,$query);
		return mysqli_affected_rows($conn);
	}

 ?>