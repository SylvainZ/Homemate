<?php
session_start();
session_destroy();
header('Location:index.php?cible=accueil');
include('Modele/lienImagesBDD.php');

?>