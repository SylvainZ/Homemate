<?php

    //appelle la BDD homemate
	include('connexionBD.php');


$req = $bdd->query('SELECT Chemin FROM accueilimage');

$donnees = $req->fetch();
$chemin1=$donnees['Chemin'];
$donnees = $req->fetch();
$chemin2=$donnees['Chemin'];
$donnees = $req->fetch();
$chemin3=$donnees['Chemin'];
$donnees = $req->fetch();
$chemin4=$donnees['Chemin'];
?>