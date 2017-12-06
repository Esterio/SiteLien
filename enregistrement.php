<?php
/* récupération des données du formulaire */
include ('connexion.php');
/* connexion à la bdd */

$stmt = $connexion->prepare("INSERT INTO inscrit (nom_inscrit,prenom_inscrit,date_naiss,ville,pays,email,mot_de_passe) VALUE (:nom_inscrit, :prenom_inscrit, :date_naiss, :ville, :pays, :email, :mot_de_passe )");
$stmt->bindParam(':nom_inscrit', $nom);
$stmt->bindParam(':prenom_inscrit', $prenom);
$stmt->bindParam(':date_naiss', $date_naiss);
$stmt->bindParam(':ville', $ville);
$stmt->bindParam(':pays', $pays);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':mot_de_passe', $mot_de_passe);

$nom = $_POST['nom_inscrit'];
$prenom = $_POST['prenom_inscrit'];
$date_naiss = $_POST['date_naiss'];
$ville = $_POST['ville'];
$pays = $_POST['pays'];
$email = $_POST['email'];
$mot_de_passe = $_POST['mot_de_passe'];


$succes=$stmt->execute();
?>
