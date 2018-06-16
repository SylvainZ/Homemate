<?php
session_start();

//vérfie que les champs obligatoires ont bien été remplis
if(!empty($_POST['dateDeNaissance']&&!empty($_POST['tel'])&&!empty($_POST['statut'])
    &&!empty($_POST['numRue'])&&!empty($_POST['prefixRueBdAve'])&&!empty($_POST['nomRoute'])&&!empty($_POST['postal'])
    &&!empty($_POST['Ville'])&&!empty($_POST['pays'])
    &&!empty($_POST['typedHab'])&&!empty($_POST['surface'])&&!empty($_POST['piece'])))
{
    //appelle la BDD homemate
    include('connexionBD.php');

    //met à jour la table profil avec les données de l'utilisateur
        $req = $bdd->prepare("UPDATE profil SET Datedenaissance = ?,NumeroTelephone = ?,Statut = ?,NumeroLogement = ?,
                            NumeroEtage = ?,NumeroRue = ?,Bis = ?,PrefixRue = ?,NomRueAveBd = ?, CodePostal = ?, Ville = ?, Pays = ?, TypeHab = ?,surface = ?,Pieces = ? 
                            WHERE Email = ?");
        $req->execute(array(
            htmlspecialchars($_POST['dateDeNaissance']),
            htmlspecialchars($_POST['tel']),
            htmlspecialchars($_POST['statut']),
            htmlspecialchars($_POST['numLogement']),
            htmlspecialchars($_POST['numEtage']),
            htmlspecialchars($_POST['numRue']),
            htmlspecialchars($_POST['numBis']),
            htmlspecialchars($_POST['prefixRueBdAve']),
            htmlspecialchars($_POST['nomRoute']),
            htmlspecialchars($_POST['postal']),
            htmlspecialchars($_POST['Ville']),
            htmlspecialchars($_POST['pays']),
            htmlspecialchars($_POST['typedHab']),
            htmlspecialchars($_POST['surface']),
            htmlspecialchars($_POST['piece']),
            $_SESSION['Email']
            
        ));

    //renvoie vers la page d'accueil
    header('Location:index.php?cible=accueil');

}   
    else
    {
        //renvoie vers la page de saisie du formulaire
    header('Location:index.php?cible=locataireProprietaire');
    }
?>