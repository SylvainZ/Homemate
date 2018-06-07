<?php
session_start();
session_destroy();
include('Modele/lienImagesBDD.php');
header("Location:index.php?cible=accueil");
?>