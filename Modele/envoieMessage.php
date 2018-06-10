<?php
if (isset($_POST['Objet'])){
	include('connexionBD.php');

	if (isset($_SESSION['email']) && $_SESSION['statut']) {

        $req = $bdd->prepare('INSERT INTO `messagerie`(`Expediteur`,`nomExp`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`) VALUES (?,?,?,?,?,?,?,?)');
        $req->execute(array(
            $_SESSION['email'],
            $_SESSION['nom']." ".$_SESSION['prenom'],
            $_POST['Objet'],
            date('Y/m/d'),
            date('h:i:s'),
            $_POST['destinataire'],
            $_POST['message'],
            $_SESSION['statut']));

        header('Location: index.php?cible=boiteMail');
    }

    else {
	    $Expediteur=explode(',',$_POST['Nom']);
        $req = $bdd->prepare('INSERT INTO `messagerie`(`Expediteur`,`nomExp`, `Sujet`, `Date`, `Heure`, `Reception`, `Message`, `Statut`) VALUES (?,?,?,?,?,?,?,?)');
        $req->execute(array(
            $Expediteur[1],
            $Expediteur[0],
            $_POST['Objet'],
            date('Y/m/d'),
            date('h:i:s'),
            $_POST['destinataire'],
            $_POST['message'],
            'Internaute'));

        header('Location: index.php?cible=accueil');


    }
}

else{
    header('Location: index.php?cible=messagerie');
} ?>