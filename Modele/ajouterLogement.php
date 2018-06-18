<?php

//vérifie si l'utlisateur a bien rempli tous les champs
if(!empty($_POST['type'])&&!empty($_POST['adresse'])&&!empty($_POST['ville'])&&!empty($_POST['piece'])&&!empty($_POST['postal'])&&!empty($_POST['superficie']))
{
    //appelle la BDD homemate
    include('connexionBD.php');

    //ajoute le logement à la table logement
    $req = $bdd->prepare("INSERT INTO logement(Type,Adresse,Superficie,Ville,NombrePiece,CodePostal,IdUser) VALUES(?,?,?,?,?,?,?)");
    $req->execute(array(
        htmlspecialchars($_POST['type']),
        htmlspecialchars($_POST['adresse']),
        htmlspecialchars($_POST['superficie']),
        htmlspecialchars($_POST['ville']),
        htmlspecialchars($_POST['piece']),
        htmlspecialchars($_POST['postal']),
        $_SESSION['ID']
    ));

    //renvoie vers la page habitations
    header('Location: index.php?cible=logement');
}
else{
    //renvoie vers la page de saisie du formulaire sinon
    header('Location: index.php?cible=ajouterLogement');
}
?>