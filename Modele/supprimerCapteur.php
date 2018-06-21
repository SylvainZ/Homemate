
<?php
if(isset($_GET['id'])&&!empty($_GET['id'])) {
    //appelle la BDD homemate
    include('connexionBD.php');

    //supprime un capteur
    $req = $bdd->query('DELETE FROM capteur WHERE id=\'' . $_GET['id'] . '\'');
    include('Vue/capteurs.php');
}
else {}
?>