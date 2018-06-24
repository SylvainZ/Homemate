
<?php

    //appelle la BDD homemate
    include('connexionBD.php');

    //supprime un capteur
    $req = $bdd->query('DELETE FROM capteur WHERE id=\'' . $_GET['idSuppressionCapteur'] . '\'');
    include('Vue/capteur.php');

?>