	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO angleterre (texte_angleterre, titre_angleterre ) VALUE (:texte_angleterre, :titre_angleterre)");
			$stmt->bindParam(':texte_angleterre', $texte_angleterre);
			$stmt->bindParam(':titre_angleterre', $titre_angleterre);
			$texte_angleterre = $_POST['text'];
			$titre_angleterre = $_POST['title'];
			$succes=$stmt->execute();
	?>
	<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("Angleterre.php")',1);
	 window.setTimeout('window.close()',5);
     // -->
	</script>