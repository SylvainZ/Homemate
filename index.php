<?php


if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est pass� en GET
    $url = $_GET['cible']; //user, sensor, etc.
} else {
    // Si aucun contr�leur d�fini en GET, on bascule sur utilisateurs
    $url = 'accueil';
}

// On appelle le contr�leur
if(isset($_GET['message']) && !empty($_GET['message'])){
    include('Controleur/'.$url.'.php?message='.$_GET['message']);
}


else {
 
include('Controleur/' . $url . '.php');
}

?>
