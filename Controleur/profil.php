<?php
session_start();

//renvoie vers le profil d'un admin
if (isset($_SESSION['Admin'])) {
    include('Vue/profilAdmin.php');
}

else {
    //renvoie vers le profil d'un utilisateur secondaire
    if ($_SESSION['statut']=='secondaire')
    {
        include('Vue/profilSecondaire.php');
    }

    //renvoie vers le profil d'un utilisateur principal
    else {
        include('Vue/profil.php');
    }
}

    ?>