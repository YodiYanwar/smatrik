<?php 	
	include 'classes.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Simple Matriculation</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">







</head>
<body>
	<h1 align="center">Aplikasi Simple Matrikulasi</h1><br>
	
	<div class="container">

		<?php 


		
				include 'mahasiswa.php';
		

				
			
		 ?>






		
		<?php 
			// Menampilkan Hasil pada halaman yang sama
		/*	if (isset($_GET['submitNama'])) {
				$coba = test($_GET['nama']);

				if ($coba) {
					echo "<h2>Halo ".$coba."</h2>";
				}
			} */	

			// Menampilkan hasil pada halaman yang berbeda
		/*	if (isset($_GET['nama'])) {
				echo "<script>window.location='mahasiswa?nama=".$_GET['nama']."'</script>";
			}			*/
		 ?>

	</div>

	
  <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>