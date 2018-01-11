<!DOCTYPE html>

<html lang="fr">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">

    <meta name="author" content="BootstrapBay.com">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	

  </head>

  <body>

		<form action="traitement_formulaire_contact.php" method="post">
		
  	<div class="container">

  		<div class="row">

  			<div class="col-md-6 col-md-offset-3">

  				<h1 class="page-header text-center">Nous Contacter</h1>

					<div class="form-group">

						<label for="name" class="col-sm-2 control-label">Nom</label>

						<div class="col-sm-10">

							<input type="text" class="form-control" id="nom" name="nom" placeholder="Nathan Percheron">

						</div>
						
						</div>
						
						
	<div class="form-group">

						<label for="email" class="col-sm-2 control-label">Email</label>

						<div class="col-sm-10">

							<input type="email" class="form-control" id="email" name="email" placeholder="John.law@outlook.fr">

							</div>
							
						</div>
						
						
	<div class="form-group">

						<label for="Message" class="col-sm-2 control-label">Message</label>

						<div class="col-sm-10">

							<textarea class="form-control" rows="7" name="message">
							
							</textarea>

						</div>

					</div>
					
					
					
	<div class="form-group">

							<button type="submit" name="envoi" class="btn btn-default submit-button">Envoyer</button>

						</div>
						
						
	</div>
	
</div>

</div>

  </body>
  
  </form>

</html>












