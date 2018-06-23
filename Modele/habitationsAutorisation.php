<?php

//appelle la BDD homemate
include('connexionBD.php');

//prend la liste des logements de l'utilisateur principal
$habitation = $bdd->query('SELECT * FROM logement WHERE IdUser = \''.$_SESSION['ID'].'\'');

while ($donnees = $habitation->fetch())
{
    $idHab[]=$donnees['ID'];
    $adresseHab[] = $donnees['Adresse'];
    $pieceHab[] = $donnees['NombrePiece'];
    $superficieHab[] = $donnees['Superficie'];
}

//stocke les tableaux dans des variables de session
$_SESSION['idHab']=$idHab;
$_SESSION['adresseHab']=$adresseHab;
$_SESSION['pieceHab']=$pieceHab;
$_SESSION['superficieHab']=$superficieHab;

//renvoie vers la page qui affiche la liste des habitations
include('Vue/habitationsAutorisation.php');

?>