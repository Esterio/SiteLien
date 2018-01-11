
<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			<a class="navbar-brand" href="#">Voyages autour du monde</a>
			<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
			</div>
			<div class="collapse navbar-collapse" id="navcol-1">
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
					
                    <li role="presentation"><a href="inscrire.php" class="text-primary"><i class="glyphicon glyphicon-pencil"></i> Inscription </a></li>
					
					<li role="presentation"><a href="Se_connecter.php" class="text-primary"><i class="glyphicon glyphicon-user"></i> Se connecter </a></li>
                    <?php
					}
					else
					{
					?>
					
					<li role="presentation"><a href="#" class="text-primary"><i class="glyphicon glyphicon-user"></i> Bonjour </a></li>
					
					<li role="presentation"><a href="#" class="text-primary">
					<?php
					echo $_SESSION ['nom'] . ' ' . $_SESSION ['prenom'];
					?>
					</a></li>
					<li role="presentation"><a href="destroysession.php" class="text-primary" > <i class="glyphicon glyphicon-log-out"></i> Se déconnecter</a>					
                    <?php
					
					
					}
					?>
 
			  
			  
			 </ul>
			
		  </div>
		</nav>