<?php

//appelle la BDD homemate
include('connexionBD.php');

//
if (isset($_POST['ajoutCapteur'])&&!empty($_POST['ajoutCapteur']))
{
    $req = $bdd->prepare('INSERT INTO typecapteuractionneur(nomType,Capteur) VALUES(?,?)');
    $req->execute(array(
        htmlspecialchars($_POST['ajoutCapteur']),
        1
    ));
    header('Location:index.php?cible=controleCapteur');
}

elseif (isset($_POST['ajoutActionneur'])&&!empty($_POST['ajoutActionneur']))
{
    $req2 = $bdd->prepare('INSERT INTO typecapteuractionneur(nomType,Actionneur) VALUES(?,?)');
    $req2->execute(array(
        htmlspecialchars($_POST['ajoutActionneur']),
        1
    ));
    header('Location:index.php?cible=controleCapteur');
}


?>


