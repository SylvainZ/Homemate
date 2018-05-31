<?php


if(isset($_GET['cible']) && !empty($_GET['cible'])) {
    // Si la variable cible est passé en GET
    $url = $_GET['cible']; //user, sensor, etc.
} else {
    // Si aucun contrôleur défini en GET, on bascule sur utilisateurs
    $url = 'accueil';
}
// On appelle le contrôleur
include('Controleur/' . $url . '.php');