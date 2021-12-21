<!DOCTYPE html>
 <html>
 <HEAD>
	 <title>MEMBUAT HALAMAN WEB DINAMIS DENGAN PHP </title>
	 <!-- MENGHUBUNGKAN DENGAN file css -->
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <!-- MENGHUBUNGKAN DENGAN file jquery -->
	 <script type="TEXT/JAVASCRIPT" src="jquery.js"></script>
 </HEAD>
 <body>


 	<div CLASS="content">
		 <HEADER>
			 <h1 CLASS="judul">PIKSI GANESHA </h1>
			 <h3 CLASS="deskripsi">MEMBUAT HALAMAN WEB DINAMIS DENGAN PHP</h3>
		 </HEADER>

		 <div class="menu">
			 <ul>
			 	<li><a href="INDEX.PHP?PAGE=HOME">HOME</a></li>
				<li><a href="INDEX.PHP?PAGE=TENTANG">TENTANG</a></li>
				<li><a href="INDEX.PHP?PAGE=TUTORIAL">TUTORIAL</a></li>
			</ul>
		 </div>

	 	<div CLASS="BADAN">

			 <?php
			 if(isset($_GET['PAGE'])){
				 $PAGE = $_GET['PAGE'];

				 switch ($PAGE) {
					 CASE 'HOME':  
					 	include"HALAMAN/HOME.PHP";
					 	BREAK;
					 CASE 'TENTANG':  
					 	include"HALAMAN/TENTANG.PHP";
						BREAK;
					 CASE 'TUTORIAL':  
					 	include"HALAMAN/TUTORIAL.PHP";
					 	BREAK;
					 DEFAULT: 
					 	echo "<CENTER><H3>Maaf Halaman Tidak Ditemukan !</h3></center>";
						BREAK;
				 }
			 }else{
			 include "HALAMAN/HOME.PHP"; }

			 ?>

 		</div>
 	</div>
 </body>
 </html>