<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container">
			<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Inscription</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-center">
					<form action="enregistrement.php" method="post">
						
						<div class="form-group">
							<label for="nom_inscrit" class="cols-sm-2 control-label">Nom:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" class="form-control" name="nom_inscrit" id="nom_inscrit"  placeholder="Smith"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="prenom_inscrit" class="cols-sm-2 control-label">Prénom:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i><i class="glyphicon glyphicon-user"></i></span>
									<input type="text" class="form-control" name="prenom_inscrit" id="prenom_inscrit"  placeholder="John"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="date_naiss" class="cols-sm-2 control-label">Date de naissance:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i><i class="glyphicon glyphicon-gift"></i></span>
									<input type=date class="form-control" name="date_naiss" id="date_naiss"  placeholder="JJ/mm/aaaa"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="ville" class="cols-sm-2 control-label">Ville:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i><i class="glyphicon glyphicon-home"></i></span>
									<input type="text" class="form-control" name="ville" id="ville"  placeholder="Paris"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="pays" class="cols-sm-2 control-label">Pays:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i><i class="glyphicon glyphicon-globe"></i></span>
									<input type="text" class="form-control" name="pays" id="pays"  placeholder="France"/>
								</div>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">E-mail:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i><i class="glyphicon glyphicon-envelope"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="John.Smith@gmail.com"/>
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<label for="mot_de_passe" class="cols-sm-2 control-label">Mot de passe:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe"/>
								</div>
							</div>
						</div>

						
						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirmation du mot de passe:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i><i class="glyphicon glyphicon-lock"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"/>
								</div>
							</div>
						</div>

						
						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">S'inscrire</button>
							
							
								
						</div>
						    </div>
						
<div class="container">
    <hr>
        <div class="text-center center-block">
		
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
	            <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
</div>
    <hr>
</div>  

	
						<div class="login-register">
				            <a href="Se_connecter.php">Se connecter</a>
				         </div>
					</form>
				</div>
			</div>
		</div>