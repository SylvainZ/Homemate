<?php
// On démarre la session AVANT d'écrire du code HTML

//appelle la BDD homemate
include('connexionBD.php');

//vérifie si la session est celle d'un admin
if (isset($_SESSION['Admin'])) {
    $req = $bdd->query('SELECT * FROM administrateur WHERE Email = \''.$_SESSION['email'].'\''); //à modifier pour faire en fonction de l'utilisateur

    $donnees = $req->fetch();

    $_SESSION['nom'] = $donnees['Nom'];
    $_SESSION['prenom'] = $donnees['Prenom'];
    $_SESSION['ville'] = $donnees['Ville'];
    $_SESSION['pays']=$donnees['Pays'];
    $_SESSION['adresse']=$donnees['Adresse'];
    $_SESSION['email'] = $donnees['Email'];
    $_SESSION['numTel'] = $donnees['Telephone'];
    $_SESSION['datedenaissance'] = $donnees['Datedenaissance'];
    $_SESSION['codePostal'] = $donnees['CodePostal'];
    $_SESSION['ID'] = $donnees['ID'];


}

//vérifie si la session est celle d'un utilisateur
else {
$req = $bdd->query('SELECT * FROM profil WHERE Email = \''.$_SESSION['email'].'\''); //à modifier pour faire en fonction de l'utilisateur

$donnees = $req->fetch();

$_SESSION['nom']=$donnees['Nom'];
$_SESSION['prenom']=$donnees['Prenom'];
$_SESSION['statut']=$donnees['Statut'];
$_SESSION['numEtage']=$donnees['NumeroEtage'];
$_SESSION['numRue']=$donnees['NumeroRue'];
$_SESSION['numBis']=$donnees['Bis'];
$_SESSION['nomRueBdAve']=$donnees['NomRueAveBd'];
$_SESSION['ville']=$donnees['Ville'];
$_SESSION['email']=$donnees['Email'];
$_SESSION['numTel']=$donnees['NumeroTelephone'];
$_SESSION['datedenaissance']=$donnees['Datedenaissance'];
$_SESSION['numLogement']=$donnees['NumeroLogement'];
$_SESSION['surface']=$donnees['surface'];
$_SESSION['codePostal']=$donnees['CodePostal'];

}
//renvoie vers le profil une fois l'actualisation réussie
header('Location: index.php?cible=profil');
?>
