<?php

//vérifie que l'utilisateur a bien rempli les champs
if (isset($_POST['piece'])&&isset($_POST['superficie'])){

    //appelle la BDD homemate
    include('connexionBD.php');

    //met à jour la table avec les modifs de l'utilisateur
    $req = $bdd->prepare('UPDATE logement SET NombrePiece=?, Superficie=? WHERE ID = ?');
    $req->execute(array(
            htmlspecialchars($_POST['piece']),
            htmlspecialchars($_POST['superficie']),
            $_GET['ID']
        ));

    $req->closeCursor();
    echo 'vous avez bien enregistrer les modification';

    //renvoie vers la page où il y a la liste des logements
    header('Location:index.php?cible=logement&ID='.$_GET['ID']);
}
else{
   //renvoie vers la page de saisie du formulaire
    header('Location: Vue/modifierLogement.php&ID='.$_GET['ID']);
} ?>