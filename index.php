<?php


if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est pass� en GET
    $url = $_GET['cible']; //user, sensor, etc.
} else {
    // Si aucun contr�leur d�fini en GET, on bascule sur utilisateurs
    $url = 'accueil';
}
// On appelle le contr�leur
include('Controleur/' . $url . '.php');