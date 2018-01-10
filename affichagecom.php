<?php

include ('connexion.php');
$stmt= $connexion->query('SELECT * FROM commentaires');
$commentaires = $stmt->fetchAll();



?>


<?php foreach($commentaires as $commentaire){ ?>
	<div><?= $commentaire['les_commentaires'] ?></div>
<?php } ?>