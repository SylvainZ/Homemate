<?php
//vérifie si l'utilisateur a bien rempli le champs objet
if (isset($_POST['Objet'])){

    //appelle la BDD homemate
	include('connexionBD.php');

	//vérifie s'il s'agit d'un utilisateur connecté
	if (isset($_SESSION['email']) && $_SESSION['statut']) {

	    //ajoute le message à la table messagerie
        $req = $bdd->prepare('INSERT INTO `messagerie`(`Expediteur`,`nomExp`, `Sujet`, `Dates`, `Heure`, `Reception`, `Message`, `Statut`) VALUES (?,?,?,?,?,?,?,?)');
        $req->execute(array(
            $_SESSION['email'],
            $_SESSION['nom']." ".$_SESSION['prenom'],
            htmlspecialchars($_POST['Objet']),
            date('Y/m/d'),
            date('h:i:s'),
            htmlspecialchars($_POST['destinataire']),
            htmlspecialchars($_POST['message']),
            $_SESSION['statut']));

        $to = $_POST['destinataire'];
        $subject = $_POST['Objet'];
        $message = $_POST['message'];
        $headers = 'From: domisep@isep.fr'.' '.$_SESSION['email'];

        mail($to, $subject, $message, $headers);
        //renvoie l'utilisateur sur sa boîte de réception
        header('Location: index.php?cible=boiteMail');
    }

    //s'il s'agit d'un internaute
    else {
        //sépare le nom et le mail de l'internaute pour les insérer dans la BDD
	    $Expediteur=explode(',',htmlspecialchars($_POST['Nom']));
	    //ajoute le message à la table messagerie
        $req = $bdd->prepare('INSERT INTO `messagerie`(`Expediteur`,`nomExp`, `Sujet`, `Dates`, `Heure`, `Reception`, `Message`, `Statut`) VALUES (?,?,?,?,?,?,?,?)');
        $req->execute(array(
            $Expediteur[1],
            $Expediteur[0],
            htmlspecialchars($_POST['Objet']),
            date('Y/m/d'),
            date('h:i:s'),
            htmlspecialchars($_POST['destinataire']),
            htmlspecialchars($_POST['message']),
            'Internaute'));

        //renvoie l'internaute sur la page d'accueil du site
        header('Location: index.php?cible=accueil');


    }
}

else{
    //renvoie sur la page de saisie du formulaire d'envoi de message
    header('Location: index.php?cible=messagerie');
} ?>