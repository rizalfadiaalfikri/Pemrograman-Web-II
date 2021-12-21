<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = mysql_query("SELECT * FROM ADMIN WHERE USERNAME='$username' AND PASSWORD='$password'");
	$cek = mysql_num_rows($query); 

	echo $cek;
?>