	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO amerique (texte_amerique, titre_amerique ) VALUE (:texte_amerique, :titre_amerique)");
			$stmt->bindParam(':texte_amerique', $texte_amerique);
			$stmt->bindParam(':titre_amerique', $titre_amerique);
			$texte_amerique = $_POST['text'];
			$titre_amerique = $_POST['title'];
			$succes=$stmt->execute();
	?>
	<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("Etats-Unis.php")',1);
	 window.setTimeout('window.close()',5);
     // -->
	</script>