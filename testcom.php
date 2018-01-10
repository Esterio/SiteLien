
<?php
$bdd = new PDO('mysql:host=127.0.0.1;bdname=commentaires;charset=utf8','root','');


if (empty($_POST['commentaires']))
	echo "Ne peut être nul";

else
{
	$commentaire_erreur = "ok";
	echo "ok".$commentaire_erreur;
}


?>

