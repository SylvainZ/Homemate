<?php
session_start();

    include('../Modele/connexionBD.php');
    $sql=$bdd->query('SELECT * FROM messagerie WHERE notif=0 AND Reception=\''.$_SESSION['email'].'\'');
    $count=$sql->rowCount();
    if($count>0) {
        echo $count;
    }


?>
