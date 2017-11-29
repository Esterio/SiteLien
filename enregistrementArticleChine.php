	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO chine (texte_chine, titre_chine ) VALUE (:texte_chine, :titre_chine)");
			$stmt->bindParam(':texte_chine', $texte_chine);
			$stmt->bindParam(':titre_chine', $titre_chine);
			$texte_chine = $_POST['text'];
			$titre_chine = $_POST['title'];
			$succes=$stmt->execute();
	?>
	<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("Chine.php")',1);
	 window.setTimeout('window.close()',5);
     // -->
	</script>