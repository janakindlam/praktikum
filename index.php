<!DOCTYPE html>
	<head>
		
		<meta charset="utf-8">
		<title> praktikum </title>
		<link rel="stylesheet" href="style.css">


	</head>
	<body>
	
		<p>Tere! Mina olen Jana</p>
		<h1>Pealkiri</h1>
		
		
		<img src="https://www.billigerluxus.de/documents/image/12/125025/Karim--Rashid--Designertapete--Retro--52018--gruen.jpg" alt="Muster" width="350" height=330>
		
		<button onclick="setTimeout(myFunction, 3000);"> Proovi </button>
		
		<script>
		function myFunction() {
			alert('Hello');
		}
		</script>
	<?php	
	echo 'Current PHP version: ' . phpversion();
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	?>
	</body>
</html>


