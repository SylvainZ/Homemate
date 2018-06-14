<?php 

	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
			die('Erreur : '.$e->getMessage());
	}
	$bdd->exec('UPDATE `accueilImage` SET `Chemin`=\''.$_POST['image1'].'\' WHERE ID=1');
	$bdd->exec('UPDATE `accueilImage` SET `Chemin`=\''.$_POST['image2'].'\' WHERE ID=2');
?>