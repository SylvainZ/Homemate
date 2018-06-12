<?php

if(isset($_GET['ID'])&&!empty($_GET['ID'])) {
    include('Modele/connexionBD.php');
    $req = $bdd->query('DELETE FROM logement WHERE ID=\'' . $_GET['ID'] . '\'');
    include('Vue/habitations.php');
}
else {}
?>