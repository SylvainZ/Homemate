<?php
session_start();
if (isset($_POST['nom'])/*
	&&isset($_POST['prenom'])
	&&isset($_POST['statut'])
	&&isset($_POST['numAppartement'])
	&&isset($_POST['numRue'])
	&&isset($_POST['prefixeRueBdAve'])
	&&isset($_POST['nomRueBdAve'])
	&&isset($_POST['departement'])
	&&isset($_POST['ville'])
	&&isset($_POST['email'])
	&&isset($_POST['numTel'])*/){
	include('connexionBD.php');
	/*INSERT INTO profil (Nom,Prenom,Statut,NumeroAppartement,NumeroEtage,NumeroRue,Bis,PrefixeRueAveBd,NomRueAveBd,NumeroDepartement,Ville,Email,NumeroTelephone) VALUES ('nom','preomn','Gérant',5,5,46,'avenue','Champs de Mars',71,'Paris','fr@fr.fr',32)*/
	$req = $bdd->prepare('UPDATE profil SET Nom = ? ,Prenom= ? ,Statut = ? ,NumeroLogement = ? ,NumeroEtage=?, NumeroRue = ? ,Bis = ? ,NomRueAveBd = ? ,codePostal = ? ,Ville = ? ,Email = ? ,NumeroTelephone = ? WHERE Email = ?');
	if(isset($_POST['numBis'])){
		$req->execute(array($_POST['nom'],
		$_POST['prenom'],
		$_POST['statut'],
		$_POST['numLogement'],
		$_POST['numEtage'],
		$_POST['numRue'],
		$_POST['numBis'],
		$_POST['nomRueBdAve'],
		$_POST['codePostal'],
		$_POST['ville'],
		$_POST['email'],
		$_POST['numTel'],
		$_SESSION['email']
		));}
	else{
		$req->execute(array($_POST['nom'],
		$_POST['prenom'],
		$_POST['statut'],
		$_POST['numLogement'],
		$_POST['numEtage'],
		$_POST['numRue'],
		'NONE',
		$_POST['nomRueBdAve'],
		$_POST['codePostal'],
		$_POST['ville'],
		$_POST['email'],
		$_POST['numTel'],
		$_SESSION['email']
		));
	}
	$req->closeCursor();
	echo 'vous avez bien enregistrer les modification';
	header('Location: index.php?cible=sessionProfilActualisation');
}
else{
    header('Location: Vue/modifierProfil.php');
} ?>