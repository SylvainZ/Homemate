<?php
session_start();
if (isset($_POST['nom'])) {

    include('connexionBD.php');
    /*INSERT INTO profil (Nom,Prenom,Statut,NumeroAppartement,NumeroEtage,NumeroRue,Bis,PrefixeRueAveBd,NomRueAveBd,NumeroDepartement,Ville,Email,NumeroTelephone) VALUES ('nom','preomn','Gérant',5,5,46,'avenue','Champs de Mars',71,'Paris','fr@fr.fr',32)*/
    $req = $bdd->prepare('UPDATE administrateur SET Nom = ? ,Prenom= ? ,Email = ? ,Adresse = ? ,codePostal = ?,Ville = ?, Pays=?, Telephone = ? WHERE Email = ?');
        $req->execute(array(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['adresse'],
            $_POST['codePostal'],
            $_POST['ville'],
            $_POST['pays'],
            $_POST['numTel'],
            $_SESSION['email']
        ));

    $req->closeCursor();
    echo 'vous avez bien enregistré les modifications';
    header('Location: index.php?cible=sessionProfilActualisation');
}
else{
    header('Location: Vue/modifierProfilAdmin.php');
} ?>