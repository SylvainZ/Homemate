<?php
session_start();

//vérifie si le champ nom est rempli
if (isset($_POST['nom'])) {

    //appelle la BDD homemate
    include('connexionBD.php');

    //met à jour la table pour la modification du profil administrateur
    $req = $bdd->prepare('UPDATE administrateur SET Nom = ? ,Prenom= ? ,Email = ? ,Adresse = ? ,codePostal = ?,Ville = ?, Pays=?, Telephone = ? WHERE Email = ?');
        $req->execute(array(
            htmlspecialchars($_POST['nom']),
            htmlspecialchars($_POST['prenom']),
            htmlspecialchars($_POST['email']),
            htmlspecialchars($_POST['adresse']),
            htmlspecialchars($_POST['codePostal']),
            htmlspecialchars($_POST['ville']),
            htmlspecialchars($_POST['pays']),
            htmlspecialchars($_POST['numTel']),
            $_SESSION['email']
        ));

    $req->closeCursor();
    echo 'vous avez bien enregistré les modifications';

    //renvoi vers le controleur qui va actualiser le profil
    header('Location: index.php?cible=sessionProfilActualisation');
}
else{
    //renvoie vers la page de saisie du formulaire
    header('Location: Vue/modifierProfilAdmin.php');
} ?>