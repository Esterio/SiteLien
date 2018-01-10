<?php
	include'connexion.php';


$requete = $connexion->prepare('SELECT titre_article,text_article from pays where location = "'.$location.'"');
		$requete->execute();
		$lignes = $requete->fetchAll();
		
	foreach($lignes as $ligne){
		
		echo '<a href="article.php?article='.$ligne["titre_article"].'&location='.$location.'" class=titre>'.$ligne["titre_article"].'</a>';
	}
?>