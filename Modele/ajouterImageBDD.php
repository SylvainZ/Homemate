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
	$bdd->exec('UPDATE `accueilImage` SET `Chemin`=\''.$_POST['image3'].'\' WHERE ID=3');	
	$bdd->exec('UPDATE `accueilImage` SET `Chemin`=\''.$_POST['image4'].'\' WHERE ID=4');
	echo $_POST['image1'].$_POST['image2'].$_POST['image3'].$_POST['image4'];
?>