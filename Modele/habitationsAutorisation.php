<?php

//appelle la BDD homemate
include('connexionBD.php');

$habitation = $bdd->query('SELECT * FROM logement WHERE IdUser = \''.$_SESSION['ID'].'\'');

while ($donnees = $habitation->fetch())
{
    $idHabA[]=$donnees['ID'];
    $adresseHabA[] = $donnees['Adresse'];
    $pieceHabA[] = $donnees['NombrePiece'];
    $superficieHabA[] = $donnees['Superficie'];
}

$_SESSION['idHabA']=$idHabA;
$_SESSION['adresseHabA']=$adresseHabA;
$_SESSION['pieceHabA']=$pieceHabA;
$_SESSION['superficieHabA']=$superficieHabA;

include('Vue/habitationsAutorisation.php');

?>