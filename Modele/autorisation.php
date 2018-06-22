<?php

//appelle la BDD homemate
include('connexionBD.php');


    //prend la liste des mails des utilisateurs secondaires
    $req = $bdd->query('SELECT * FROM profil WHERE Statut =  \'secondaire-'.$_SESSION['ID'].'\'');
    while ($donnees = $req->fetch())
    {
        $nomAutor[] = $donnees['Nom'];
        $prenomAutor[] = $donnees['Prenom'];
    }

    $_SESSION['nomA']=$nomAutor;
    $_SESSION['prenomA']=$prenomAutor;



//renvoie vers la page autorisations
include('Vue/autorisation.php');



?>