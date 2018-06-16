<?php

//appelle la BDD homemate
include('connexionBD.php');

//supprime un actionneur
if(isset($_GET['id'])&&!empty($_GET['id'])) {
    $req = $bdd->query('DELETE FROM actionneurs WHERE id=\'' . $_GET['id'] . '\'');
    include('Vue/capteurActionneursHabitations.php');
}
else {}
?>