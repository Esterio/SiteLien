<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="Angleterre.css"> 
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		<script>tinymce.init({
				  selector: 'textarea',  // change this value according to your HTML
				  toolbar: false,
				  branding: false,
				  width:"110%",
				  });
		</script>
		<title>Voyages autour du monde</title>
		
	</head>
	
	<body>
		<?php
			include 'navbarangleterre.php';
		?>
		<div class="container">
			<div class="row">
			<div class="col">
			 <form action="enregistrementarticle.php">
			<textarea id="mytextarea"></textarea>
			<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>