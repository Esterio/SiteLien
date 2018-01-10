<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="Chine.css"> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Voyages autour du monde</title>
	</head>
	
	<body>
		<a class=addbutton href="articleChine.php">
		<img src="images/add.png" alt="Ajouter un article" width="100" height="100" border="0">
		</a>
	<?php
		include 'navbarchine.php';
		$location = "Chine";
		include 'verifarticle.php';
	?>
	</body>
</html>