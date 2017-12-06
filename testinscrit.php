<!doctype html>
<html>
<head>

</head>
<body>
<?php
session_start();
include("connexion.php");
$test='';
$requete = $connexion->prepare('SELECT * from inscrit where email = "'.$_POST['email'].'"');
$requete->execute();
$lignes = $requete->fetchAll();
if (count($lignes) != 0)
{
	
	foreach($lignes as $ligne)
	{
	$_SESSION ['nom'] = $ligne ['nom_inscrit'];
	$_SESSION ['prenom'] = $ligne ['prenom_inscrit'];
	
	if (password_verify($_POST['mot_de_passe'], $ligne['mot_de_passe'])) 
	{
	$_SESSION ['connecter'] = 'Oui';
	} 
	else 
	{
		echo 'ERREUR';
	}
	}
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