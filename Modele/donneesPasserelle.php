<?php
include('connexionBD.php');
if ($c==7){
    $req = $bdd->prepare('UPDATE capteur SET Presence=? WHERE Type = ?');
    $req->execute(array($v,'Presence'));
}
