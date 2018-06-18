<?php

//appelle la BDD homemate
include('connexionBD.php');

//supprime un capteur
if(isset($_GET['id'])&&!empty($_GET['id'])) {
    $req = $bdd->query('DELETE FROM capteur WHERE id=\'' . $_GET['id'] . '\'');
    require('Vue/capteurActionneursHabitations.php');
}

//supprime un logement
elseif(isset($_GET['ID'])&&!empty($_GET['ID'])) {
    $req = $bdd->query('DELETE FROM logement WHERE ID=\'' . $_GET['ID'] . '\'');
    require('Vue/habitations.php');
}
?>