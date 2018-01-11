<?php
	include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO commentaires (nom,commentaire,id_article) VALUE (:nom, :commentaire, :id_article)");
			$stmt->bindParam(':nom', $nom);
			$stmt->bindParam(':commentaire', $commentaire);
			$stmt->bindParam(':id_article', $id_article);
			$nom = $_POST['nom'];
			$commentaire = $_POST['commentaire'];
			$id_article = $_POST['titre'];
			$succes=$stmt->execute();
			
			$location = $_POST['location'];
			$article = $_POST['article'];
			header('Location: article.php?article='.$article.'&location='.$location);

?>