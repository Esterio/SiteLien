
<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
			</div>
			<div class="collapse navbar-collapse" id="navcol-1">
			<a class="navbar-brand" href="#">Voyages autour du monde</a>
			<ul class="nav navbar-nav">
			   <li><a href="Accueil.php">Accueil</a></li>
				<ul class="dropdown-menu">
				 
				</ul>
			  </li>
			  <li><a href="Angleterre.php">Angleterre</a></li>
			  <li><a href="Japon.php">Japon</a></li>
			  <li><a href="Inde.php">Inde</a></li>
			  <li><a href="Etats-Unis.php">Etats-Unis</a></li>
			  <li class="active"><a href="France.php">France</a></li>
			  <li><a href="Chine.php">Chine</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			<form class="navbar-form navbar-left">							
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Identifiant">
				</div>
					<button type="submit" class="btn btn-default">Rechercher</button>
			</form>
<?php
// initialisation de la séssion
session_start();
if (isset ($_SESSION ['connecter']))
{
	
}
else
{
$_SESSION['connecter'] = 'Non';
}

if ($_SESSION ['connecter'] != 'Oui')
					{
					?>
                        <a href="Se_connecter.php"> <i class="glyphicon glyphicon-user"></i> Se connecter</a>
                    <?php
					}
					else
					{
					?>
					
					<a href="#"> <i class="glyphicon glyphicon-user"></i> Bonjour</a>
					<?php
					echo $_SESSION ['nom'];
					echo $_SESSION ['prenom'];
					?>
					<a href="destroysession.php"> <i class="glyphicon glyphicon-log-out"></i> Se déconnecter</a>					
                    <?php
					
					
					}
					?>
 
			  <li><a href="inscrire.php">S'inscrire</a></li>
			  
			 </ul>
			
		  </div>
		</nav>
