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
		<title>Voyages autour du monde</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel= "icon" type="image/x-icon" href= "favicon.ico"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		
	</head>
	
	<body>
	
	
	<div>
     <iframe width="475" height="425" frameborder="0" src="https://www.bing.com/maps/embed?h=425&w=475&cp=48.00000000000001~-5.999999999999998&lvl=3&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
     </iframe>
     <div style="white-space: nowrap; text-align: center; width: 475px; padding: 6px 0;">
        <a id="largeMapLink" href="https://www.bing.com/maps?cp=48.00000000000001~-5.999999999999998&amp;sty=r&amp;lvl=3&amp;FORM=MBEDLD" target="_blank">Afficher une carte plus grande</a>
            &nbsp; | &nbsp;
            <a id="dirMapLink" href="https://www.bing.com/maps/directions?cp=48.00000000000001~-5.999999999999998&amp;sty=r&amp;lvl=3&amp;rtp=~pos.48.00000000000001_-5.999999999999998____&amp;FORM=MBEDLD" target="_blank">Calculer l’itinéraire</a>
    </div>
</div>
	
	
	<footer>
		<p>
			<li 
				role="presentation"><a href="contact.php" class="text-muted"><i class="glyphicon glyphicon-envelope"></i> Nous contacter </a>

			<li>
		</p>
		</footer>  
		
		
	
		<a class=addbutton href="articleAngleterre.php">
		<img src="images/add.png" alt="Ajouter un article" width="100" height="100" border="0">
		</a>
	<?php
		include'navbarangleterre.php';
		$location = "Angleterre";
		include 'verifarticle.php';
	?>
	</body>
</html>
