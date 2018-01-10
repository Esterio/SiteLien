<!DOCTYPE html>
<html>
<?php 
$location=$_GET["location"];
$article=$_GET["article"];
?>

	<head>
		<meta charset="UTF-8"/>
		<?php echo '<link rel="stylesheet" href="'.$location.'.css">' ?>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Voyages autour du monde</title>
	</head>
	
	<body>
	<?php
	include 'navbar'.$location.'.php';
	include'connexion.php';

	$gg = 'SELECT titre_article,text_article from pays where location = "'.$location.'" and titre_article="'.$article.'"';
	
	echo $gg;
	$requete = $connexion->prepare($gg);
		$requete->execute();
		$lignes = $requete->fetchAll();
		
	
	
	foreach($lignes as $ligne){
		$titre=$ligne["titre_article"];
		$text=$ligne["text_article"];
		
		echo '<div class=hg> '.$titre.'</div>';
		echo '<div class=hf> '.$text.'</div>';
	}
	
	
	?>
	
	</body>