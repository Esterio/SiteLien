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
		<script>tinymce.init({
				  selector: 'titlearea',  // change this value according to your HTML
				  toolbar: false,
				  branding: false,
				  width:"30%",
				  height:"10"
				  });
		</script>
		<title>Voyages autour du monde</title>
		
	</head>
	
	<body>
		<h1 id="wow">Titre:</h1>
		<h1 id="si">Corps du texte:</h1>
		<?php
			include 'navbarangleterre.php';
		?>
		<div class="container">
			<div class="row">
			<div class="col">
			<form action="enregistrementArticle.php" method="post">
			<titlearea name="title" id="title"></titlearea>
			<textarea name="text" id="body"></textarea>
			<input type="hidden" name="location" value="Angleterre">
			<input type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>
