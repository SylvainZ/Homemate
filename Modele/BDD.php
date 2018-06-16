<?php

//appelle la BDD homemate
include('connexionBD.php');

//
if (isset($_POST['modification']) && isset($_GET['id']))
{
    $req = $bdd->prepare('UPDATE capteur SET type= ? WHERE id ='. $_GET['id'] );
    $req->execute(array(
        htmlspecialchars($_POST['modification'])

    ));
    header('Location:index.php?cible=controleCapteur2');
}

else{
    header('Location:index.php?cible=controleCapteur2');
}


if (isset($_POST['ajoutCapteur']))
{
    $req2 = $bdd->prepare('INSERT INTO capteur(type) VALUES(:type)');
    $req2->execute(array(
        'type' => htmlspecialchars($_POST['ajoutCapteur'])
    ));
    header('Location:index.php?cible=controleCapteur2');
}

else{
    header('Location:index.php?cible=controleCapteur2');
}


if (isset($_POST['ajoutActionneur']))
{
    $req3 = $bdd->prepare('INSERT INTO actionneurs (nom) VALUES(:nom)');
    $req3->execute(array(
        'nom' => htmlspecialchars($_POST['ajoutActionneur'])
    ));
    header('Location:index.php?cible=controleCapteur2');
}
else{
    header('Location:index.php?cible=controleCapteur2');
}

?>


