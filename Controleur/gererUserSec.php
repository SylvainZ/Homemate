<?php

//démarre la session
session_start();

//vérifie l'existence des variables action et ind
if (isset($_GET['action']) && isset($_GET['ind'])) {

    $action=$_GET['action'];
    $ind=$_GET['ind'];

    //renvoie vers le modèle qui va exécuter l'action donnée dans l'URL
    include('Modele/gererUserSec.php');

}


else {
    //renvoie vers la page autorisation
    header('Location:index.php?cible=autorisation');
}
