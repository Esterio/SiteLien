<meta charset="utf-8" />
<?php
include 'connexion.php';
   $commentaires = $connexion->prepare('SELECT * FROM commentaires WHERE id = ?');
   $commentaires->execute();
   $commentaires = $commentaires->fetch();
   if(isset($_POST['submit_commentaire'])) {
      if(isset($_POST['Commentaires']) AND !empty ($_POST['Commentaire'])) {
         $commentaire = htmlspecialchars($_POST['commentaire']); 
		 {
            $ins = $connexion->prepare('INSERT INTO commentaires (Commentaires, id_pays) VALUES (?,?,?)');
            $ins->execute(($commentaires);
            $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
         } 
      } else {
         $c_msg = "Erreur: Tous les champs doivent être complétés";
      }
   }
   $commentaires = $connexion->prepare('SELECT * FROM commentaires WHERE id_pays = ? ORDER BY id DESC');
   $commentaires->execute();
?>
<h2>Article:</h2>
<p><?= $commentaires['contenu'] ?></p>
<br />
<h2>Commentaires:</h2>
<form method="POST">
   <textarea name="commentaire" placeholder="Votre commentaire..."></textarea><br />
   <input type="submit" value="Poster mon commentaire" name="submit_commentaire" />
</form>
<?php if(isset($c_msg)) { echo $c_msg; } ?>
<br /><br />
<?php while($c = $commentaires->fetch()) { ?>
   <b><?= $c['commentaire'] ?><br />
<?php } ?>
<?php
}
?>