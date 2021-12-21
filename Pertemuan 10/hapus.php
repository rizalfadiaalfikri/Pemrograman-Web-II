<?php 
	
	require 'functions.php';

	$id = $_GET["id"];

	if (hapusData($id) > 0) {
		header('Location:index.php?pesan=hapus');
	}

 ?>