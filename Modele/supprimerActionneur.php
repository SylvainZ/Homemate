<?php

//appelle la BDD homemate
include('connexionBD.php');

//supprime un actionneur

    $req = $bdd->query('DELETE FROM actionneurs WHERE id=\'' . $_GET['idSuppressionActionneur'] . '\'');
    include('Vue/capteur.php');


?>