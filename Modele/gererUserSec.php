<?php

//appelle la BDD homemate
include('connexionBD.php');

switch($action) {
    //Le cas où l'on veut modifier les autorisations
    case 'modifier' :
        $req = $bdd->query('SELECT * FROM logement INNER JOIN profil ON logement.ID=profil.ID_logement_sec AND profil.Email= \''.$_SESSION['emailAut'][$ind].'\' ');
        while ($donnees = $req->fetch())
        {
            $adresseHabAutor[] = $donnees['Adresse'];
            $pieceHabAutor[] = $donnees['NombrePiece'];
            $superficieHabAutor[]= $donnees['Superficie'];
        }

        if (!empty($adresseHabAutor)) {
            $_SESSION['adresseHabA'] = $adresseHabAutor;
            $_SESSION['pieceHabA'] = $pieceHabAutor;
            $_SESSION['superficieHabA'] = $superficieHabAutor;
        }

       include('Vue/modifAutorisation.php');

        break;





    case 'supprimer':

        $req = $bdd->query('DELETE FROM profil WHERE Email=\'' . $_SESSION['emailAut'][$ind] . '\'');
        header('Location:index.php?cible=autorisation');

        break;

}