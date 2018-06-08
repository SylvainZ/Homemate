<?php 
session_start();

if (isset($_SESSION['Admin'])) {
    include ('Modele/modifieProfilAdmin.php');
}

else {
    include('Modele/modifieProfil.php');
}
?>