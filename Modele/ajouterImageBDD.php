<?php 

    //appelle la BDD homemate
	require('connexionBD.php');


	$bdd->exec('UPDATE `accueilImage` SET `Chemin`=\''.$_POST['image1'].'\' WHERE ID=1');
	$bdd->exec('UPDATE `accueilImage` SET `Chemin`=\''.$_POST['image2'].'\' WHERE ID=2');
?>