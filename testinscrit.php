<!doctype html>
<html>
<head>

</head>
<body>
<?php
session_start();
include("connexion.php");
$test='';
$requete = $connexion->prepare('SELECT id_inscrit from inscrit where email = "'.$_POST['email'].'" and mot_de_passe = "'.$_POST['mot_de_passe'].'"');
$requete->execute();
$lignes = $requete->fetchAll();
if (count($lignes) != 0)
{
	$_SESSION ['connecter'] = 'Oui';
	header('Location: Accueil.php');
}
else
{
	$_SESSION['connecter'] = 'Non';
	header('Location: Se_connecter.php');
}
	?>
</body>
</html>