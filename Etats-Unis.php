<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="Etatsunis.css"> 
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
		<a class=addbutton href="articleEtatsunis.php">
		<img src="images/add.png" alt="Ajouter un article" width="100" height="100" border="0">
		</a>
	
	
	<div>
     <iframe width="475" height="425" frameborder="0" src="https://www.bing.com/maps/embed?h=425&w=475&cp=42.044751999999995~-122.89163399999998&lvl=4&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no">
     </iframe>
     <div style="white-space: nowrap; text-align: center; width: 475px; padding: 6px 0;">
        <a id="largeMapLink" href="https://www.bing.com/maps?cp=42.044751999999995~-122.89163399999998&amp;sty=r&amp;lvl=4&amp;FORM=MBEDLD" target="_blank">Afficher une carte plus grande</a>
            &nbsp; | &nbsp;
            <a id="dirMapLink" href="https://www.bing.com/maps/directions?cp=42.044751999999995~-122.89163399999998&amp;sty=r&amp;lvl=4&amp;rtp=~pos.42.044751999999995_-122.89163399999998____&amp;FORM=MBEDLD" target="_blank">Calculer l’itinéraire</a>
    </div>
</div>
	
	
	<footer>
		<p>
			<li 
				role="presentation"><a href="contact.php" class="text-muted"><i class="glyphicon glyphicon-envelope"></i> Nous contacter </a>

			<li>
		</p>
		</footer>  
		
		
	<?php
		include 'navbarEtatsunis.php';
		$location = "Etatsunis";
		include 'verifarticle.php';
	?>
	</body>
</html>
