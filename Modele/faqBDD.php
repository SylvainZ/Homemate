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


if (isset($_POST['question']) and isset($_POST['reponse']))
{
    $req = $bdd->prepare('INSERT INTO faq(question, reponse) VALUES(:question, :reponse)');
    $req->execute(array(
        'question' => $_POST['question'],
        'reponse' => $_POST['reponse'],
    ));
}
elseif (isset($_POST['question']))
{
    $req = $bdd->prepare('INSERT INTO faq (question) VALUES(:question)');
    $req->execute(array(
        'question' => $_POST['question'],
    ));
    header('Location:index.php?cible=FAQ');
}


if (isset($_POST['supprimer']))
{
    $req2 = $bdd->prepare('DELETE FROM faq WHERE id = :id');
    $req2->execute(array(
        'id' => $_GET['id']
    ));
}

if (isset($_POST['modifquestion']) or isset($_POST['modifreponse']))
{
    $req2 = $bdd->prepare('UPDATE faq SET question = :question, reponse = :reponse WHERE id = :id');
    $req2->execute(array(
        'question' => $_POST['modifquestion'],
        'reponse' => $_POST['modifreponse'],
        'id' => $_GET['id']
    ));
}

?>