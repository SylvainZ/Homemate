<?php
include('connexionBD.php');
$req = $bdd->query('SELECT * FROM profil WHERE Email = \''.$_SESSION['email'].'\''); /*.$_GET['email'].*/
$donnees = $req->fetch();
$_SESSION['nom']=$donnees['Nom'];
$_SESSION['prenom']=$donnees['Prenom'];

$date_courante = new DateTime(date("Y-m-d"));
$date_naissance = new DateTime($donnees['Datedenaissance']);
$interval = date_diff($date_courante,$date_naissance);

$age=$interval->format('%Y');

?>