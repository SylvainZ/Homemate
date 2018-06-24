<?php

//appelle la BDD homemate
include('connexionBD.php');

if ($_SESSION['statut']=='secondaire') {

    //sélections des capteurs
    $lumi = $bdd->query('SELECT capteur.id,capteur.nom,Presence,piece.Nom FROM capteur INNER JOIN piece ON capteur.type = \'Luminosité\' AND capteur.idpiece = piece.ID INNER JOIN logement ON piece.ID_logement=logement.ID AND logement.ID=\'' . $_SESSION['ID_logement_sec'].'\'');

    $pres = $bdd->query('SELECT capteur.id,capteur.nom,Presence,piece.Nom FROM capteur INNER JOIN piece ON capteur.type = \'Presence\' AND capteur.idpiece = piece.ID INNER JOIN logement ON piece.ID_logement=logement.ID AND logement.ID=\'' . $_SESSION['ID_logement_sec'].'\'');


    //sélection des actionneurs
    $inter = $bdd->query('SELECT actionneurs.ID,actionneurs.nom,piece.Nom FROM actionneurs INNER JOIN piece ON actionneurs.type = \'Interrupteur\' AND actionneurs.idpiece = piece.ID INNER JOIN logement ON piece.ID_logement=logement.ID AND logement.ID=\'' . $_SESSION['ID_logement_sec'].'\'');

    $volet = $bdd->query('SELECT actionneurs.ID,actionneurs.nom,piece.Nom FROM actionneurs INNER JOIN piece ON actionneurs.type = \'volet\' AND actionneurs.idpiece = piece.ID INNER JOIN logement ON piece.ID_logement=logement.ID AND logement.ID=\'' . $_SESSION['ID_logement_sec'].'\'');

    //renvoie vers la page capteur pour les utilisateurs secondaires
    include('Vue/capteurActionneursHabitations.php');
}

//utilisateur principal
else {
    //sélection des capteurs
    $lumi = $bdd->query('SELECT * FROM capteur WHERE type = \'Luminosite\' AND iduser=\'' . $_SESSION['ID'] . '\'');
    $pres = $bdd->query('SELECT * FROM capteur WHERE type = \'Presence\' AND iduser =\'' . $_SESSION['ID'] . '\'');

    //sélection des actionneurs
    $inter = $bdd->query('SELECT * FROM actionneurs WHERE type = \'Interrupteur\' AND iduser =\'' . $_SESSION['ID'] . '\'');
    $volet = $bdd->query('SELECT * FROM actionneurs WHERE type = \'volet\' AND iduser =\'' . $_SESSION['ID'] . '\'');

    include('Vue/capteurActionneursHabitations.php');
}