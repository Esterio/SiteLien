	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO pays (titre_article, text_article, location ) VALUE (:titre_article, :text_article, :location)");
			$stmt->bindParam(':text_article', $text_article);
			$stmt->bindParam(':titre_article', $titre_article);
			$stmt->bindParam(':location', $location);
			$text_article = $_POST['text'];
			$titre_article = $_POST['title'];
			$location = $_POST['location'];
			$succes=$stmt->execute();
			
			
			
			header('Location: '.$location.'.php');
	?>
	