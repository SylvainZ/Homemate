<?php
include('connexionBD.php');

if (isset($_GET['idSupTypCapteur'])&&!empty($_GET['idSupTypCapteur'])){
    $req=$bdd->query('DELETE FROM typecapteuractionneur WHERE ID_type=\'' . $_GET['idSupTypCapteur'] . '\'');
    header('Location:index.php?cible=supprimerType');
}

elseif(isset($_GET['idSupTypActionneur'])&&!empty($_GET['idSupTypActionneur'])){
    $req=$bdd->query('DELETE FROM typecapteuractionneur WHERE ID_type=\'' . $_GET['idSupTypActionneur'] . '\'');
    header('Location:index.php?cible=supprimerType');
}

?>