<?php

if(isset($_GET['id'])&&!empty($_GET['id'])) {
    include('Modele/connexionBD.php');
    
    $req4 = $bdd->query('DELETE FROM capteur WHERE idpiece ='.$_GET['id'] );
    $req2 = $bdd->query('DELETE FROM piece WHERE ID=\'' . $_GET['id'] . '\'');
    include('Vue/piece.php');
    
}

else {
include('Vue/piece.php');
}
?>