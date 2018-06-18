<?php

//appelle la BDD homemate
include('connexionBD.php');

//Marque un message comme lu lorsqu'on l'ouvre
$bdd->exec('UPDATE `messagerie` SET `Consulte`=1 WHERE ID='.$_SESSION['id'][$_GET['message']]);

?>