<?php

//appelle la BDD homemate
include('connexionBD.php');

//Met l'ID_logement_sec à 0 pour dire qu'il n'est relié à aucune habitation
$req = $bdd->query('UPDATE profil SET ID_logement_sec=0 WHERE Email=\'' . $_SESSION['emailAut'][$ind] . '\'');

//renvoie vers la page autorisation
header('Location:index.php?cible=autorisation');