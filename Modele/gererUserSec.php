<?php

//appelle la BDD homemate
include('connexionBD.php');

//Distinction des cas sur la variable action
switch($action) {

    //Le cas où l'on veut modifier les autorisations
    case 'modifier' :

        //sélectionne les informations de l'utilisateur concerné
        $req = $bdd->query('SELECT * FROM logement INNER JOIN profil ON logement.ID=profil.ID_logement_sec AND profil.Email= \''.$_SESSION['emailAut'][$ind].'\' ');
        while ($donnees = $req->fetch())
        {
            $adresseHabAutor[] = $donnees['Adresse'];
            $pieceHabAutor[] = $donnees['NombrePiece'];
            $superficieHabAutor[]= $donnees['Superficie'];
        }

        //vérifie s'il est relié à un logement
        if (!empty($adresseHabAutor)) {
            //stocke les tableaux dans des variables de session
            $_SESSION['adresseHabA'] = $adresseHabAutor;
            $_SESSION['pieceHabA'] = $pieceHabAutor;
            $_SESSION['superficieHabA'] = $superficieHabAutor;
        }

        //renvoie vers la page récapitulatives des informations
       include('Vue/modifAutorisation.php');

        break;


    //le cas où l'on veut supprimer les autorisations d'un utilisateur secondaire
    case 'supprimer':

        //supprime l'utilisateur de la table profil
        $req = $bdd->query('DELETE FROM profil WHERE Email=\'' . $_SESSION['emailAut'][$ind] . '\'');

        //renvoie vers la page autorisation
        header('Location:index.php?cible=autorisation');

        break;

}