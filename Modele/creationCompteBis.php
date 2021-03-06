<?php

//vérifie si le champs nom est bien rempli
if(isset($_POST['nom'])) {
    //appelle la BDD homemate
    include('connexionBD.php');

        //Sélectionne les mails de la table profil
        $requete = $bdd->prepare("SELECT Email FROM profil WHERE Email = ?");
        $requete->execute(array($_POST['Email']));
        $existence = true;

        //Parcours la table profil pour trouver le mail entré par l'utilisateur
        while ($donnees = $requete->fetch()) {
            //vérifie si le mail est déjà utilisé dans la table profil et renvoie vers le formulaire si c'est le cas
            if ($donnees['Email'] == $_POST['Email']) {
                $message = "Ce mail est déjà utilisé";
                include('Vue/creerUnCompte.php');
                $existence = false;
                break;
            } else {
                $existence = true;
                break;
            }
        }
        //s'il n'est pas utilisé, ajoute un nouvel utilisateur à la table
        if ($existence) {

            //sécurisation des champs entrés par l'utilisateur
            $_SESSION['Email'] = htmlspecialchars($_POST['Email']);
            $password = sha1(htmlspecialchars($_POST['password']));
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $Email = htmlspecialchars($_POST['Email']);


            //génerer un code de confirmation
            $code = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
            $code = str_shuffle($code); //On crée une combinaison de VARCHAR
            $code = substr($code, 0, 10);

            $_SESSION['cod']=$code;

            $to = $Email;
            $subject = 'inscription';
            $message = 'Votre code de confirmation est'.' '.$code.'.';
            $headers = 'From: domisep@isep.fr';

            //envoi d'un mail
            mail($to, $subject, $message, $headers);

            $req = $bdd->prepare("INSERT INTO profil(nom,prenom,Email,password) VALUES(:nom,:prenom,:Email,:password)");
            $req->execute(array(
                'nom' => $nom,
                'prenom' => $prenom,
                'Email' => $Email,
                'password' => $password,
            ));

            //vérifie s'il s'agit d'un utilisateur principal qui est connecté et veut entrer un utilisateur secondaire
            if (isset($_SESSION['nom'])) {
                $req = $bdd->prepare("UPDATE profil SET Statut=? WHERE Email= ? ");
                $req->execute(array(
                    'secondaire-'.$_SESSION['ID'],
                    $Email
                ));

                $_SESSION['emailA']=$Email;
                //renvoie vers une page pour choisir l'habitation à lier avec l'utilisateur secondaire
                header('Location:index.php?cible=confirmationSec');
            }
            else {
                //renvoie vers le formulaire de la 2e étape de l'inscription
                header('Location:index.php?cible=confirmation');
            }
        }
}


else
    //renvoie vers la page de saisie du formulaire
    header('Location:index.php?cible=creerUnCompte');
?>