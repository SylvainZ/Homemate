<?php

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}

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