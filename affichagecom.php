<?php

include ('connexion.php');


$stmt= $connexion->query('SELECT les_commentaires, prenom_inscrit, nom_inscrit FROM commentaires, inscrit
							where inscrit.id_inscrit = commentaires.id_inscrit');
$commentaires = $stmt->fetchAll();



?>


<?php foreach($commentaires as $commentaire){ ?>
	<div><?= $commentaire['les_commentaires'] ?></div>
	<div><?= $commentaire['nom_inscrit'] ?></div>
	<div><?= $commentaire['prenom_inscrit'] ?></div>
	
<?php } ?>