<?php

//appelle la BDD homemate
include('connexionBD.php');


    //prend la liste des utilisateurs secondaires
    $req = $bdd->query('SELECT * FROM profil WHERE Statut =  \'secondaire-'.$_SESSION['ID'].'\' ORDER BY Nom,Prenom');
    while ($donnees = $req->fetch())
    {
        $idAutor[]=$donnees['ID'];
        $nomAutor[] = $donnees['Nom'];
        $prenomAutor[] = $donnees['Prenom'];
        $emailAutor[]= $donnees['Email'];
    }

    if (!empty($idAutor)) {
    //stocke les informations dans des variables de session
    $_SESSION['idA']=$idAutor;
    $_SESSION['nomA']=$nomAutor;
    $_SESSION['prenomA']=$prenomAutor;
    $_SESSION['emailAut']= $emailAutor; }


//renvoie vers la page autorisation
include('Vue/autorisation.php');



?>