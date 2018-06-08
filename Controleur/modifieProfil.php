<?php 
session_start();

if (isset($_SESSION['Admin'])) {
    include ('Vue/modifierProfilAdmin.php');
}

else {
    include('Vue/modifierProfil.php');
}
 ?>