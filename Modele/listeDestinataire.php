<?php

//appelle la BDD homemate
include('connexionBD.php');


if (!isset($_SESSION['Admin']) ) { /*Si c'est un utilisateur*/

    //prend la liste des mails des admin
    $req = $bdd->query('SELECT Email FROM administrateur ');
    while ($donnees = $req->fetch())
    {
        $listeDest[] = $donnees['Email'];
    }

    $_SESSION['liste']=$listeDest;

}

else { /*Si c'est un admin*/
    //prend la liste des mails des utilisateurs
    $req = $bdd->query('SELECT Email FROM profil');
    while ($donnees = $req->fetch())
    {
        $listeDest[] = $donnees['Email'];
    }

    $_SESSION['liste']=$listeDest;

}

//renvoie vers la page messagerie
include('Vue/messagerie.php');



?>