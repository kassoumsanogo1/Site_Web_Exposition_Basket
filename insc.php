<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verifcss.css" media="screen" type="text/css" />
    <title>Inscription page</title>
</head>
<body>

<header>
	<div class="container">
		<div class="col-div-6">
			<p class="logo"><span>M-</span>Snikers'</p>
		</div>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
   
    <div id="container">
        <!-- zone d'inscription -->

        

        <form action="insert.php" method="POST">
        <h1>Inscription</h1>
        
        <label><b>Nom ou Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrez votre nom" name="nom" required>

        <label><b>Prénom</b></label>
        <input type="text" placeholder="Entrez votre prénom" name="prenom" required >
       
        <label><b>email</b></label>
        <input type="email" placeholder="Entrez votre email" name="email" required>        
       
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrez votre mot passe" name="mdp" required>

        <label><b>Confirmez le mot de passe</b></label>
        <input type="password" placeholder="Re-entrez votre mot passe" name="passwordee" >
       
        <input type="submit" id='submit' value='CONFIRMER INSCRIPTION' >

        

        </form>
        </div>
</body>
</html>