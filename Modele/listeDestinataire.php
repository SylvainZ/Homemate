<?php

include('connexionBD.php');

if (!isset($_SESSION['Admin']) ) { /*Si c'est un utilisateur*/

    $req = $bdd->query('SELECT Email FROM administrateur ');
    while ($donnees = $req->fetch())
    {
        $listeDest[] = $donnees['Email'];
    }

    $_SESSION['liste']=$listeDest;

}

else { /*Si c'est un admin*/
    $req = $bdd->query('SELECT Email FROM profil');
    while ($donnees = $req->fetch())
    {
        $listeDest[] = $donnees['Email'];
    }

    $_SESSION['liste']=$listeDest;

}


include('Vue/messagerie.php');



?>