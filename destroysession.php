<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// supprimer toutes les variable de session
session_unset(); 

// détruire la session 
session_destroy();
header('Location: Accueil.php');
?>

</body>
</html> 