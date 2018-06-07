<?php
if (isset($_POST['nom'])){
	try {	$bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));}
	catch(Exception $e){	die('Erreur : '.$e->getMessage());}
	$req = $bdd->prepare('INSERT INTO `messagerie`(`Expediteur`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`) VALUES (?,?,?,?,?,?,?)');
		$req->execute(array($_POST['nom'].' ; '.$_POST['Email'],$_POST['Objet'],date('Y/m/d') ,
		date('h:i:s'),
		'Leon',$_POST['message'],	'admin'));

	header('Location: ../Vue/boiteMail.php');
}
else{
    header('Location: ../Modele/messagerie.php');
} ?>