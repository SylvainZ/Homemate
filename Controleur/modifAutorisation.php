<?php
session_start();

if (isset($_GET['act']) && isset($_GET['indice'])) {
    $action=$_GET['act'];

    //s'il veut supprimer l'accès à une habitation
    if ($action=='supprimer') {
        $ind=$_GET['indice'];
        include('Modele/supprimerAutorisation.php');
    }

    //s'il veut ajouter un accès à une habitation
    else {
        $_SESSION['indiceMail']=$_GET['indice'];
        include('Modele/habitationsAutorisation.php');
    }

}

else {

    header('Location:index.php?cible=gererUserSec');
}