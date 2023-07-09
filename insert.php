<?php
$servername = "localhost";
$database = "site";
$username = "root";
$password = "";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
$nom = $_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$mdp = $_POST['mdp'];

//echo "Connected successfully";
$sql = "INSERT INTO utilisateur(nom_utilisateur , prenom , email , mot_de_passe) VALUES ('$nom','$prenom','$email', '$mdp')";
if (mysqli_query($conn, $sql)) {
     include("firstpage.php") ;}
mysqli_close($conn);
?>