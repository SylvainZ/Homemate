<?php

//appelle la BDD homemate
include('connexionBD.php');

//sélectionne le message dans la table qui a l'ID correspondant
$req = $bdd->query('SELECT * FROM messagerie WHERE ID = '.$_GET['message']);
$donnees = $req->fetch()

?>