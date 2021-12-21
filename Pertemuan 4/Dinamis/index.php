<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT HALAMAN WEB DINAMIS DENGAN PHP</title>
	<!-- MENGHUBUNGKAN DENGAN CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- MENGHUBUNGKAN DENGAN FILE JQUERY -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
	<div class="content">
		<header>
			<h1 class="judul">PIKSI GANESHA </h1>
			<h3 class="deskripsi">MEMBUAT HALAMAN Web DINAMIS DENGAN PHP</h3>
		</header>

		<div class="menu">
			<ul>
				<li><a href="index.php?page=home">HOME</a></li>
				<li><a href="index.php?page=tentang">TENTANG</a></li>
				<li><a href="index.php?page=tutorial">TUTORIAL</a></li>
			</ul>
		</div>

		<div class="badan"> 
			<?php
				if(isset($_GET['page'])){
					$page = $_GET['page']; 
					switch ($page) {
					case 'home': 
					 	include"halaman/home.php";
					 	break;
					case 'tentang':  
						include"HALAMAN/TENTANG.PHP";
						break;
					case 'tutorial':  
						include"HALAMAN/TUTORIAL.PHP";
						break;
					default:  echo "<CENTER><H3>MAAF.HALAMAN TIDAK di TEMUKAN !</h3></center>";
						break;
				 	}
				 } else {
				 	include "halaman/home.php";  }

			?>						

 		</div>
 	</div>	
</body>
</html>