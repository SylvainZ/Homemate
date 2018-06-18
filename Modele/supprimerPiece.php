<?php

if(isset($_GET['id'])&&!empty($_GET['id'])) {

    //appelle la BDD homemate
    include('connexionBD.php');

    //supprime la pièce et ses capteurs associés
    $req4 = $bdd->query('DELETE FROM capteur WHERE idpiece ='.$_GET['id'] );
    $req2 = $bdd->query('DELETE FROM piece WHERE ID=\'' . $_GET['id'] . '\'');

    //renvoie vers la page pièce
    include('Vue/piece.php');
    
}

else {
    //renvoie vers la page pièce sans la suppression
    include('Vue/piece.php');
}
?>