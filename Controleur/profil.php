<?php
session_start();

if (isset($_SESSION['Admin'])) {
    include('Vue/profilAdmin.php');
}

else {
    include('Vue/profil.php');
    }

    ?>