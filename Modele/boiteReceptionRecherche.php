<?php

include('connexionBD.php');
/*
$req = $bdd->query('SELECT * FROM messagerie ');
*/
	$numMessage=0;
	
// Récupération des 10 derniers messages
$req = $bdd->query('SELECT * FROM messagerie WHERE Reception = \''.$_SESSION['email'].'\' ORDER BY Dates DESC'); /*ORDER BY Date DESC LIMIT 0, 10*/
// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $req->fetch())
{
	$sujet[] = $donnees['Sujet'];
	$expediteur[] = $donnees['Expediteur'];
    $nomExp[] = $donnees['nomExp'];
	$date[] = $donnees['Dates'];
	$message[] = $donnees['Message'];
	$reception[] = $donnees['Reception'];
	$id[] = $donnees['ID'];
	$corbeille[] = $donnees['Corbeille'];
    $consulte[] = $donnees['Consulte'];
	$numMessage++;
}
$_SESSION['sujet']=$sujet;
$_SESSION['expediteur']=$expediteur;
$_SESSION['nomExp']=$nomExp;
$_SESSION['date']=$date;
$_SESSION['message']=$message;
$_SESSION['reception']=$reception;
$_SESSION['id']=$id;
$_SESSION['corbeille']=$corbeille;
$_SESSION['consulte']=$consulte;
header('Location: index.php?cible=boiteMail');
?>