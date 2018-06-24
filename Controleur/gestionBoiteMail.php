<?php
session_start();
include('Modele/gestionBoiteMail.php');
header('Location: index.php?cible=boiteMailReception');

?>