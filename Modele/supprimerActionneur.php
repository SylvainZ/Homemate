<?php
include('connexionBD.php');
if(isset($_GET['id'])&&!empty($_GET['id'])) {
    $req = $bdd->query('DELETE FROM actionneurs WHERE id=\'' . $_GET['id'] . '\'');
    include('Vue/capteurActionneursHabitations.php');
}
else {}
?>