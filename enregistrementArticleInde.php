	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO inde (texte_inde, titre_inde ) VALUE (:texte_inde, :titre_inde)");
			$stmt->bindParam(':texte_inde', $texte_inde);
			$stmt->bindParam(':titre_inde', $titre_inde);
			$texte_inde = $_POST['text'];
			$titre_inde = $_POST['title'];
			$succes=$stmt->execute();
	?>
	<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("Inde.php")',1);
	 window.setTimeout('window.close()',5);
     // -->
	</script>