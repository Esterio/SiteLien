<?php
/* récupération des données du formulaire */
session_start();
include ('connexion.php');
/* connexion à la bdd */

$les_commentaires = $_POST['les_commentaires'];

$stmt = $connexion->prepare("INSERT INTO commentaires (les_commentaires, id_inscrit) VALUE (:les_commentaires, :id_inscrit)");
$stmt->bindParam(':les_commentaires', $les_commentaires);
$stmt->bindParam(':id_inscrit', $_SESSION['id']);
$succes=$stmt->execute();



if (empty($_POST['les_commentaires']))
	echo "Ne peut être nul";

else
{
	
	header("Location: Accueil.php");
}


?>

