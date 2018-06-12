
<?php
if(isset($_GET['id'])&&!empty($_GET['id'])) {
    include('Modele/connexionBD.php');
    $req = $bdd->query('DELETE FROM capteur WHERE id=\'' . $_GET['id'] . '\'');
    include('Vue/capteurActionneursHabitations.php');
}
else {}
?>