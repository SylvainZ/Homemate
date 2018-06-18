<?php

//vérifie si l'utilisateur a rempli tous les champs
if(!empty($_POST['nom'])&&!empty($_POST['type'])&&!empty($_POST['superficie'])&&(isset($_GET['ID'])))
{
    //appelle la BDD homemate
    include('connexionBD.php');
    
    //ajoute une pièce à la table piece
    $req = $bdd->prepare("INSERT INTO piece(nom,type,superficie,ID_logement) VALUES(?,?,?,?)");
    $req->execute(array(
        htmlspecialchars($_POST['nom']),
        htmlspecialchars($_POST['type']),
        htmlspecialchars($_POST['superficie']),
        $_GET['ID']
        
    ));
    
    $ID=$_GET['ID'];

    //renvoie vers la page de la liste des pièces
    header('Location: index.php?cible=piece&ID='.$ID);

}
else
    //renvoie vers la page de saisie du formulaire
    header('Location:index.php?cible=ajoutPiece');
?>