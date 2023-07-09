<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verifcss.css" media="screen" type="text/css" />
    <title>Page de connexion</title>
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
        <!-- zone de connexion -->
        
        <form action="connectiondb.php" method="POST">
        <h1>Connexion</h1>
        
        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrez le nom d'utilisateur" name="username" required>
       
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrez le mot de passe" name="password" required>
       
        <input type="submit" id='submit' value='CONNEXION' >

        <br>
        <br>
        <a href="insc.php">Si vous n'avez pas de compte!</a> <br>
        <a href="insc.php" >Cliquez ici pour créer votre compte </a><br> <br>

        <?php

        if(isset($_GET['erreur'])) {
        $err = $_GET['erreur'] ;
        if($err==1 || $err==2)
            echo "Utilisateur ou mot de passe incorrect !";
            echo "Veuillez entrer a nouveau vos identifiants.";
        }
        
        ?>

        </form>
    </div>
    </body>
</html>