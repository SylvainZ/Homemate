<?php
session_start();
include('Modele/creationCompteAdmin.php');
echo'Compte ajouté';
include('Vue/administrateurPersonnalisation.php');
?>