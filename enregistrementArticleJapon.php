	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO japon (texte_japon, titre_japon ) VALUE (:texte_japon, :titre_japon)");
			$stmt->bindParam(':texte_japon', $texte_japon);
			$stmt->bindParam(':titre_japon', $titre_japon);
			$texte_japon = $_POST['text'];
			$titre_japon = $_POST['title'];
			$succes=$stmt->execute();
	?>
	<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("Japon.php")',1);
	 window.setTimeout('window.close()',5);
     // -->
	</script>