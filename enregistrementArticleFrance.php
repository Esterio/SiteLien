	<?php
		include 'connexion.php';
					
					
			$stmt = $connexion->prepare("INSERT INTO france (texte_france, titre_france ) VALUE (:texte_france, :titre_france)");
			$stmt->bindParam(':texte_france', $texte_france);
			$stmt->bindParam(':titre_france', $titre_france);
			$texte_france = $_POST['text'];
			$titre_france = $_POST['title'];
			$succes=$stmt->execute();
	?>
	<script language="javascript" type="text/javascript">
     <!--
     window.setTimeout('window.open("France.php")',1);
	 window.setTimeout('window.close()',5);
     // -->
	</script>