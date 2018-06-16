<?php

//appelle la BDD homemate
include('connexionBD.php');

//vérifie si l'admin a bien rempli les champs pour ajouter une question et sa réponse
if (isset($_POST['question']) and isset($_POST['reponse']))
{

    $req = $bdd->prepare('INSERT INTO faq(question, reponse) VALUES(:question, :reponse)');
    $req->execute(array(
        'question' => htmlspecialchars($_POST['question']),
        'reponse' => htmlspecialchars($_POST['reponse']),
    ));
}

//s'il s'agit de la requête (question) d'un utilisateur ou d'un internaute
elseif (isset($_POST['question']))
{
    $req = $bdd->prepare('INSERT INTO faq (question) VALUES(:question)');
    $req->execute(array(
        'question' => htmlspecialchars($_POST['question']),
    ));
    header('Location:index.php?cible=FAQ');
}

//si l'admin veut supprimer une question/réponse de la FAQ
if (isset($_POST['supprimer']))
{
    $req2 = $bdd->prepare('DELETE FROM faq WHERE id = :id');
    $req2->execute(array(
        'id' => $_GET['id']
    ));
}

//si l'admin veut modifier une question de la FAQ
if (isset($_POST['modifquestion']))
{
    $req2 = $bdd->prepare('UPDATE faq SET question = :question WHERE id = :id');
    $req2->execute(array(
        'question' => htmlspecialchars($_POST['modifquestion']),
        'id' => $_GET['id']
    ));
}

//si l'admin veut modifier une réponse de la FAQ
if (isset($_POST['modifreponse']))
{
    $req2 = $bdd->prepare('UPDATE faq SET reponse = :reponse WHERE id = :id');
    $req2->execute(array(
        'reponse' => htmlspecialchars($_POST['modifreponse']),
        'id' => $_GET['id']
    ));
}


?>