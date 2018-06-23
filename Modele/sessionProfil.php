<?php
session_start();

//appelle la BDD homemate
include('connexionBD.php');

//vérifie si la session est celle d'un utilisateur
if (!isset($_SESSION['Admin']) ) {

    //pour l'actualisation du profil
    if (isset($_SESSION['email'])) {
        $req = $bdd->query('SELECT * FROM profil WHERE Email = \''.$_SESSION['email'].'\'');

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
        $_SESSION['prefixRue'] = $donnees['PrefixRue'];

        //renvoie vers le profil une fois l'actualisation réussie
        header('Location: index.php?cible=profil');
    }

    //création d'un compte
    else {
        $req = $bdd->query('SELECT * FROM profil WHERE Email = \'' . $_GET['email'] . '\''); /*.$_GET['email'].*/
        $donnees = $req->fetch();
        if ($donnees['Statut']=='locataire' || $donnees['Statut']=='proprietaire') {
            $_SESSION['ID'] = $donnees['ID'];
            $_SESSION['nom'] = $donnees['Nom'];
            $_SESSION['prenom'] = $donnees['Prenom'];
            $_SESSION['statut'] = $donnees['Statut'];
            $_SESSION['numAppartement'] = $donnees['NumeroAppartement'];
            $_SESSION['numEtage'] = $donnees['NumeroEtage'];
            $_SESSION['numRue'] = $donnees['NumeroRue'];
            $_SESSION['numBis'] = $donnees['Bis'];
            $_SESSION['nomRueBdAve'] = $donnees['NomRueAveBd'];
            $_SESSION['numDepartement'] = $donnees['NumeroDepartement'];
            $_SESSION['ville'] = $donnees['Ville'];
            $_SESSION['email'] = $donnees['Email'];
            $_SESSION['numTel'] = $donnees['NumeroTelephone'];
            $_SESSION['datedenaissance'] = $donnees['Datedenaissance'];
            $_SESSION['numLogement'] = $donnees['NumeroLogement'];
            $_SESSION['surface'] = $donnees['surface'];
            $_SESSION['codePostal'] = $donnees['CodePostal'];
            $_SESSION['numPiece'] = $donnees['NumeroPi�ce'];
            $_SESSION['prefixRue'] = $donnees['PrefixRue'];
            $_SESSION['typeHab'] = $donnees['TypeHab'];
            $_SESSION['pays'] = $donnees['Pays'];


            $date_courante = new DateTime(date("Y-m-d"));
            $date_naissance = new DateTime($_SESSION['datedenaissance']);
            $interval = date_diff($date_courante, $date_naissance);
            $_SESSION['age'] = $interval->format('%Y');
        }
        else{

            $_SESSION['ID'] = $donnees['ID'];
            $_SESSION['nom'] = $donnees['Nom'];
            $_SESSION['prenom'] = $donnees['Prenom'];
            $_SESSION['email'] = $donnees['Email'];
            $_SESSION['ID_logement_sec']=$donnees['ID_logement_sec'];

            $statut=explode('-',$donnees['Statut']);
            $_SESSION['statut'] = $statut[0];
            $_SESSION['ID_principal']=$statut[1];

            //sélectionne les informations de l'utilisateur concerné
            $req2 = $bdd->query('SELECT Adresse,logement.Ville,logement.CodePostal FROM logement INNER JOIN profil ON logement.ID=profil.ID_logement_sec AND profil.Email= \''.$_GET['email'].'\' ');
            $donnees2 = $req2->fetch();
            $_SESSION['adresse']=$donnees2['Adresse'];
            $_SESSION['ville']=$donnees2['Ville'];
            $_SESSION['codePostal']=$donnees2['CodePostal'];

        }

        //renvoie vers la page d'accueil une fois la connexion réussie
        header('Location:../index.php?cible=accueil');
    }

}

//vérifie si la session est celle d'un admin
else {

    //pour l'actualisation du profil
    if (isset($_SESSION['email'])) {
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

        //renvoie vers le profil une fois l'actualisation réussie
        header('Location: index.php?cible=profil');
    }

    //création d'un compte
    else {
        $req = $bdd->query('SELECT * FROM administrateur WHERE Email = \'' . $_GET['email'] . '\''); /*.$_GET['email'].*/
        $donnees = $req->fetch();
        $_SESSION['nom'] = $donnees['Nom'];
        $_SESSION['prenom'] = $donnees['Prenom'];
        $_SESSION['ville'] = $donnees['Ville'];
        $_SESSION['pays'] = $donnees['Pays'];
        $_SESSION['adresse'] = $donnees['Adresse'];
        $_SESSION['email'] = $donnees['Email'];
        $_SESSION['numTel'] = $donnees['Telephone'];
        $_SESSION['datedenaissance'] = $donnees['Datedenaissance'];
        $_SESSION['codePostal'] = $donnees['CodePostal'];
        $_SESSION['statut'] = $donnees['Statut'];
        $_SESSION['ID'] = $donnees['ID'];

        //calcul de l'âge à partir de la date de naissance
        $date_courante = new DateTime(date("Y-m-d"));
        $date_naissance = new DateTime($_SESSION['datedenaissance']);
        $interval = date_diff($date_courante, $date_naissance);
        $_SESSION['age'] = $interval->format('%Y');

        //renvoie vers la page d'accueil une fois la connexion réussie
        header('Location:../index.php?cible=accueil');
    }


}





?>