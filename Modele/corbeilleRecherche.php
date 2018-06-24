<?php

//appelle la BDD homemate
include('connexionBD.php');

	
// Récupération des messages triés par date
$req = $bdd->query('SELECT * FROM messagerie WHERE Reception =\''.$_SESSION['email'].'\' ORDER BY Dates DESC ');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $req->fetch())
{
    //stockage des différents champs des messages dans des tableaux
	$sujet[] = $donnees['Sujet'];
	$expediteur[] = $donnees['Expediteur'];
	$date[] = $donnees['Dates'];
	$message[] = $donnees['Message'];
	$reception[] = $donnees['Reception'];
	$id[] = $donnees['ID'];
	$corbeille[] = $donnees['Corbeille'];
	$numMessage++;
}

if (!empty($id)) {
//affectation des tableaux aux variables de session
    $_SESSION['sujet'] = $sujet;
    $_SESSION['expediteur'] = $expediteur;
    $_SESSION['date'] = $date;
    $_SESSION['message'] = $message;
    $_SESSION['reception'] = $reception;
    $_SESSION['id'] = $id;
    $_SESSION['corbeille'] = $corbeille;
}
//redirection vers le contrôleur corbeille
header('Location: index.php?cible=corbeille');
?>