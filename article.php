<!DOCTYPE html>
<html>
<?php 
include'connexion.php';
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
	<div class=titre>
	<form action="enregistrementcommentaire.php" method="post">
		Votre nom:<br>
		<input style="color:black" type="text" name="nom"><br>
		Votre Commentaire:<br>
		<input style="color:black" type="text" name="commentaire">
		<?php
		echo '<input type="hidden" name="location" value="'.$location.'">';
		echo '<input type="hidden" name="article" value="'.$article.'">';
		echo '<input type="hidden" name="titre" value="'.$titre.'">';
		?>
		<input style="color:black" type="submit" value="Ajouter votre commentaire">
	</form></div>
	<?php
	$com= 'SELECT DISTINCT nom,commentaire from commentaires where id_article="'.$titre.'" ';
	$requete = $connexion->prepare($com);
		$requete->execute();
		$lignes = $requete->fetchAll();
		
	foreach($lignes as $ligne){
		$nom=$ligne["nom"];
		$commentaire=$ligne["commentaire"];
		
		echo '<div class=fi> '.$nom.'</div>';
		echo '<div class=fi> '.$commentaire.'</div>';

	}
	?>
	</body>