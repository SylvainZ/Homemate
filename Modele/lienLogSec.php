<?php

//appelle la BDD homemate
include('connexionBD.php');

//vérifie si l'utilisateur secondaire est déjà inscrit
if (isset($_SESSION['emailAut']) && isset($_SESSION['indiceMail'])){
    $ind=$_SESSION['indiceMail'];

    //entre l'ID du logement à l'utilisateur en question
    $req = $bdd->prepare("UPDATE profil SET ID_logement_sec=? WHERE Statut= ?  AND Email = ?");
    $req->execute(array(
        $_SESSION['idHab'][$indice],
        'secondaire-'.$_SESSION['ID'],
        $_SESSION['emailAut'][$ind]
    ));


}

//vérifie si c'est pendant l'inscription de l'utilisateur secondaire
else {
//entre l'ID du logement à l'utilisateur en question
$req = $bdd->prepare("UPDATE profil SET ID_logement_sec=? WHERE Statut= ?  AND Email = ?");
$req->execute(array(
    $_SESSION['idHab'][$indice],
    'secondaire-'.$_SESSION['ID'],
    $_SESSION['emailA']
));
}

//renvoie vers la page où il y a la liste des utilisateurs secondaires
header('Location:index.php?cible=autorisation');

?>