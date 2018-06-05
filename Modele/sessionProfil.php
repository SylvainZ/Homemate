<?php
session_start();
include('connexionBD.php');
$req = $bdd->query('SELECT * FROM profil WHERE Email = \''.$_GET['email'].'\''); /*.$_GET['email'].*/
$donnees = $req->fetch();
$_SESSION['nom']=$donnees['Nom'];
$_SESSION['prenom']=$donnees['Prenom'];
$_SESSION['email']=$donnees['Email'];

header('Location:../index.php?cible=accueil');

?>