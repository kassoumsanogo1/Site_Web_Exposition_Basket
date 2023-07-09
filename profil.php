<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profiltestcss.css" media="screen" type="text/css" />
    <title>Profile Page</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>


<?php
    
    session_start();
    if($_SESSION['username'] !== ""){
    $nom = $_SESSION['username'];
    }
    ?>



    <!-- Navbar top -->
    <div class="navbar-top">
        <div class="title">
            <h1>Profile M-SNICKERS</h1>
        </div>

        <!-- Navbar -->
        <ul>
        <li><a href="pageaccueil.html">Accueil</a></li>
        <li><a href="presentation_article.html">Blog</a></li>
				<li><a href="panier.html">Panier</a></li>
				<li><button><a href="profil.php"> Profil </button></a></li>
                
            </li>
        </ul>
        <!-- End -->
    </div>
   

    <!-- Main -->
    <div class="main">
        <h2>IDENTITE DE L'UTILISATEUR</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <table>
                    <tbody>
                        <tr>
                            <td> Nom d'utilisateur </td>
                            <td>:</td>
                            <td> <?=$nom ?></td>
                        </tr>
                        <tr>
                            <td> Type de Chaussure </td>
                            <td>:</td>
                            <td>Nike,Jordan,Addidas</td>
                        </tr>
                       
                        <tr>
                            <td>Pointure</td>
                            <td>:</td>
                            <td>43</td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>

        <h2>SOCIAL MEDIA</h2>
        <div class="card">
            <div class="card-body">
                <i class="fa fa-pen fa-xs edit"></i>
                <div class="social-media">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->
</body>
</html>

    
       