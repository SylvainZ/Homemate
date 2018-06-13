<?php
include('connexionBD.php');

if ($c==2){
    $req = $bdd->prepare('UPDATE capteur SET temperature=? WHERE Type = ?');
    $req->execute(array($v,'Temperature'));
}

include('Vue/capteurActionneursHabitations.php');
