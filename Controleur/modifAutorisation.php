<?php
session_start();

//vérifie l'existence des variables act et indice
if (isset($_GET['act']) && isset($_GET['indice'])) {
    $action=$_GET['act'];

    //s'il veut supprimer l'accès à une habitation
    if ($action=='supprimer') {
        $ind=$_GET['indice'];

        //renvoie vers le modèle qui va supprimer l'accès
        include('Modele/supprimerAutorisation.php');
    }


    //s'il veut ajouter un accès à une habitation
    else {
        $_SESSION['indiceMail']=$_GET['indice'];

        //renvoie vers le modèle qui permettra de créer un lien entre l'habitation et le user
        include('Modele/habitationsAutorisation.php');
    }

}

else {
    //renvoie vers la page qui récapitule les infos user
    header('Location:index.php?cible=gererUserSec');
}