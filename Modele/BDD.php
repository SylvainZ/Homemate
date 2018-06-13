<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=homemate;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : '.$e->getMessage());
}

if (isset($_POST['modification']) && isset($_GET['id']))
{
    $req = $bdd->prepare('UPDATE capteur SET type = ? WHERE id = '. $_GET['id']);
    $req->execute([$_POST['moddification']]);
    header('Location:index.php?cible=controleCapteur2');
}
else{
    header('Location:index.php?cible=controleCapteur2');
}
if (isset($_POST['ajoutCapteur']))
{
    $req2 = $bdd->prepare('INSERT INTO capteur(type) VALUES(:type)');
    $req2->execute(array(
        'type' => $_POST['ajoutCapteur']
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
        'nom' => $_POST['ajoutActionneur']
    ));
    header('Location:index.php?cible=controleCapteur2');
}
else{
    header('Location:index.php?cible=controleCapteur2');
}

?>


