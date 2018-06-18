
<?php

//vérifie que l'utilisateur a bien rempli les champs
if (isset($_POST['nom'])&&isset($_POST['superficie'])){

    //appelle la BDD homemate
    include('connexionBD.php');

    //met à jour la table avec les modifs de l'utilisateur
    $req = $bdd->prepare('UPDATE piece SET Nom=?, Superficie=? WHERE ID = ?');
    $req->execute(array(
        htmlspecialchars($_POST['nom']),
        htmlspecialchars($_POST['superficie']),
        $_GET['ID']
    ));

    //renvoie vers la page où il y a la liste des pièces
    header('Location:index.php?cible=piece&ID='.$_GET['id']);
}
else{
    //renvoie vers la page de saisie du formulaire
    header('Location:index.php?cible=piece&ID='.$_GET['id']);
} ?>