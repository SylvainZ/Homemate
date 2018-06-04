<?php
session_start();
session_destroy();
include('Modele/lienImagesBDD.php');
include("Vue/pageDaccueil.php")
?>