<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="verifcss.css" media="screen" type="text/css" />
 </head>
 <body style='background:#fff;'>
 <div id="content">

 <?php
 session_start();
 if($_SESSION['username'] !== ""){
 $user = $_SESSION['username'];
 include("pageaccueil.html");
 }
 ?>
 

 </div>
 </body>
</html>