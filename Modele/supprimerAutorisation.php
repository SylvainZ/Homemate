<?php

//appelle la BDD homemate
include('connexionBD.php');

$req = $bdd->query('UPDATE profil SET ID_logement_sec=0 WHERE Email=\'' . $_SESSION['emailAut'][$ind] . '\'');

header('Location:index.php?cible=gererUserSec');